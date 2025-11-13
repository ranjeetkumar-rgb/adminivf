<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('permission:view-blog-categories', ['only' => ['index']]);
        $this->middleware('permission:create-blog-categories', ['only' => ['create','store']]);
        $this->middleware('permission:edit-blog-categories', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-blog-categories', ['only' => ['destroy']]);
    }
    public function index()
    {
        $categories = BlogCategory::all();
        return view('admin.blog-category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name',
        ]);
        $slug = Str::slug($request->name);
        BlogCategory::create(['name' => $request->name, 'slug' => $slug]);
        return redirect()->route('admin.blog-categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogCategory $blogCategory)
    {
        return view('admin.blog-category.edit', compact('blogCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogCategory $blogCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name,' . $blogCategory->id,
        ]);
        $slug = Str::slug($request->name);
        $blogCategory->update(['name' => $request->name, 'slug' => $slug]);
        return redirect()->route('admin.blog-categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogCategory $blogCategory)
    {
        $blogCategory->delete();
        return redirect()->route('admin.blog-categories.index')->with('success', 'Category deleted successfully.');
    }
}
