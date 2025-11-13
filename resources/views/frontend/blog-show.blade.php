@extends('frontend.layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Blog Header -->
                <header class="mb-4">
                    <h1 class="blog-title">
                        {{ $blog->heading ?? $blog->title }}
                    </h1>
                    
                    @if($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" 
                             alt="{{ $blog->title }}" 
                             class="img-fluid rounded mb-3"
                             style="max-width: 100%; height: auto;">
                    @endif
                    
                    <div class="text-muted mb-3">
                        <small>
                            Published on {{ $blog->created_at->format('F j, Y') }}
                            @if($blog->category)
                                in <a href="#">{{ $blog->category->name }}</a>
                            @endif
                        </small>
                    </div>
                </header>
                
                <!-- Blog Content -->
                <article class="blog-content">
                    {!! $blog->description !!}
                </article>
                
                <!-- Blog Footer -->
                <footer class="mt-5 pt-4 border-top">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Share this post:</h5>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-outline-primary btn-sm">Facebook</a>
                                <a href="#" class="btn btn-outline-info btn-sm">Twitter</a>
                                <a href="#" class="btn btn-outline-success btn-sm">LinkedIn</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <h5>Tags:</h5>
                            @if($blog->meta_keywords)
                                @foreach(explode(',', $blog->meta_keywords) as $keyword)
                                    <span class="badge bg-secondary me-1">{{ trim($keyword) }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </footer>
                
                <!-- Schema.org structured data -->
                @if($blog->schema)
                    <script type="application/ld+json">
                        {!! is_array($blog->schema) ? json_encode($blog->schema) : $blog->schema !!}
                    </script>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('styles')
<style>
    /* Apply blog-specific styling */
    .blog-content {
        font-family: {{ $blog->font_family ?? 'Arial, sans-serif' }};
        font-size: {{ $blog->font_size ?? '16px' }};
        line-height: {{ $blog->line_height ?? '1.6' }};
    }
    
    .blog-title {
        font-family: {{ $blog->font_family ?? 'Arial, sans-serif' }};
        font-size: {{ $blog->font_size ?? '16px' }};
        line-height: {{ $blog->line_height ?? '1.6' }};
    }
</style>
@endsection 