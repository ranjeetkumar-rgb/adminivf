<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\BlogCategory;

class HomeController extends BaseController
{
    public function index()
    {
        // Get recent blogs for homepage
        $recentBlogs = Blog::where('index_follow', true)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        // Get blog categories
        $categories = BlogCategory::all();

        return $this->renderWithSeo(
            'index',
            'home',
            [],
            compact('recentBlogs', 'categories')
        );
    }
}
