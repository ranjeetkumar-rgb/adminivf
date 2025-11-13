<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BlogShareController extends Controller
{
    public function trackShare(Request $request, $blogId): JsonResponse
    {
        $blog = Blog::findOrFail($blogId);
        
        $platform = $request->input('platform', 'unknown'); // facebook, twitter, linkedin, whatsapp, email, etc.
        
        // Increment shares count
        $blog->incrementShares();
        
        return response()->json([
            'success' => true,
            'message' => 'Share tracked successfully',
            'shares_count' => $blog->fresh()->shares,
            'platform' => $platform
        ]);
    }
}
