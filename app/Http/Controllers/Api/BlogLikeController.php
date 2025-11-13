<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogLike;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BlogLikeController extends Controller
{
    public function toggleLike(Request $request, $blogId): JsonResponse
    {
        try {
            $blog = Blog::findOrFail($blogId);
            $userIdentifier = BlogLike::getUserIdentifier();
            
            // Double-check if user has already liked this blog
            $existingLike = BlogLike::where('blog_id', $blogId)
                                  ->where('user_identifier', $userIdentifier)
                                  ->first();
            
            if ($existingLike) {
                // User has already liked, so unlike
                $existingLike->delete();
                
                // Decrement likes count (with safety check)
                if ($blog->likes > 0) {
                    $blog->decrementLikes();
                }
                
                \Log::info('Blog unliked', [
                    'blog_id' => $blogId,
                    'user_identifier' => $userIdentifier,
                    'new_likes_count' => $blog->fresh()->likes
                ]);
                
                return response()->json([
                    'success' => true,
                    'message' => 'Blog unliked successfully',
                    'likes_count' => $blog->fresh()->likes,
                    'action' => 'unlike',
                    'has_liked' => false
                ]);
            } else {
                // User hasn't liked yet, so like
                // Additional check to prevent race conditions
                $duplicateCheck = BlogLike::where('blog_id', $blogId)
                                        ->where('user_identifier', $userIdentifier)
                                        ->exists();
                
                if ($duplicateCheck) {
                    return response()->json([
                        'success' => false,
                        'message' => 'You have already liked this blog',
                        'likes_count' => $blog->likes,
                        'has_liked' => true
                    ]);
                }
                
                BlogLike::create([
                    'blog_id' => $blogId,
                    'user_identifier' => $userIdentifier,
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent()
                ]);
                
                // Increment likes count
                $blog->incrementLikes();
                
                \Log::info('Blog liked', [
                    'blog_id' => $blogId,
                    'user_identifier' => $userIdentifier,
                    'new_likes_count' => $blog->fresh()->likes
                ]);
                
                return response()->json([
                    'success' => true,
                    'message' => 'Blog liked successfully',
                    'likes_count' => $blog->fresh()->likes,
                    'action' => 'like',
                    'has_liked' => true
                ]);
            }
        } catch (\Exception $e) {
            \Log::error('Error toggling like', [
                'blog_id' => $blogId,
                'error' => $e->getMessage()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Error processing like: ' . $e->getMessage()
            ], 500);
        }
    }

    public function getLikes($blogId): JsonResponse
    {
        try {
            $blog = Blog::findOrFail($blogId);
            $userIdentifier = BlogLike::getUserIdentifier();
            $hasLiked = BlogLike::hasUserLiked($blogId, $userIdentifier);
            
            \Log::info('Blog likes API', [
                'blog_id' => $blogId,
                'likes_count' => $blog->likes,
                'has_liked' => $hasLiked,
                'user_identifier' => $userIdentifier
            ]);
            
            return response()->json([
                'success' => true,
                'likes_count' => $blog->likes,
                'has_liked' => $hasLiked
            ]);
        } catch (\Exception $e) {
            \Log::error('Error getting likes', [
                'blog_id' => $blogId,
                'error' => $e->getMessage()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Error loading likes: ' . $e->getMessage(),
                'likes_count' => 0,
                'has_liked' => false
            ], 500);
        }
    }
}