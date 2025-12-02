<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BlogEngagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-blogs');
    }

    /**
     * Show engagement dashboard
     */
    public function index()
    {
        $blogs = Blog::with(['comments'])
            ->withCount(['comments as total_comments', 'comments as approved_comments' => function($query) {
                $query->where('is_approved', true);
            }])
            ->orderBy('views', 'desc')
            ->paginate(10);

        $engagementStats = [
            'total_blogs' => Blog::count(),
            'total_views' => Blog::sum('views'),
            'total_likes' => Blog::sum('likes'),
            'total_comments' => Comment::count(),
            'pending_comments' => Comment::where('is_approved', false)->count(),
            'approved_comments' => Comment::where('is_approved', true)->count(),
        ];

        $topPerformingBlogs = Blog::orderBy('views', 'desc')
            ->take(5)
            ->get();

        $recentComments = Comment::with('blog')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return view('admin.blog.engagement.index', compact(
            'blogs',
            'engagementStats',
            'topPerformingBlogs',
            'recentComments'
        ));
    }

    /**
     * Show comments management
     */
    public function comments(Request $request)
    {
        $query = Comment::with(['blog', 'parent', 'userProfile']);

        // Filter by blog_id if provided
        if ($request->has('blog_id') && $request->blog_id) {
            $query->where('blog_id', $request->blog_id);
        }

        // Filter by status if provided
        if ($request->has('status') && $request->status) {
            if ($request->status === 'approved') {
                $query->where('is_approved', true);
            } elseif ($request->status === 'pending') {
                $query->where('is_approved', false);
            }
        }

        // Search in comment text, author name, or email
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('comment', 'like', "%{$search}%")
                  ->orWhere('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $comments = $query->orderBy('created_at', 'desc')->paginate(20);

        // Get stats based on the same filter (excluding search for stats)
        $baseQuery = Comment::query();
        if ($request->has('blog_id') && $request->blog_id) {
            $baseQuery->where('blog_id', $request->blog_id);
        }
        if ($request->has('status') && $request->status) {
            if ($request->status === 'approved') {
                $baseQuery->where('is_approved', true);
            } elseif ($request->status === 'pending') {
                $baseQuery->where('is_approved', false);
            }
        }

        $commentStats = [
            'total' => $baseQuery->count(),
            'pending' => (clone $baseQuery)->where('is_approved', false)->count(),
            'approved' => (clone $baseQuery)->where('is_approved', true)->count(),
            'replies' => (clone $baseQuery)->whereNotNull('parent_id')->count(),
        ];

        // Get the blog information if filtering by blog_id
        $blog = null;
        if ($request->has('blog_id') && $request->blog_id) {
            $blog = Blog::find($request->blog_id);
        }

        return view('admin.blog.engagement.comments', compact('comments', 'commentStats', 'blog'));
    }

    /**
     * Approve comment
     */
    public function approveComment(Request $request, $id): JsonResponse
    {
        try {
            $comment = Comment::findOrFail($id);
            $comment->update(['is_approved' => true]);

            // Update blog comments count
            $blog = $comment->blog;
            if ($blog) {
                $blog->update(['comments_count' => $blog->comments()->approved()->count()]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Comment approved successfully'
            ]);
        } catch (\Exception $e) {
            \Log::error('Error approving comment: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error approving comment: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Reject comment
     */
    public function rejectComment(Request $request, $id): JsonResponse
    {
        try {
            $comment = Comment::findOrFail($id);
            $comment->update(['is_approved' => false]);

            // Update blog comments count
            $blog = $comment->blog;
            if ($blog) {
                $blog->update(['comments_count' => $blog->comments()->approved()->count()]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Comment rejected successfully'
            ]);
        } catch (\Exception $e) {
            \Log::error('Error rejecting comment: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error rejecting comment: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Delete comment
     */
    public function deleteComment(Request $request, $id): JsonResponse
    {
        try {
            $comment = Comment::findOrFail($id);
            $blog = $comment->blog;

            $comment->delete();

            // Update blog comments count
            if ($blog) {
                $blog->update(['comments_count' => $blog->comments()->approved()->count()]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Comment deleted successfully'
            ]);
        } catch (\Exception $e) {
            \Log::error('Error deleting comment: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error deleting comment: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Bulk approve comments
     */
    public function bulkApproveComments(Request $request): JsonResponse
    {
        try {
            $commentIds = $request->input('comment_ids', []);

            if (empty($commentIds)) {
                return response()->json([
                    'success' => false,
                    'message' => 'No comments selected'
                ], 400);
            }

            // Get blog IDs before updating comments
            $blogIds = Comment::whereIn('id', $commentIds)->pluck('blog_id')->unique();

            Comment::whereIn('id', $commentIds)->update(['is_approved' => true]);

            // Update all affected blogs
            foreach ($blogIds as $blogId) {
                $blog = Blog::find($blogId);
                if ($blog) {
                    $blog->update(['comments_count' => $blog->comments()->approved()->count()]);
                }
            }

            return response()->json([
                'success' => true,
                'message' => count($commentIds) . ' comments approved successfully'
            ]);
        } catch (\Exception $e) {
            \Log::error('Error bulk approving comments: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error approving comments: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Bulk delete comments
     */
    public function bulkDeleteComments(Request $request): JsonResponse
    {
        try {
            $commentIds = $request->input('comment_ids', []);

            if (empty($commentIds)) {
                return response()->json([
                    'success' => false,
                    'message' => 'No comments selected'
                ], 400);
            }

            // Get blog IDs before deleting comments
            $blogIds = Comment::whereIn('id', $commentIds)->pluck('blog_id')->unique();

            Comment::whereIn('id', $commentIds)->delete();

            // Update all affected blogs
            foreach ($blogIds as $blogId) {
                $blog = Blog::find($blogId);
                if ($blog) {
                    $blog->update(['comments_count' => $blog->comments()->approved()->count()]);
                }
            }

            return response()->json([
                'success' => true,
                'message' => count($commentIds) . ' comments deleted successfully'
            ]);
        } catch (\Exception $e) {
            \Log::error('Error bulk deleting comments: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error deleting comments: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Reset blog likes
     */
    public function resetLikes(Request $request, $id): JsonResponse
    {
        $blog = Blog::findOrFail($id);
        $blog->update(['likes' => 0]);

        return response()->json([
            'success' => true,
            'message' => 'Blog likes reset successfully'
        ]);
    }

    /**
     * Reset blog views
     */
    public function resetViews(Request $request, $id): JsonResponse
    {
        $blog = Blog::findOrFail($id);
        $blog->update(['views' => 0]);

        return response()->json([
            'success' => true,
            'message' => 'Blog views reset successfully'
        ]);
    }

    /**
     * Get engagement data for charts
     */
    public function getEngagementData(): JsonResponse
    {
        $blogs = Blog::select('title', 'views', 'likes', 'comments_count', 'created_at')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return response()->json([
            'success' => true,
            'data' => $blogs
        ]);
    }

    /**
     * Show user profiles management
     */
    public function userProfiles(Request $request)
    {
        $query = UserProfile::query();

        // Filter by consultation interest if provided
        if ($request->has('consultation_interest') && $request->consultation_interest) {
            $query->where('consultation_interest', $request->consultation_interest);
        }

        // Search in name or email
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $userProfiles = $query->orderBy('last_comment_at', 'desc')->paginate(20);

        // Get user stats
        $userStats = [
            'total' => UserProfile::count(),
            'consultation_yes' => UserProfile::where('consultation_interest', 'yes')->count(),
            'active_commenters' => UserProfile::where('total_comments', '>', 0)->count(),
            'total_comments' => UserProfile::sum('total_comments'),
        ];

        return view('admin.blog.engagement.user-profiles', compact('userProfiles', 'userStats'));
    }
}
