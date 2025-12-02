<?php

namespace App\Http\Controllers;

use App\Models\PageSeo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class PageSeoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-page-seo|create-page-seo|edit-page-seo|delete-page-seo', ['only' => ['index','show']]);
        $this->middleware('permission:create-page-seo', ['only' => ['create','store']]);
        $this->middleware('permission:edit-page-seo', ['only' => ['edit','update', 'toggleStatus']]);
        $this->middleware('permission:delete-page-seo', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of page SEO settings
     */
    public function index()
    {
        $pageSeo = PageSeo::orderBy('page_name')->get();
        return view('admin.page-seo.index', compact('pageSeo'));
    }

    /**
     * Get pages from routes dynamically
     */
    private function getPagesFromRoutes()
    {
        $pages = [];

        // Get all routes
        $routes = \Illuminate\Support\Facades\Route::getRoutes();

        foreach ($routes as $route) {
            $uri = $route->uri();
            $name = $route->getName();
            $action = $route->getAction();

            // Skip admin routes, API routes, and routes with parameters
            if (strpos($uri, 'admin') !== false ||
                strpos($uri, 'api') !== false ||
                strpos($uri, '{') !== false ||
                strpos($uri, 'debug') !== false ||
                strpos($uri, 'test') !== false ||
                strpos($uri, 'submit-consultation') !== false) {
                continue;
            }

            // Skip routes without names (except home)
            if (!$name && $uri !== '/') {
                continue;
            }

            // Skip if route name contains admin or api
            if ($name && (str_contains($name, 'admin') || str_contains($name, 'api'))) {
                continue;
            }

            // Get page name from route name or URI
            $pageName = null;
            $pageTitle = null;

            // Handle home route
            if ($uri === '/' || $name === 'home') {
                $pageName = 'home';
                $pageTitle = 'Home Page';
            }
            // If route has a name, use it
            elseif ($name) {
                $pageName = $name;
                // Convert route name to readable title
                $pageTitle = ucwords(str_replace(['-', '_'], ' ', $pageName)) . ' Page';
            }
            // Use URI as page name if no name
            elseif ($uri && $uri !== '/') {
                $pageName = trim($uri, '/');
                $pageTitle = ucwords(str_replace(['-', '_'], ' ', $pageName)) . ' Page';
            }

            // Skip if no valid page name
            if (!$pageName || empty($pageName)) {
                continue;
            }

            // Skip blog detail routes (they use slugs, not page names)
            if (in_array($pageName, ['blog.show', 'blog.category'])) {
                continue;
            }

            // Add to pages array if not already exists
            if ($pageName && !isset($pages[$pageName])) {
                $pages[$pageName] = $pageTitle;
            }
        }

        // Add blog index page if it exists
        if (!isset($pages['blog.index'])) {
            $pages['blog'] = 'Blog Page';
        } else {
            // Rename blog.index to blog
            if (isset($pages['blog.index'])) {
                $pages['blog'] = $pages['blog.index'];
                unset($pages['blog.index']);
            }
        }

        // Sort pages alphabetically
        ksort($pages);

        return $pages;
    }

    /**
     * Show the form for creating a new page SEO setting
     */
    public function create()
    {
        // Get pages dynamically from routes
        $pages = $this->getPagesFromRoutes();

        // Also include common pages that might not be in routes
        $commonPages = [
            'blog-category' => 'Blog Category Page',
            'privacy-policy' => 'Privacy Policy Page',
            'terms-conditions' => 'Terms & Conditions Page',
            'sitemap' => 'Sitemap Page',
            'search' => 'Search Results Page',
        ];

        // Merge common pages with route pages
        $pages = array_merge($pages, $commonPages);

        // Remove duplicates and sort
        $pages = array_unique($pages);
        ksort($pages);

        $existingPages = PageSeo::pluck('page_name')->toArray();
        $availablePages = array_diff_key($pages, array_flip($existingPages));

        return view('admin.page-seo.create', compact('availablePages', 'pages'));
    }

    /**
     * Store a newly created page SEO setting
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_name' => 'required|string|max:100|unique:page_seo,page_name',
            'page_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
            'focus_keyword' => 'nullable|string|max:100',
            'canonical_url' => 'nullable|url',
            'index_follow' => 'boolean',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'og_type' => 'nullable|string|max:50',
            'twitter_title' => 'nullable|string|max:255',
            'twitter_description' => 'nullable|string',
            'twitter_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'twitter_card' => 'nullable|string|max:50',
            'twitter_site' => 'nullable|string|max:100',
            'twitter_creator' => 'nullable|string|max:100',
            'author' => 'nullable|string|max:100',
            'robots' => 'nullable|string|max:100',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        // Handle image uploads
        if ($request->hasFile('og_image')) {
            $data['og_image'] = $this->uploadImage($request->file('og_image'), 'page-seo/og');
        }

        if ($request->hasFile('twitter_image')) {
            $data['twitter_image'] = $this->uploadImage($request->file('twitter_image'), 'page-seo/twitter');
        }

        PageSeo::create($data);

        // Clear cache
        Cache::forget('page_seo_' . $request->page_name);

        return redirect()->route('admin.page-seo.index')
                        ->with('success', 'Page SEO settings created successfully.');
    }

    /**
     * Show the form for editing the specified page SEO setting
     */
    public function edit(PageSeo $pageSeo)
    {
        // Get pages dynamically from routes
        $pages = $this->getPagesFromRoutes();

        // Also include common pages that might not be in routes
        $commonPages = [
            'blog-category' => 'Blog Category Page',
            'privacy-policy' => 'Privacy Policy Page',
            'terms-conditions' => 'Terms & Conditions Page',
            'sitemap' => 'Sitemap Page',
            'search' => 'Search Results Page',
        ];

        // Merge common pages with route pages
        $pages = array_merge($pages, $commonPages);

        // Remove duplicates and sort
        $pages = array_unique($pages);
        ksort($pages);

        return view('admin.page-seo.edit', compact('pageSeo', 'pages'));
    }

    /**
     * Update the specified page SEO setting
     */
    public function update(Request $request, PageSeo $pageSeo)
    {
        $request->validate([
            'page_name' => 'required|string|max:100|unique:page_seo,page_name,' . $pageSeo->id,
            'page_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
            'focus_keyword' => 'nullable|string|max:100',
            'canonical_url' => 'nullable|url',
            'index_follow' => 'boolean',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'og_type' => 'nullable|string|max:50',
            'twitter_title' => 'nullable|string|max:255',
            'twitter_description' => 'nullable|string',
            'twitter_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'twitter_card' => 'nullable|string|max:50',
            'twitter_site' => 'nullable|string|max:100',
            'twitter_creator' => 'nullable|string|max:100',
            'author' => 'nullable|string|max:100',
            'robots' => 'nullable|string|max:100',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        // Handle image uploads
        if ($request->hasFile('og_image')) {
            // Delete old image
            if ($pageSeo->og_image) {
                Storage::disk('public')->delete($pageSeo->og_image);
            }
            $data['og_image'] = $this->uploadImage($request->file('og_image'), 'page-seo/og');
        }

        if ($request->hasFile('twitter_image')) {
            // Delete old image
            if ($pageSeo->twitter_image) {
                Storage::disk('public')->delete($pageSeo->twitter_image);
            }
            $data['twitter_image'] = $this->uploadImage($request->file('twitter_image'), 'page-seo/twitter');
        }

        $pageSeo->update($data);

        // Clear cache
        Cache::forget('page_seo_' . $pageSeo->page_name);

        return redirect()->route('admin.page-seo.index')
                        ->with('success', 'Page SEO settings updated successfully.');
    }

    /**
     * Remove the specified page SEO setting
     */
    public function destroy(PageSeo $pageSeo)
    {
        // Delete images
        if ($pageSeo->og_image) {
            Storage::disk('public')->delete($pageSeo->og_image);
        }
        if ($pageSeo->twitter_image) {
            Storage::disk('public')->delete($pageSeo->twitter_image);
        }

        $pageSeo->delete();

        // Clear cache
        Cache::forget('page_seo_' . $pageSeo->page_name);

        return redirect()->route('admin.page-seo.index')
                        ->with('success', 'Page SEO settings deleted successfully.');
    }

    /**
     * Toggle active status
     */
    public function toggleStatus(PageSeo $pageSeo)
    {
        $pageSeo->update(['is_active' => !$pageSeo->is_active]);

        // Clear cache
        Cache::forget('page_seo_' . $pageSeo->page_name);

        return redirect()->route('admin.page-seo.index')
                        ->with('success', 'Page SEO status updated successfully.');
    }

    /**
     * Upload image helper method
     */
    private function uploadImage($file, $path)
    {
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs($path, $filename, 'public');
        return $path . '/' . $filename;
    }

    /**
     * Preview SEO data for a page
     */
    public function preview($pageName)
    {
        $pageSeo = PageSeo::where('page_name', $pageName)->first();

        if (!$pageSeo) {
            return response()->json(['error' => 'Page SEO not found'], 404);
        }

        return response()->json([
            'seo_data' => $pageSeo->toSeoArray(),
            'structured_data' => $pageSeo->getStructuredData()
        ]);
    }

    /**
     * Get page name suggestions
     */
    public function getPageSuggestions()
    {
        $suggestions = [
            'main_pages' => [
                'home' => 'Home Page',
                'about' => 'About Page',
                'contact' => 'Contact Page',
                'services' => 'Services Page',
                'treatments' => 'Treatments Page'
            ],
            'specialized_pages' => [
                'ivf-treatment' => 'IVF Treatment Page',
                'fertility-services' => 'Fertility Services Page',
                'infertility-treatment' => 'Infertility Treatment Page',
                'surrogacy' => 'Surrogacy Page',
                'egg-donation' => 'Egg Donation Page',
                'sperm-donation' => 'Sperm Donation Page',
                'embryo-transfer' => 'Embryo Transfer Page',
                'pregnancy-care' => 'Pregnancy Care Page',
                'gynecology' => 'Gynecology Page',
                'urology' => 'Urology Page',
                'genetic-testing' => 'Genetic Testing Page',
                'counselling' => 'Counselling Page'
            ],
            'content_pages' => [
                'doctors' => 'Doctors Page',
                'testimonials' => 'Testimonials Page',
                'success-stories' => 'Success Stories Page',
                'patient-reviews' => 'Patient Reviews Page',
                'faq' => 'FAQ Page',
                'blog' => 'Blog Page',
                'news' => 'News Page',
                'events' => 'Events Page',
                'research' => 'Research Page',
                'publications' => 'Publications Page'
            ],
            'utility_pages' => [
                'pricing' => 'Pricing Page',
                'cost-calculator' => 'Cost Calculator Page',
                'appointment' => 'Appointment Page',
                'emergency-contact' => 'Emergency Contact Page',
                'location' => 'Location Page',
                'careers' => 'Careers Page',
                'privacy-policy' => 'Privacy Policy Page',
                'terms-conditions' => 'Terms & Conditions Page',
                'sitemap' => 'Sitemap Page',
                'search' => 'Search Results Page'
            ]
        ];

        return response()->json($suggestions);
    }

    /**
     * Validate page name format
     */
    public function validatePageName(Request $request)
    {
        $pageName = $request->input('page_name');

        if (!$pageName) {
            return response()->json(['valid' => false, 'message' => 'Page name is required']);
        }

        // Check format
        if (!preg_match('/^[a-z0-9-]+$/', $pageName)) {
            return response()->json([
                'valid' => false,
                'message' => 'Page name can only contain lowercase letters, numbers, and hyphens'
            ]);
        }

        // Check length
        if (strlen($pageName) < 3) {
            return response()->json([
                'valid' => false,
                'message' => 'Page name should be at least 3 characters long'
            ]);
        }

        if (strlen($pageName) > 50) {
            return response()->json([
                'valid' => false,
                'message' => 'Page name should be less than 50 characters'
            ]);
        }

        // Check if already exists
        $exists = PageSeo::where('page_name', $pageName)->exists();
        if ($exists) {
            return response()->json([
                'valid' => false,
                'message' => 'Page name already exists'
            ]);
        }

        return response()->json(['valid' => true, 'message' => 'Valid page name']);
    }
}
