<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogLike;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BlogController extends BaseController
{
    public function index(Request $request)
    {
        // Get filter parameters
        $categoryFilter = $request->get('category');
        $contentType = $request->get('type', 'all'); // all, articles, videos
        $sortBy = $request->get('sort', 'recent'); // recent, popular, featured

        // Build query for main blogs
        $query = Blog::published()->with('category');

        // Apply category filter
        if ($categoryFilter && $categoryFilter !== 'all') {
            $query->where('category_id', $categoryFilter);
        }

        // Apply content type filter
        if ($contentType === 'articles') {
            $query->whereNull('video_url');
        } elseif ($contentType === 'videos') {
            $query->whereNotNull('video_url');
        }

        // Apply sorting
        switch ($sortBy) {
            case 'popular':
                $query->popular();
                break;
            case 'featured':
                $query->featured();
                break;
            default:
                $query->recent();
                break;
        }

        // Get featured blogs for the featured section first
        $featuredBlogs = Blog::published()->featured()->with('category')->take(2)->get();
        
        // Get featured blog IDs to exclude from other sections
        $featuredBlogIds = $featuredBlogs->pluck('id')->toArray();

        // For the main blog list, we need to be more flexible with pagination
        // If there are fewer than 6 blogs after excluding featured, we'll show some featured blogs
        $queryWithoutFeatured = clone $query;
        if (!empty($featuredBlogIds)) {
            $queryWithoutFeatured->whereNotIn('id', $featuredBlogIds);
        }
        
        $nonFeaturedCount = $queryWithoutFeatured->count();
        
        // If we have enough non-featured blogs for pagination, exclude featured blogs
        if ($nonFeaturedCount >= 6) {
            $query->whereNotIn('id', $featuredBlogIds);
        }
        
        $blogs = $query->paginate(6);

        // Get popular posts for sidebar (excluding featured blogs)
        $popularPosts = Blog::published()
            ->popular()
            ->whereNotIn('id', $featuredBlogIds)
            ->take(5)
            ->get();

        // Get categories with blog counts
        $categories = BlogCategory::active()->ordered()->withCount(['blogs' => function($query) {
            $query->published();
        }])->get();

        // Get recent posts for sidebar (excluding featured blogs)
        $recentPosts = Blog::published()
            ->recent()
            ->whereNotIn('id', $featuredBlogIds)
            ->take(5)
            ->get();

        return $this->renderWithSeo(
            'frontend.blog.index',
            'blogs',
            [],
            compact('blogs', 'categories', 'featuredBlogs', 'popularPosts', 'recentPosts', 'categoryFilter', 'contentType', 'sortBy')
        );
    }

    public function show($slug)
    {
        $blog = Blog::published()
            ->where('slug', $slug)
            ->with(['category', 'approvedComments.replies' => function($query) {
                $query->approved();
            }])
            ->firstOrFail();

        // Increment views
        $blog->incrementViews();

        // Get related blogs
        $relatedBlogs = Blog::published()
            ->related($blog->category_id, $blog->id)
            ->with('category')
            ->get();

        // Get popular posts for sidebar
        $popularPosts = Blog::published()->popular()->take(5)->get();

        // Get categories with blog counts
        $categories = BlogCategory::active()->ordered()->withCount(['blogs' => function($query) {
            $query->published();
        }])->get();

        // Get recent posts for sidebar
        $recentPosts = Blog::published()->recent()->take(5)->get();

        // Get similar blogs (same category, different blog)
        $similarBlogs = Blog::published()
            ->where('category_id', $blog->category_id)
            ->where('id', '!=', $blog->id)
            ->with('category')
            ->take(3)
            ->get();
        return $this->renderWithSeo(
            'frontend.blog.details',
            'blog',
            ['blog' => $blog],
            compact('blog', 'relatedBlogs', 'popularPosts', 'categories', 'recentPosts', 'similarBlogs')
        );
    }

    public function category($slug)
    {
        $category = BlogCategory::active()->where('slug', $slug)->firstOrFail();

        $blogs = Blog::published()
            ->where('category_id', $category->id)
            ->with('category')
            ->recent()
            ->paginate(6);

        // Get featured blogs for the featured section first
        $featuredBlogs = Blog::published()->featured()->with('category')->take(2)->get();
        
        // Get featured blog IDs to exclude from other sections
        $featuredBlogIds = $featuredBlogs->pluck('id')->toArray();

        // Get categories with blog counts
        $categories = BlogCategory::active()->ordered()->withCount(['blogs' => function($query) {
            $query->published();
        }])->get();

        // Get popular posts for sidebar (excluding featured blogs)
        $popularPosts = Blog::published()
            ->popular()
            ->whereNotIn('id', $featuredBlogIds)
            ->take(5)
            ->get();

        // Get recent posts for sidebar (excluding featured blogs)
        $recentPosts = Blog::published()
            ->recent()
            ->whereNotIn('id', $featuredBlogIds)
            ->take(5)
            ->get();

        return $this->renderWithSeo(
            'frontend.blog.category',
            'blog-category',
            ['category' => $category],
            compact('blogs', 'categories', 'category', 'featuredBlogs', 'popularPosts', 'recentPosts')
        );
    }

    // AJAX method for filtering
    public function filter(Request $request)
    {
        $categoryFilter = $request->get('category');
        $contentType = $request->get('type', 'all');
        $sortBy = $request->get('sort', 'recent');
        $page = $request->get('page', 1);

        \Log::info('Filter request:', [
            'category' => $categoryFilter,
            'type' => $contentType,
            'sort' => $sortBy,
            'page' => $page,
            'all_request_data' => $request->all()
        ]);

        // Get featured blog IDs to exclude from results
        $featuredBlogIds = Blog::published()->featured()->pluck('id')->toArray();

        // Build query
        $query = Blog::published()->with('category');

        if ($categoryFilter && $categoryFilter !== 'all') {
            $query->where('category_id', $categoryFilter);
        }

        if ($contentType === 'articles') {
            $query->whereNull('video_url');
        } elseif ($contentType === 'videos') {
            $query->whereNotNull('video_url');
        }

        switch ($sortBy) {
            case 'popular':
                $query->popular();
                break;
            case 'featured':
                // If sorting by featured, show featured blogs instead of excluding them
                $query = Blog::published()->with('category')->featured();
                break;
            default:
                $query->recent();
                break;
        }

        // Apply flexible duplicate prevention logic
        if ($sortBy !== 'featured') {
            $queryWithoutFeatured = clone $query;
            if (!empty($featuredBlogIds)) {
                $queryWithoutFeatured->whereNotIn('id', $featuredBlogIds);
            }
            
            $nonFeaturedCount = $queryWithoutFeatured->count();
            
            // If we have enough non-featured blogs for pagination, exclude featured blogs
            if ($nonFeaturedCount >= 6) {
                $query->whereNotIn('id', $featuredBlogIds);
            }
        }

        $blogs = $query->paginate(6, ['*'], 'page', $page);

        \Log::info('Filter results:', [
            'total_blogs' => $blogs->total(),
            'current_page' => $blogs->currentPage(),
            'per_page' => $blogs->perPage(),
            'has_more_pages' => $blogs->hasMorePages()
        ]);

        return response()->json([
            'html' => view('frontend.blog.partials.blog-grid', compact('blogs'))->render(),
            'hasMore' => $blogs->hasMorePages()
        ]);
    }

    // AJAX method for load more
    public function loadMore(Request $request)
    {
        $categoryFilter = $request->get('category');
        $contentType = $request->get('type', 'all');
        $sortBy = $request->get('sort', 'recent');
        $page = $request->get('page', 2);

        // Get featured blog IDs to exclude from results
        $featuredBlogIds = Blog::published()->featured()->pluck('id')->toArray();

        // Build query
        $query = Blog::published()->with('category');

        if ($categoryFilter && $categoryFilter !== 'all') {
            $query->where('category_id', $categoryFilter);
        }

        if ($contentType === 'articles') {
            $query->whereNull('video_url');
        } elseif ($contentType === 'videos') {
            $query->whereNotNull('video_url');
        }

        switch ($sortBy) {
            case 'popular':
                $query->popular();
                break;
            case 'featured':
                // If sorting by featured, show featured blogs instead of excluding them
                $query = Blog::published()->with('category')->featured();
                break;
            default:
                $query->recent();
                break;
        }

        // Apply flexible duplicate prevention logic
        if ($sortBy !== 'featured') {
            $queryWithoutFeatured = clone $query;
            if (!empty($featuredBlogIds)) {
                $queryWithoutFeatured->whereNotIn('id', $featuredBlogIds);
            }
            
            $nonFeaturedCount = $queryWithoutFeatured->count();
            
            // If we have enough non-featured blogs for pagination, exclude featured blogs
            if ($nonFeaturedCount >= 6) {
                $query->whereNotIn('id', $featuredBlogIds);
            }
        }

        $blogs = $query->paginate(6, ['*'], 'page', $page);

        return response()->json([
            'html' => view('frontend.blog.partials.blog-cards', compact('blogs'))->render(),
            'hasMore' => $blogs->hasMorePages(),
            'nextPage' => $page + 1
        ]);
    }

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
