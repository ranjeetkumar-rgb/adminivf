<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class BlogCommentController extends Controller
{
    public function store(Request $request, $blogId): JsonResponse
    {
        $blog = Blog::findOrFail($blogId);
        
        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'location' => 'nullable|string|max:100',
            'consultation_interest' => 'nullable|in:yes,maybe,no',
            'additional_notes' => 'nullable|string|max:1000',
            'comment' => 'required|string',
            'parent_id' => 'nullable|exists:comments,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        // Use default values for anonymous comments
        $name = $request->name ?? 'Guest';
        $email = $request->email ?? 'guest_' . time() . '_' . rand(1000, 9999) . '@anonymous.local';
        
        // Find or create user profile
        $userProfile = UserProfile::findOrCreateByEmail($email, [
            'name' => $name,
            'phone' => $request->phone,
            'location' => $request->location,
            'consultation_interest' => $request->consultation_interest,
            'additional_notes' => $request->additional_notes,
        ]);

        $comment = Comment::create([
            'blog_id' => $blog->id,
            'user_profile_id' => $userProfile->id,
            'name' => $name,
            'email' => $email,
            'phone' => $request->phone,
            'location' => $request->location,
            'consultation_interest' => $request->consultation_interest,
            'additional_notes' => $request->additional_notes,
            'comment' => $request->comment,
            'parent_id' => $request->parent_id,
            'is_approved' => true, // Auto-approve for instant display
            'likes' => 0
        ]);

        // Update user profile stats
        $userProfile->updateCommentStats();

        // Update blog comments count
        $blog->updateCommentsCount();

        return response()->json([
            'success' => true,
            'message' => 'Comment posted successfully!',
            'comment' => $comment,
            'comments_count' => $blog->fresh()->comments_count,
            'pending_approval' => false
        ]);
    }

    public function getComments($blogId): JsonResponse
    {
        try {
            $blog = Blog::with(['approvedComments.replies' => function($query) {
                $query->approved();
            }])->findOrFail($blogId);

            $comments = $blog->approvedComments;

            \Log::info('Blog comments API', [
                'blog_id' => $blogId,
                'comments_count' => $comments->count(),
                'blog_comments_count' => $blog->comments_count
            ]);

            return response()->json([
                'success' => true,
                'comments' => $comments,
                'comments_count' => $blog->comments_count
            ]);
        } catch (\Exception $e) {
            \Log::error('Error getting comments', [
                'blog_id' => $blogId,
                'error' => $e->getMessage()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Error loading comments: ' . $e->getMessage(),
                'comments' => [],
                'comments_count' => 0
            ], 500);
        }
    }

    public function likeComment(Request $request, $commentId): JsonResponse
    {
        $comment = Comment::findOrFail($commentId);
        $comment->incrementLikes();

        return response()->json([
            'success' => true,
            'message' => 'Comment liked successfully',
            'likes_count' => $comment->fresh()->likes
        ]);
    }

    public function checkUser(Request $request): JsonResponse
    {
        $email = $request->input('email');
        
        if (!$email) {
            return response()->json([
                'success' => false,
                'message' => 'Email is required'
            ], 400);
        }

        $userProfile = UserProfile::where('email', $email)->first();
        
        if ($userProfile) {
            return response()->json([
                'success' => true,
                'user_exists' => true,
                'user' => [
                    'name' => $userProfile->name,
                    'email' => $userProfile->email,
                    'phone' => $userProfile->phone,
                    'location' => $userProfile->location,
                    'consultation_interest' => $userProfile->consultation_interest,
                    'total_comments' => $userProfile->total_comments
                ]
            ]);
        }

        return response()->json([
            'success' => true,
            'user_exists' => false
        ]);
    }

    public function login(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $userProfile = UserProfile::where('email', $request->email)->first();

        if (!$userProfile) {
            return response()->json([
                'success' => false,
                'message' => 'User not found. Please register first.'
            ], 404);
        }

        if (!$userProfile->password) {
            return response()->json([
                'success' => false,
                'message' => 'Account not set up. Please register with a password.'
            ], 400);
        }

        if (!Hash::check($request->password, $userProfile->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid password.'
            ], 401);
        }

        return response()->json([
            'success' => true,
            'message' => 'Login successful',
            'user' => [
                'id' => $userProfile->id,
                'name' => $userProfile->name,
                'email' => $userProfile->email,
                'phone' => $userProfile->phone,
                'location' => $userProfile->location,
                'consultation_interest' => $userProfile->consultation_interest,
            ]
        ]);
    }

    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
            'phone' => 'nullable|string|max:20',
            'location' => 'nullable|string|max:100',
            'consultation_interest' => 'nullable|in:yes,maybe,no',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        // Check if user already exists
        $existingUser = UserProfile::where('email', $request->email)->first();
        
        if ($existingUser) {
            if ($existingUser->password) {
                return response()->json([
                    'success' => false,
                    'message' => 'User already exists. Please login instead.'
                ], 409);
            } else {
                // User exists but no password - update with password
                $existingUser->update([
                    'name' => $request->name,
                    'password' => Hash::make($request->password),
                    'phone' => $request->phone,
                    'location' => $request->location,
                    'consultation_interest' => $request->consultation_interest,
                ]);
                
                return response()->json([
                    'success' => true,
                    'message' => 'Account created successfully',
                    'user' => [
                        'id' => $existingUser->id,
                        'name' => $existingUser->name,
                        'email' => $existingUser->email,
                        'phone' => $existingUser->phone,
                        'location' => $existingUser->location,
                        'consultation_interest' => $existingUser->consultation_interest,
                    ]
                ]);
            }
        }

        // Create new user
        $userProfile = UserProfile::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'location' => $request->location,
            'consultation_interest' => $request->consultation_interest,
            'first_comment_at' => now(),
            'last_comment_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Account created successfully',
            'user' => [
                'id' => $userProfile->id,
                'name' => $userProfile->name,
                'email' => $userProfile->email,
                'phone' => $userProfile->phone,
                'location' => $userProfile->location,
                'consultation_interest' => $userProfile->consultation_interest,
            ]
        ]);
    }
}