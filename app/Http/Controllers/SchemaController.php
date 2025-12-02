<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schema;
use Illuminate\Support\Facades\Validator;

class SchemaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-seo-settings')->only('index');
        $this->middleware('permission:create-seo-settings')->only('create', 'store');
        $this->middleware('permission:edit-seo-settings')->only('edit', 'update');
        $this->middleware('permission:delete-seo-settings')->only('destroy');
    }

    /**
     * Display a listing of schemas
     */
    public function index()
    {
        $schemas = Schema::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.schema.index', compact('schemas'));
    }

    /**
     * Show the form for creating a new schema
     */
    public function create()
    {
        $schemaTypes = $this->getSchemaTypes();
        $contentTypes = $this->getContentTypes();
        $templates = $this->getSchemaTemplates();

        return view('admin.schema.create', compact('schemaTypes', 'contentTypes', 'templates'));
    }

    /**
     * Store a newly created schema
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'description' => 'nullable|string',
            'schema_data' => 'required|string',
            'is_active' => 'boolean|in:0,1',
            'content_type' => 'nullable|string|max:100',
            'content_id' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Validate JSON schema data
        try {
            $schemaData = json_decode($request->schema_data, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                return redirect()->back()->with('error', 'Invalid JSON format in schema data.')->withInput();
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error parsing schema JSON: ' . $e->getMessage())->withInput();
        }

        // Basic schema validation
        if (!isset($schemaData['@context']) || !isset($schemaData['@type'])) {
            return redirect()->back()->with('error', 'Schema must contain @context and @type fields.')->withInput();
        }

        $schema = new Schema([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'schema_data' => $schemaData,
            'is_active' => $request->boolean('is_active'),
            'content_type' => $request->content_type,
            'content_id' => $request->content_id,
        ]);

        $schema->save();

        return redirect()->route('admin.schema.index')->with('success', 'Schema created successfully.');
    }

    /**
     * Display the specified schema
     */
    public function show($id)
    {
        $schema = Schema::findOrFail($id);
        return view('admin.schema.show', compact('schema'));
    }

    /**
     * Show the form for editing the specified schema
     */
    public function edit($id)
    {
        $schema = Schema::findOrFail($id);
        $schemaTypes = $this->getSchemaTypes();
        $contentTypes = $this->getContentTypes();
        $templates = $this->getSchemaTemplates();

        return view('admin.schema.edit', compact('schema', 'schemaTypes', 'contentTypes', 'templates'));
    }

    /**
     * Update the specified schema
     */
    public function update(Request $request, $id)
    {
        $schema = Schema::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'description' => 'nullable|string',
            'schema_data' => 'required|string',
            'is_active' => 'boolean|in:0,1',
            'content_type' => 'nullable|string|max:100',
            'content_id' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Validate JSON schema data
        try {
            $schemaData = json_decode($request->schema_data, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                return redirect()->back()->with('error', 'Invalid JSON format in schema data.')->withInput();
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error parsing schema JSON: ' . $e->getMessage())->withInput();
        }

        // Basic schema validation
        if (!isset($schemaData['@context']) || !isset($schemaData['@type'])) {
            return redirect()->back()->with('error', 'Schema must contain @context and @type fields.')->withInput();
        }

        $schema->update([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'schema_data' => $schemaData,
            'is_active' => $request->boolean('is_active'),
            'content_type' => $request->content_type,
            'content_id' => $request->content_id,
        ]);

        return redirect()->route('admin.schema.index')->with('success', 'Schema updated successfully.');
    }

    /**
     * Remove the specified schema
     */
    public function destroy($id)
    {
        $schema = Schema::findOrFail($id);
        $schema->delete();

        return redirect()->route('admin.schema.index')->with('success', 'Schema deleted successfully.');
    }

    /**
     * Toggle schema active status
     */
    public function toggleStatus($id)
    {
        $schema = Schema::findOrFail($id);
        $schema->update(['is_active' => !$schema->is_active]);

        $status = $schema->is_active ? 'activated' : 'deactivated';
        return redirect()->route('admin.schema.index')->with('success', "Schema {$status} successfully.");
    }

    /**
     * Get schema templates
     */
    public function getTemplates()
    {
        $templates = $this->getSchemaTemplates();
        return response()->json($templates);
    }

    /**
     * Get schemas for landing page
     */
    public function getLandingPageSchemas()
    {
        $schemas = Schema::where('content_type', 'home')
                        ->orWhereNull('content_type')
                        ->where('is_active', true)
                        ->orderBy('created_at', 'desc')
                        ->get();

        return view('admin.schema.landing-page', compact('schemas'));
    }

    /**
     * Get schema types
     */
    private function getSchemaTypes()
    {
        return [
            'Article' => 'Article',
            'BlogPosting' => 'Blog Posting',
            'WebPage' => 'Web Page',
            'Organization' => 'Organization',
            'Person' => 'Person',
            'Product' => 'Product',
            'FAQPage' => 'FAQ Page',
            'LocalBusiness' => 'Local Business',
            'MedicalBusiness' => 'Medical Business',
            'Service' => 'Service',
            'Review' => 'Review',
            'Event' => 'Event',
            'Place' => 'Place',
            'CreativeWork' => 'Creative Work',
        ];
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
                $pageTitle = 'Landing Page (Home)';
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
     * Get content types
     */
    private function getContentTypes()
    {
        // Get pages dynamically from routes
        $pages = $this->getPagesFromRoutes();

        // Add common content types that might not be in routes
        $commonTypes = [
            'blog' => 'Blog Posts',
            'testimonial' => 'Testimonials',
            'faq' => 'FAQs',
            'product' => 'Products',
            'service' => 'Services',
            'page' => 'Pages',
        ];

        // Merge common types with route pages
        $contentTypes = array_merge($pages, $commonTypes);

        // Add global option at the beginning
        $contentTypes = ['global' => 'Global (All Pages)'] + $contentTypes;

        // Remove duplicates and sort (but keep global first)
        $global = ['global' => 'Global (All Pages)'];
        $rest = array_diff_key($contentTypes, $global);
        ksort($rest);
        $contentTypes = $global + $rest;

        return $contentTypes;
    }

    /**
     * Get schema templates
     */
    private function getSchemaTemplates()
    {
        return [
            'article' => [
                'name' => 'Article Template',
                'schema' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Article',
                    'headline' => 'Your Article Title',
                    'description' => 'Your article description',
                    'image' => 'https://example.com/image.jpg',
                    'author' => [
                        '@type' => 'Person',
                        'name' => 'Author Name'
                    ],
                    'publisher' => [
                        '@type' => 'Organization',
                        'name' => 'Your Organization',
                        'logo' => [
                            '@type' => 'ImageObject',
                            'url' => 'https://example.com/logo.png'
                        ]
                    ],
                    'datePublished' => '2024-01-01',
                    'dateModified' => '2024-01-01',
                    'mainEntityOfPage' => [
                        '@type' => 'WebPage',
                        '@id' => 'https://example.com/article'
                    ]
                ]
            ],
            'organization' => [
                'name' => 'Organization Template',
                'schema' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Organization',
                    'name' => 'Your Organization Name',
                    'url' => 'https://example.com',
                    'logo' => 'https://example.com/logo.png',
                    'description' => 'Your organization description',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => '123 Main St',
                        'addressLocality' => 'City',
                        'addressRegion' => 'State',
                        'postalCode' => '12345',
                        'addressCountry' => 'US'
                    ],
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'telephone' => '+1-123-456-7890',
                        'contactType' => 'customer service'
                    ]
                ]
            ],
            'faq' => [
                'name' => 'FAQ Template',
                'schema' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'What is your question?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'This is the answer to your question.'
                            ]
                        ]
                    ]
                ]
            ],
            'local_business' => [
                'name' => 'Local Business Template',
                'schema' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'LocalBusiness',
                    'name' => 'Your Business Name',
                    'description' => 'Your business description',
                    'url' => 'https://example.com',
                    'telephone' => '+1-123-456-7890',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => '123 Main St',
                        'addressLocality' => 'City',
                        'addressRegion' => 'State',
                        'postalCode' => '12345',
                        'addressCountry' => 'US'
                    ],
                    'geo' => [
                        '@type' => 'GeoCoordinates',
                        'latitude' => '40.7128',
                        'longitude' => '-74.0060'
                    ],
                    'openingHoursSpecification' => [
                        [
                            '@type' => 'OpeningHoursSpecification',
                            'dayOfWeek' => 'Monday',
                            'opens' => '09:00',
                            'closes' => '17:00'
                        ]
                    ]
                ]
            ],
            'medical_business' => [
                'name' => 'Medical Business Template',
                'schema' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'MedicalBusiness',
                    'name' => 'Your IVF Center Name',
                    'description' => 'Leading IVF and fertility treatment center',
                    'url' => 'https://example.com',
                    'telephone' => '+1-123-456-7890',
                    'medicalSpecialty' => 'Reproductive Medicine',
                    'availableService' => [
                        [
                            '@type' => 'MedicalProcedure',
                            'name' => 'IVF Treatment',
                            'description' => 'In vitro fertilization treatment'
                        ],
                        [
                            '@type' => 'MedicalProcedure',
                            'name' => 'Fertility Consultation',
                            'description' => 'Fertility assessment and consultation'
                        ]
                    ],
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => '123 Medical Center Dr',
                        'addressLocality' => 'City',
                        'addressRegion' => 'State',
                        'postalCode' => '12345',
                        'addressCountry' => 'US'
                    ],
                    'openingHoursSpecification' => [
                        [
                            '@type' => 'OpeningHoursSpecification',
                            'dayOfWeek' => 'Monday',
                            'opens' => '08:00',
                            'closes' => '18:00'
                        ]
                    ]
                ]
            ],
            'webpage' => [
                'name' => 'Web Page Template',
                'schema' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'WebPage',
                    'name' => 'Home Page',
                    'description' => 'Welcome to our IVF center - Best fertility treatment in the region',
                    'url' => 'https://example.com',
                    'mainEntity' => [
                        '@type' => 'Organization',
                        'name' => 'Your IVF Center',
                        'description' => 'Leading fertility treatment center'
                    ],
                    'breadcrumb' => [
                        '@type' => 'BreadcrumbList',
                        'itemListElement' => [
                            [
                                '@type' => 'ListItem',
                                'position' => 1,
                                'name' => 'Home',
                                'item' => 'https://example.com'
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }
}
