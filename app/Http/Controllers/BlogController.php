<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-blogs')->only('index');
        $this->middleware('permission:create-blogs')->only('create', 'store');
        $this->middleware('permission:edit-blogs')->only('edit', 'update');
        $this->middleware('permission:delete-blogs')->only('destroy');
    }

    public function index()
    {
        $blogs = Blog::withCount(['comments as total_comments', 'comments as approved_comments' => function($query) {
                $query->where('is_approved', true);
            }])
            ->orderBy('created_at', 'desc')
            ->get();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blogs,slug',
            'excerpt' => 'nullable|string|max:500',
            'description' => 'required|string',
            'description1' => 'nullable|string',
            'description2' => 'nullable|string',
            'description3' => 'nullable|string',
            'description4' => 'nullable|string',
            'description5' => 'nullable|string',
            'key_tests_heading' => 'nullable|string',
            'key_tests_content' => 'nullable|string',
            'key_tests_section_1' => 'nullable|string',
            'key_tests_section_2' => 'nullable|string',
            'key_tests_section_3' => 'nullable|string',
            'key_tests_section_4' => 'nullable|string',
            'male_factor_and_key_male_fertility'=> 'nullable|string',
            'icsi' => 'nullable|string',
            'lifestyle' => 'nullable|string',
            'nutrition' => 'nullable|string',
            'exercise' => 'nullable|string',
            'avoid' => 'nullable|string',
            'clinic' => 'nullable|string',
            'laboratory_standards' => 'nullable|string',
            'experienced_team' => 'nullable|string',
            'transparent_success_rates' => 'nullable|string',
            'dr_review' => 'nullable|string',
            'previous_attempts'=> 'nullable|string',
            'success_after_attempts'=> 'nullable|string',
            'emotional_support' => 'nullable|string',
            'partner_support' => 'nullable|string',
            'support_groups' => 'nullable|string',
            'professinal_counselling'=> 'nullable|string',

            'personalized_treatment' => 'nullable|string',
            'india_advantage' => 'nullable|string',
            'conclusion' => 'nullable|string',
            'your_journey' => 'nullable|string',
            'user_write_and_tag_create' => 'nullable|string',
            'tags' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:10240',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keywords' => 'nullable|string|max:255',
            'schema' => 'nullable|string',
            // 'faq_question' => 'required|string|max:255',
            // 'faq_answer' => 'required|string',
            // 'categories' => 'required|exists:blog_categories,id',
            // Blog Status Fields
            'published' => 'boolean',
            'featured' => 'boolean',
            'published_at' => 'nullable|date',
            // Video Fields
            'video_url' => 'nullable|url|max:500',
            'video_duration' => 'nullable|integer|min:1',
            // Author Fields
            'author_title' => 'nullable|string|max:255',
            'author_bio' => 'nullable|string|max:1000',
            'author_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:5120',
            // SEO Fields
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image' => 'nullable|string|max:255',
            'canonical_url' => 'nullable|url|max:255',
            'focus_keyword' => 'nullable|string|max:255',
            'author_name' => 'nullable|string|max:255',
            'index_follow' => 'boolean',
        ]);
        $data = $request->except(['image', 'author_image','categories']);

        if($request->filled('categories')){
            $data['categories'] = json_encode($request->categories);
        }
        if ($request->filled('schema')) {
            try {
                $schemaData = json_decode($request->schema, true);
                if (json_last_error() !== JSON_ERROR_NONE) {
                    return redirect()->back()->with('error', 'Invalid JSON format in schema field.')->withInput();
                }
                $data['schema'] = json_encode($schemaData);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error parsing schema JSON: ' . $e->getMessage())->withInput();
            }
        }
        if (empty($data['slug'])) {
            $data['slug'] = \Str::slug($data['heading'] ?? $data['title']);
            $counter = 1;
            $originalSlug = $data['slug'];
            while (\DB::table('blogs')->where('slug', $data['slug'])->exists()) {
                $data['slug'] = $originalSlug . '-' . $counter;
                $counter++;
            }
        }

        $blog = new Blog($data);
        if ($request->hasFile('image')) {
            try {
                $imagePath = $blog->uploadImageWithPreset($request->file('image'), 'image', 'medium');
                $blog->image = $imagePath;
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error uploading image: ' . $e->getMessage())->withInput();
            }
        }
        if ($request->hasFile('author_image')) {
            try {
                $authorImagePath = $blog->uploadImageWithPreset($request->file('author_image'), 'author_image', 'small');
                $blog->author_image = $authorImagePath;
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error uploading author image: ' . $e->getMessage())->withInput();
            }
        }

        $blog->save();
        $message = 'Blog created successfully.';
        if ($request->hasFile('image')) {
            $message .= ' Image was automatically compressed and optimized for web.';
        }

        return redirect()->route('admin.blog.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);

        // Get dynamic schemas for this specific blog
        $schemaService = app(\App\Services\SchemaService::class);
        $dynamicSchemas = $schemaService->getSchemasForContent('blog', $blog->id);

        return view('admin.blog.view', compact('blog', 'dynamicSchemas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::all();
        return view('admin.blog.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'heading' => 'required|string|max:255',
    //         'slug' => 'nullable|string|max:255|unique:blogs,slug,' . $id,
    //         'excerpt' => 'nullable|string|max:500',
    //         'description' => 'required|string',
    //         'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:10240', // Keep nullable for updates
    //         'meta_title' => 'required|string|max:255', // Made meta title required
    //         'meta_description' => 'required|string', // Made meta description required
    //         'meta_keywords' => 'nullable|string|max:255',
    //         'schema' => 'nullable|string',
    //         // 'faq_question' => 'required|string|max:255',
    //         // 'faq_answer' => 'required|string',
    //         'category_id' => 'required|exists:blog_categories,id',
    //         // Blog Status Fields
    //         'published' => 'boolean',
    //         'featured' => 'boolean',
    //         'published_at' => 'nullable|date',
    //         // Video Fields
    //         'video_url' => 'nullable|url|max:500',
    //         'video_duration' => 'nullable|integer|min:1',
    //         // Author Fields
    //         'author_title' => 'nullable|string|max:255',
    //         'author_bio' => 'nullable|string|max:1000',
    //         'author_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:5120',
    //         // SEO Fields
    //         'og_title' => 'nullable|string|max:255',
    //         'og_description' => 'nullable|string',
    //         'og_image' => 'nullable|string|max:255',
    //         'canonical_url' => 'nullable|url|max:255',
    //         'focus_keyword' => 'nullable|string|max:255',
    //         'author_name' => 'nullable|string|max:255',
    //         'index_follow' => 'boolean',
    //     ]);

    //     $blog = Blog::findOrFail($id);
    //     $data = $request->except(['image', 'author_image']);

    //     // Auto-generate slug if not provided
    //     if (empty($data['slug'])) {
    //         $data['slug'] = \Str::slug($data['heading'] ?? $data['title']);
    //         // Ensure slug is unique (excluding current blog)
    //         $counter = 1;
    //         $originalSlug = $data['slug'];
    //         while (\DB::table('blogs')->where('slug', $data['slug'])->where('id', '!=', $id)->exists()) {
    //             $data['slug'] = $originalSlug . '-' . $counter;
    //             $counter++;
    //         }
    //     }
    //     // Handle schema JSON validation and parsing
    //     if ($request->filled('schema')) {
    //         try {
    //             $schemaData = json_decode($request->schema, true);
    //             if (json_last_error() !== JSON_ERROR_NONE) {
    //                 return redirect()->back()->with('error', 'Invalid JSON format in schema field.')->withInput();
    //             }
    //             $data['schema'] = json_encode($schemaData); // Store as JSON string
    //         } catch (\Exception $e) {
    //             return redirect()->back()->with('error', 'Error parsing schema JSON: ' . $e->getMessage())->withInput();
    //         }
    //     }

    //     if ($request->hasFile('image')) {
    //         try {
    //             // Use the new compression preset system
    //             $imagePath = $blog->uploadImageWithPreset($request->file('image'), 'image', 'medium');
    //             $data['image'] = $imagePath;
    //         } catch (\Exception $e) {
    //             return redirect()->back()->with('error', 'Error uploading image: ' . $e->getMessage())->withInput();
    //         }
    //     }
    //     if ($request->hasFile('author_image')) {
    //         try {
    //             $authorImagePath = $blog->uploadImageWithPreset($request->file('author_image'), 'author_image', 'small');
    //             $data['author_image'] = $authorImagePath;
    //         } catch (\Exception $e) {
    //             return redirect()->back()->with('error', 'Error uploading author image: ' . $e->getMessage())->withInput();
    //         }
    //     }

    //     $blog->update($data);

    //     $message = 'Blog updated successfully.';
    //     if ($request->hasFile('image')) {
    //         $message .= ' Image was automatically compressed and optimized for web.';
    //     }

    //     return redirect()->route('admin.blog.index')->with('success', $message);
    // }
    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blogs,slug,' . $id,
            'excerpt' => 'nullable|string|max:500',
            'description' => 'required|string',
            'description1' => 'nullable|string',
            'description2' => 'nullable|string',
            'description3' => 'nullable|string',
            'description4' => 'nullable|string',
            'description5' => 'nullable|string',
            'key_tests_heading' => 'nullable|string',
            'key_tests_content' => 'nullable|string',
            'key_tests_section_1' => 'nullable|string',
            'key_tests_section_2' => 'nullable|string',
            'key_tests_section_3' => 'nullable|string',
            'key_tests_section_4' => 'nullable|string',
            'male_factor_and_key_male_fertility'=> 'nullable|string',
            'icsi' => 'nullable|string',
            'lifestyle' => 'nullable|string',
            'nutrition' => 'nullable|string',
            'exercise' => 'nullable|string',
            'avoid' => 'nullable|string',
            'clinic' => 'nullable|string',
            'laboratory_standards' => 'nullable|string',
            'experienced_team' => 'nullable|string',
            'transparent_success_rates' => 'nullable|string',
            'dr_review' => 'nullable|string',
            'previous_attempts'=> 'nullable|string',
            'success_after_attempts'=> 'nullable|string',
            'emotional_support' => 'nullable|string',
            'partner_support' => 'nullable|string',
            'support_groups' => 'nullable|string',
            'professinal_counselling'=> 'nullable|string',
            'personalized_treatment' => 'nullable|string',
            'india_advantage' => 'nullable|string',
            'conclusion' => 'nullable|string',
            'your_journey' => 'nullable|string',
            'user_write_and_tag_create' => 'nullable|string',
            'tags' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:10240',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keywords' => 'nullable|string|max:255',
            'schema' => 'nullable|string',
            'published' => 'boolean',
            'featured' => 'boolean',
            'published_at' => 'nullable|date',
            'video_url' => 'nullable|url|max:500',
            'video_duration' => 'nullable|integer|min:1',
            'author_title' => 'nullable|string|max:255',
            'author_bio' => 'nullable|string|max:1000',
            'author_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:5120',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image' => 'nullable|string|max:255',
            'canonical_url' => 'nullable|url|max:255',
            'focus_keyword' => 'nullable|string|max:255',
            'author_name' => 'nullable|string|max:255',
            'index_follow' => 'boolean',
        ]);
        $data = $request->except(['image', 'author_image','categories']);
        if ($request->has('categories')) {
            $data['categories'] = json_encode($request->categories);
        } else {
            $data['categories'] = json_encode([]);
        }
        if ($request->filled('schema')) {
            try {
                $schemaData = json_decode($request->schema, true);
                if (json_last_error() !== JSON_ERROR_NONE) {
                    return redirect()->back()->with('error', 'Invalid JSON format in schema field.')->withInput();
                }
                $data['schema'] = json_encode($schemaData);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error parsing schema JSON: ' . $e->getMessage())->withInput();
            }
        } else {
            $data['schema'] = null;
        }
        if (empty($data['slug'])) {
            $data['slug'] = \Str::slug($data['heading'] ?? $data['title']);
            $counter = 1;
            $originalSlug = $data['slug'];
            while (\DB::table('blogs')->where('slug', $data['slug'])->where('id', '!=', $id)->exists()) {
                $data['slug'] = $originalSlug . '-' . $counter;
                $counter++;
            }
        }
        if ($request->hasFile('image')) {
            try {
                $imagePath = $blog->uploadImageWithPreset($request->file('image'), 'image', 'medium');
                $data['image'] = $imagePath;
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error uploading image: ' . $e->getMessage())->withInput();
            }
        }
        if ($request->hasFile('author_image')) {
            try {
                // Optional: Add logic here to delete the old author image
                // $blog->deleteImage('author_image');
                $authorImagePath = $blog->uploadImageWithPreset($request->file('author_image'), 'author_image', 'small');
                $data['author_image'] = $authorImagePath; // Add new image path to data
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error uploading author image: ' . $e->getMessage())->withInput();
            }
        }
        // Update the blog with the new data
        $blog->update($data);
        $message = 'Blog updated successfully.';
        if ($request->hasFile('image') || $request->hasFile('author_image')) {
            $message .= ' Image(s) were successfully updated.';
        }
        return redirect()->route('admin.blog.index')->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);

        // Delete image if exists
        if ($blog->image) {
            $blog->deleteImage('image');
        }

        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully.');
    }
}
