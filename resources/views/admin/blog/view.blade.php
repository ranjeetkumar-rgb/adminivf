@extends('admin-layouts.master')
@section('title')
    {{'View Blog'}}
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Dashboard
        @endslot
        @slot('title')
            View Blog
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Blog Details</h4>
                    <p class="card-title-desc ms-2">Details of the blog are as follows:</p>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Title:</strong> {{ $blog->title }}</li>
                        <li class="list-group-item"><strong>Heading:</strong> {{ $blog->heading ?? $blog->title }}</li>
                        <li class="list-group-item"><strong>Slug:</strong> <code>{{ $blog->slug ?? '' }}</code></li>

                        <li class="list-group-item"><strong>Image:</strong> <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="img-fluid"></li>
                        <li class="list-group-item"><strong>Meta Title:</strong> {{ $blog->meta_title }}</li>
                        <li class="list-group-item"><strong>Meta Description:</strong> {{ $blog->meta_description }}</li>
                        <li class="list-group-item"><strong>Meta Keywords:</strong> {{ $blog->meta_keywords }}</li>
                        
                        <!-- SEO Information -->
                        <li class="list-group-item"><strong>Focus Keyword:</strong> {{ $blog->focus_keyword ?? 'Not set' }}</li>
                        <li class="list-group-item"><strong>Author Name:</strong> {{ $blog->author_name ?? 'Not set' }}</li>
                        <li class="list-group-item"><strong>Canonical URL:</strong> {{ $blog->canonical_url ?? 'Not set' }}</li>
                        <li class="list-group-item"><strong>Index & Follow:</strong> 
                            @if($blog->index_follow)
                                <span class="badge bg-success">Index, Follow</span>
                            @else
                                <span class="badge bg-warning">No Index, No Follow</span>
                            @endif
                        </li>
                        
                        <!-- Open Graph Information -->
                        <li class="list-group-item"><strong>OG Title:</strong> {{ $blog->og_title ?? 'Not set' }}</li>
                        <li class="list-group-item"><strong>OG Description:</strong> {{ $blog->og_description ?? 'Not set' }}</li>
                        <li class="list-group-item"><strong>OG Image:</strong> {{ $blog->og_image ?? 'Not set' }}</li>
                        <li class="list-group-item">
                            <strong>Schema (JSON-LD):</strong>
                            @if($blog->schema)
                                <pre class="mt-2 p-2 bg-light rounded" style="max-height: 300px; overflow-y: auto;">{{ is_array($blog->schema) ? json_encode($blog->schema, JSON_PRETTY_PRINT) : $blog->schema }}</pre>
                            @else
                                <span class="text-muted">No schema defined</span>
                            @endif
                        </li>
                    </ul>
                    
                    <!-- Blog Content Preview with Applied Styling -->
                    <div class="mt-4">
                        <h5>Blog Content Preview:</h5>
                        <div class="border rounded p-3">
                            <h1>{{ $blog->heading ?? $blog->title }}</h1>
                            <div class="mt-3">
                                {!! $blog->description !!}
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-primary mt-3">Edit</a>
                    <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary mt-3">Back to List</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection

