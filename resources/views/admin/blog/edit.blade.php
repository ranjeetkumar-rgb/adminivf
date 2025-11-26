@extends('admin-layouts.master')
@section('title')
    {{'Edit Blog'}}
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">

    {{-- 1. Select2 Core CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- 2. Select2 Bootstrap 5 Theme CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-tagsinput@0.7.1/dist/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/NourS-dev/bootstrap-tagsinput-bs5@1.0.2/dist/bootstrap-tagsinput-bs5.css" rel="stylesheet">
    <style>
        .bootstrap-tagsinput {
            /* background-color: rgb(214, 203, 224) !important; */
            color: black !important;
        }
        .bootstrap-tagsinput .tag {
            border-radius: 14% !important;
            background-color: rgb(214, 203, 224) !important;
            color: black !important;
        }
    </style>
@endsection
{{-- @section('css')
@endsection --}}
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Dashboard
        @endslot
        @slot('title')
            Edit Blog
        @endslot
    @endcomponent
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Blog</h4>
                    <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter blog title" value="{{ $blog->title ?? '' }}" >
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="heading" class="form-label">Heading <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('heading') is-invalid @enderror" id="heading" name="heading" placeholder="Enter blog heading" value="{{ $blog->slug ?? '' }}" >
                                    @error('heading')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Auto-generated from heading" value="{{ $blog->slug ?? '' }}">
                                    <small class="form-text text-muted">Automatically generated from heading</small>
                                    @error('slug')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" >
                                    <small class="form-text text-muted">Images will be automatically resized to a maximum of 600x600 pixels while maintaining aspect ratio.</small>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="meta_title" class="form-label">Meta Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('meta_title') is-invalid @enderror" id="meta_title" name="meta_title" placeholder="Enter blog meta title" value="{{ $blog->meta_title ?? '' }}" >
                                    @error('meta_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="meta_description" class="form-label">Meta Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror" id="meta_description" name="meta_description" rows="3" placeholder="Enter blog meta description" >{{ $blog->meta_description ?? '' }}</textarea>
                                    @error('meta_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                    <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" id="meta_keywords" name="meta_keywords" placeholder="Enter blog meta keywords" value="{{ $blog->meta_keywords ?? '' }}">
                                    @error('meta_keywords')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- SEO Section -->
                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary">SEO Settings</h5>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="og_title" class="form-label">Open Graph Title</label>
                                    <input type="text" class="form-control @error('og_title') is-invalid @enderror" id="og_title" name="og_title" placeholder="Enter Open Graph title" value="{{ $blog->og_title ?? '' }}">
                                    <small class="form-text text-muted">Title for social media sharing</small>
                                    @error('og_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="og_image" class="form-label">Open Graph Image</label>
                                    <input type="text" class="form-control @error('og_image') is-invalid @enderror" id="og_image" name="og_image" placeholder="Enter Open Graph image URL" value="{{ $blog->og_image ?? '' }}">
                                    <small class="form-text text-muted">Image URL for social media sharing</small>
                                    @error('og_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="og_description" class="form-label">Open Graph Description</label>
                                    <textarea class="form-control @error('og_description') is-invalid @enderror" id="og_description" name="og_description" rows="3" placeholder="Enter Open Graph description">{{ $blog->og_description ?? '' }}</textarea>
                                    <small class="form-text text-muted">Description for social media sharing</small>
                                    @error('og_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="canonical_url" class="form-label">Canonical URL</label>
                                    <input type="url" class="form-control @error('canonical_url') is-invalid @enderror" id="canonical_url" name="canonical_url" placeholder="Enter canonical URL" value="{{ $blog->canonical_url ?? '' }}">
                                    <small class="form-text text-muted">Preferred URL for this content</small>
                                    @error('canonical_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="focus_keyword" class="form-label">Focus Keyword</label>
                                    <input type="text" class="form-control @error('focus_keyword') is-invalid @enderror" id="focus_keyword" name="focus_keyword" placeholder="Enter main focus keyword" value="{{ $blog->focus_keyword ?? '' }}">
                                    <small class="form-text text-muted">Primary keyword for this content</small>
                                    @error('focus_keyword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="author_name" class="form-label">Author Name</label>
                                    <input type="text" class="form-control @error('author_name') is-invalid @enderror" id="author_name" name="author_name" placeholder="Enter author name" value="{{ $blog->author_name ?? '' }}">
                                    @error('author_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="index_follow" class="form-label">Index & Follow</label>
                                    <select class="form-control @error('index_follow') is-invalid @enderror" id="index_follow" name="index_follow">
                                        <option value="1" {{ $blog->index_follow == '1' ? 'selected' : '' }}>Index, Follow</option>
                                        <option value="0" {{ $blog->index_follow == '0' ? 'selected' : '' }}>No Index, No Follow</option>
                                    </select>
                                    <small class="form-text text-muted">Search engine crawling directive</small>
                                    @error('index_follow')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="schema" class="form-label">Schema (JSON-LD)</label>
                                    <textarea class="form-control @error('schema') is-invalid @enderror" id="schema" name="schema" rows="8" placeholder='{"@context": "https://schema.org", "@type": "Article", "headline": "Your Article Title", "author": {"@type": "Person", "name": "Author Name"}, "datePublished": "2024-01-01", "dateModified": "2024-01-01", "publisher": {"@type": "Organization", "name": "Your Organization"}}'>{{ $blog->schema ?? '' }}</textarea>
                                    <small class="form-text text-muted">Enter valid JSON-LD structured data for this blog post. This helps search engines understand your content better.</small>
                                    @error('schema')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="excerpt" class="form-label">Excerpt</label>
                                    <textarea class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt" rows="3" placeholder="Enter blog excerpt (short description)">{!! $blog->excerpt ?? '' !!}</textarea>
                                    <small class="form-text text-muted">Short description that appears in blog listings</small>
                                    @error('excerpt')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Blog Content(Section #)</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" placeholder="Enter blog content">{!! $blog->description ?? '' !!}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="description1" class="form-label">Blog Content key Insight(Section 1)</label>
                                    <textarea class="form-control @error('description1') is-invalid @enderror" id="description1" name="description1" rows="5" placeholder="Enter blog content">{!! $blog->description1 ?? '' !!}</textarea>
                                    @error('description1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="description2" class="form-label">Age and Success Rate(Section 2)</label>
                                    <textarea class="form-control @error('description2') is-invalid @enderror" id="description2" name="description2" rows="5" placeholder="Enter blog content">{!! $blog->description2 ?? '' !!}</textarea>
                                    @error('description2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="description3" class="form-label">Age affects(Section 3)</label>
                                    <textarea class="form-control @error('description3') is-invalid @enderror" id="description3" name="description3" rows="5" placeholder="Enter blog content">{!! $blog->description3 ?? '' !!}</textarea>
                                    @error('description3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="description4" class="form-label">Understanding Biological(Section 4)</label>
                                    <textarea class="form-control @error('description4') is-invalid @enderror" id="description4" name="description4" rows="5" placeholder="Enter blog content">{!! $blog->description4 ?? '' !!}</textarea>
                                    @error('description4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="description5" class="form-label">Ovarian Reserve (Section 5)</label>
                                    <textarea class="form-control @error('description5') is-invalid @enderror" id="description5" name="description5" rows="5" placeholder="Enter blog content">{!! $blog->description5 ?? '' !!}</textarea>
                                    @error('description5')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                              <!-- SEO Section -->
                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary"> key Tests (Section 6)</h5>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="key_tests_heading" class="form-label">Key Tests Heading</label>
                                    <input type="text" class="form-control @error('key_tests_heading') is-invalid @enderror" id="key_tests_heading" name="key_tests_heading" placeholder="Enter blog heading" value="{{ $blog->key_tests_heading ?? '' }}">
                                    @error('key_tests_heading')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="key_tests_content" class="form-label">Key Tests Content </label>
                                    <textarea class="form-control @error('key_tests_content') is-invalid @enderror" id="key_tests_content" name="key_tests_content" rows="5" placeholder="Enter blog content">{!! $blog->key_tests_content ?? '' !!}</textarea>
                                    @error('key_tests_content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="key_tests_section_1" class="form-label">Key Tests (Section 1)</label>
                                    <textarea class="form-control @error('key_tests_section_1') is-invalid @enderror" id="key_tests_section_1" name="key_tests_section_1" rows="5" placeholder="Enter blog content">{!!  $blog->key_tests_section_1 ?? '' !!}</textarea>
                                    @error('key_tests_section_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="key_tests_section_2" class="form-label">Key Tests (Section 2)</label>
                                    <textarea class="form-control @error('key_tests_section_2') is-invalid @enderror" id="key_tests_section_2" name="key_tests_section_2" rows="5" placeholder="Enter blog content">{!!  $blog->key_tests_section_2 ?? '' !!}</textarea>
                                    @error('key_tests_section_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="key_tests_section_3" class="form-label">Key Tests (Section 3)</label>
                                    <textarea class="form-control @error('key_tests_section_3') is-invalid @enderror" id="key_tests_section_3" name="key_tests_section_3" rows="5" placeholder="Enter blog content">{!! $blog->key_tests_section_3 ?? '' !!}</textarea>
                                    @error('key_tests_section_3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="key_tests_section_4" class="form-label">Key Tests (Section 4)</label>
                                    <textarea class="form-control @error('key_tests_section_4') is-invalid @enderror" id="key_tests_section_4" name="key_tests_section_4" rows="5" placeholder="Enter blog content">{!! $blog->key_tests_section_4 ?? '' !!}</textarea>
                                    @error('key_tests_section_4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="male_factor_and_key_male_fertility" class="form-label">Male Factor and Key Male Fertility Tests (Section 7)</label>
                                    <textarea class="form-control @error('male_factor_and_key_male_fertility') is-invalid @enderror" id="male_factor_and_key_male_fertility" name="male_factor_and_key_male_fertility" rows="5" placeholder="Enter blog content">{!! $blog->male_factor_and_key_male_fertility ?? '' !!}</textarea>
                                    @error('male_factor_and_key_male_fertility')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- ICSI --}}
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="icsi" class="form-label">ICSI (Section 8)</label>
                                    <textarea class="form-control @error('icsi') is-invalid @enderror" id="icsi" name="icsi" rows="5" placeholder="Enter blog content">{!! $blog->icsi ?? '' !!}</textarea>
                                    @error('icsi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                      <!-- Video Section -->
                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary">Video Content (Optional)</h5>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="video_url" class="form-label">Video URL</label>
                                    <input type="url" class="form-control @error('video_url') is-invalid @enderror" id="video_url" name="video_url" placeholder="https://www.youtube.com/watch?v=VIDEO_ID" value="{{ $blog->video_url ?? '' }}">
                                    <small class="form-text text-muted">Enter YouTube video URL (e.g., https://www.youtube.com/watch?v=VIDEO_ID). The video ID will be extracted automatically.</small>
                                    @error('video_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="video_duration" class="form-label">Video Duration (minutes)</label>
                                    <input type="number" class="form-control @error('video_duration') is-invalid @enderror" id="video_duration" name="video_duration" placeholder="Enter video duration in minutes" value="{{ $blog->video_duration ?? '' }}">
                                    @error('video_duration')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- life style and positive (Section 8) --}}
                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary">Lifestyle (Section 8)</h5>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="lifestyle" class="form-label">Lifestyle  (Section 8)</label>
                                    <textarea class="form-control @error('lifestyle') is-invalid @enderror" id="lifestyle" name="lifestyle" rows="5" placeholder="Enter blog content">{!! $blog->lifestyle ?? '' !!}</textarea>
                                    @error('lifestyle')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Positive Lifestyle Factors --}}
                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary">Positive Lifestyle Factors</h5>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="nutrition" class="form-label">Nutrition (Section 9)</label>
                                    <textarea class="form-control @error('nutrition') is-invalid @enderror" id="nutrition" name="nutrition" rows="5" placeholder="Enter blog content">{!! $blog->nutrition ?? '' !!}</textarea>
                                    @error('nutrition')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="exercise" class="form-label">Exercise (Section 10)</label>
                                    <textarea class="form-control @error('exercise') is-invalid @enderror" id="exercise" name="exercise" rows="5" placeholder="Enter blog content">{!! $blog->exercise ?? '' !!}</textarea>
                                    @error('exercise')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Factors to Avoid --}}

                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary">Factors to Avoid</h5>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="avoid" class="form-label">Avoid (Section 11)</label>
                                    <textarea class="form-control @error('avoid') is-invalid @enderror" id="avoid" name="avoid" rows="5" placeholder="Enter blog content">{!! $blog->avoid ?? '' !!}</textarea>
                                    @error('avoid')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Clinic and Technology Factors --}}
                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary">Clinic and Technology Factors</h5>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="clinic" class="form-label">Clinic (Section 12)</label>
                                    <textarea class="form-control @error('clinic') is-invalid @enderror" id="clinic" name="clinic" rows="5" placeholder="Enter blog content">{!! $blog->clinic ?? '' !!}</textarea>
                                    @error('clinic')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Key Clinic Quality Indicators --}}
                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary">Key Clinic Quality Indicators(Section 13)</h5>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="laboratory_standards" class="form-label">Laboratory Standards (Section 13-1)</label>
                                    <textarea class="form-control @error('laboratory_standards') is-invalid @enderror" id="laboratory_standards" name="laboratory_standards" rows="5" placeholder="Enter blog content">{!! $blog->laboratory_standards ?? '' !!}</textarea>
                                    @error('laboratory_standards')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="experienced_team" class="form-label">Experienced Team (Section 13-2)</label>
                                    <textarea class="form-control @error('experienced_team') is-invalid @enderror" id="experienced_team" name="experienced_team" rows="5" placeholder="Enter blog content">{!! $blog->experienced_team ?? '' !!}</textarea>
                                    @error('experienced_team')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="transparent_success_rates" class="form-label">Transparent Success Rates (Section 13-2)</label>
                                    <textarea class="form-control @error('transparent_success_rates') is-invalid @enderror" id="transparent_success_rates" name="transparent_success_rates" rows="5" placeholder="Enter blog content">{!! $blog->transparent_success_rates ?? '' !!}</textarea>
                                    @error('transparent_success_rates')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                            {{-- dr review  --}}
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="dr_review" class="form-label">Dr. Review (Section 14)</label>
                                    <textarea class="form-control @error('dr_review') is-invalid @enderror" id="dr_review" name="dr_review" rows="5" placeholder="Enter blog content">{!! $blog->dr_review ?? '' !!}</textarea>
                                    @error('dr_review')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Previous IVF Attempts  and Learning --}}
                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary">Previous IVF Attempts  and Learning (Section 15)</h5>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="previous_attempts" class="form-label">Previous Ivf Attempts and learning (Section 15)</label>
                                    <textarea class="form-control @error('previous_attempts') is-invalid @enderror" id="previous_attempts" name="previous_attempts" rows="5" placeholder="Enter blog content">{!! $blog->previous_attempts ?? '' !!}</textarea>
                                    @error('previous_attempts')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Success After Multiple Attempts --}}
                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary">Success After Multiple Attempts (Section 16)</h5>
                                <div class="mb-3">
                                    <label for="success_after_attempts" class="form-label">Success After Multiple Attempts (Section 16)</label>
                                    <textarea class="form-control @error('success_after_attempts') is-invalid @enderror" id="success_after_attempts" name="success_after_attempts" rows="5" placeholder="Enter blog content">{!! $blog->success_after_attempts ?? '' !!}</textarea>
                                    @error('success_after_attempts')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Emotional Support Systems --}}
                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary">Emotional Support Systems (Section 17)</h5>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="emotional_support" class="form-label">Emotional Support (Section 17)</label>
                                    <textarea class="form-control @error('emotional_support') is-invalid @enderror" id="emotional_support" name="emotional_support" rows="5" placeholder="Enter blog content">{!! $blog->emotional_support ?? '' !!}</textarea>
                                    @error('emotional_support')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Building Your Support Network --}}
                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary">Building Your Support Network (Section 18)</h5>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="partner_support" class="form-label">Partner Support (Section 18-1)</label>
                                    <textarea class="form-control @error('partner_support') is-invalid @enderror" id="partner_support" name="partner_support" rows="5" placeholder="Enter blog content">{!! $blog->partner_support ?? '' !!}</textarea>
                                    @error('partner_support')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Support Groups --}}
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="support_groups" class="form-label">Support Groups (Section 18-2)</label>
                                    <textarea class="form-control @error('support_groups') is-invalid @enderror" id="support_groups" name="support_groups" rows="5" placeholder="Enter blog content">{!! $blog->support_groups ?? '' !!}</textarea>
                                    @error('support_groups')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Professional Counseling --}}
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="professinal_counselling" class="form-label">Professional Counseling (Section 18-3)</label>
                                    <textarea class="form-control @error('professinal_counselling') is-invalid @enderror" id="professinal_counselling" name="professinal_counselling" rows="5" placeholder="Enter blog content">{!! $blog->professinal_counselling ?? '' !!}</textarea>
                                    @error('professinal_counselling')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Personalized Treatment Approach --}}
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="personalized_treatment" class="form-label">Personalized Treatment Approach (Section 19)</label>
                                    <textarea class="form-control @error('personalized_treatment') is-invalid @enderror" id="personalized_treatment" name="personalized_treatment" rows="5" placeholder="Enter blog content">{!! $blog->personalized_treatment ?? '' !!}</textarea>
                                    @error('personalized_treatment')
                                        <span class="invalid-feedback" role="alert">
                                    @enderror
                                </div>
                            </div>
                            {{-- India IVF Advantage --}}
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="india_advantage" class="form-label">India IVF Advantage (Section 20)</label>
                                    <textarea class="form-control @error('india_advantage') is-invalid @enderror" id="india_advantage" name="india_advantage" rows="5" placeholder="Enter blog content">{!! $blog->india_advantage ?? '' !!}</textarea>
                                    @error('india_advantage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Conclusion and Next Steps --}}
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="conclusion" class="form-label">Conclusion and Next Steps  (Section 22)</label>
                                    <textarea class="form-control @error('conclusion') is-invalid @enderror" id="conclusion" name="conclusion" rows="5" placeholder="Enter blog content">{!! $blog->conclusion ?? '' !!}</textarea>
                                    @error('conclusion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Your Journey Starts Here --}}
                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary">Your Journey Starts Here (Section 23)</h5>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="your_journey" class="form-label">Your Journey Starts Here (Section 23)</label>
                                    <textarea class="form-control @error('your_journey') is-invalid @enderror" id="your_journey" name="your_journey" rows="5" placeholder="Enter blog content">{!! $blog->your_journey ?? '' !!}</textarea>
                                    @error('your_journey')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="user_write_and_tag_create" class="form-label">User Write and Tag Create (Section 24)</label>
                                    <textarea class="form-control @error('user_write_and_tag_create') is-invalid @enderror" id="user_write_and_tag_create" name="user_write_and_tag_create" rows="5" placeholder="Enter blog content">{!! $blog->user_write_and_tag_create ?? '' !!}</textarea>
                                    @error('user_write_and_tag_create')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="tags" class="form-label">Tags</label>

                                    {{-- This input will be turned into a tag editor --}}
                                    <input type="text"
                                        class="form-control @error('tags') is-invalid @enderror"
                                        id="tags"
                                        name="tags"
                                        placeholder="Add tags"
                                        value="{{ $blog->tags ?? '' }}"
                                        data-role="tagsinput">

                                    @error('tags')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                           <div class="col-6">
                            <div class="mb-3">
                                <label for="categories_select" class="form-label">Categories</label>
                                <select class="form-control select2 @error('categories') is-invalid @enderror"
                                        multiple
                                        id="categories_select"
                                        name="categories[]"
                                        >
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ in_array($category->id, $blog->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                {{-- 5. Update the error key --}}
                                @error('categories')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            <!-- Blog Status Section -->
                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary">Blog Status</h5>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="published" class="form-label">Published Status</label>
                                    <select class="form-control @error('published') is-invalid @enderror" id="published" name="published">
                                        <option value="1" {{ $blog->published == '1' ? 'selected' : '' }}>Published</option>
                                        <option value="0" {{ $blog->published == '0' ? 'selected' : '' }}>Draft</option>
                                    </select>
                                    @error('published')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="featured" class="form-label">Featured Status</label>
                                    <select class="form-control @error('featured') is-invalid @enderror" id="featured" name="featured">
                                        <option value="0" {{ $blog->featured == '0' ? 'selected' : '' }}>Regular</option>
                                        <option value="1" {{ $blog->featured == '1' ? 'selected' : '' }}>Featured</option>
                                    </select>
                                    @error('featured')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="published_at" class="form-label">Publish Date</label>
                                    <input type="datetime-local" class="form-control @error('published_at') is-invalid @enderror" id="published_at" name="published_at" value="{{ $blog->published_at ?? now()->format('Y-m-d\TH:i') }}">
                                    @error('published_at')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <!-- Author Section -->
                            <div class="col-12">
                                <h5 class="mt-4 mb-3 text-primary">Author Information</h5>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="author_title" class="form-label">Author Title</label>
                                    <input type="text" class="form-control @error('author_title') is-invalid @enderror" id="author_title" name="author_title" placeholder="Enter author title (e.g., Dr., Specialist)" value="{{ $blog->author_title ?? '' }}">
                                    @error('author_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="author_image" class="form-label">Author Image</label>
                                    <input type="file" class="form-control @error('author_image') is-invalid @enderror" id="author_image" name="author_image"  accept="image/*">
                                    <small class="form-text text-muted">Author profile image</small>
                                    @error('author_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="author_bio" class="form-label">Author Bio</label>
                                    <textarea class="form-control @error('author_bio') is-invalid @enderror" id="author_bio" name="author_bio" rows="3" placeholder="Enter author biography">{!! $blog->author_bio ?? '' !!}</textarea>
                                    @error('author_bio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- <div class="col-12">
                                <div class="mb-3">
                                    <label for="faq_question" class="form-label">FAQ Question</label>
                                    <input type="text" class="form-control @error('faq_question') is-invalid @enderror" id="faq_question" name="faq_question" value="{{ old('faq_question') }}" >
                                    @error('faq_question')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> -->
                            <!-- <div class="col-12">
                                <div class="mb-3">
                                    <label for="faq_answer" class="form-label">FAQ Answer</label>
                                    <textarea class="form-control @error('faq_answer') is-invalid @enderror" id="faq_answer" name="faq_answer" rows="3" >{{ old('faq_answer') }}</textarea>
                                    @error('faq_answer')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> -->
                            <div class="col-12">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Update Blog</button>
                                    <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-tagsinput@0.7.1/dist/bootstrap-tagsinput.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#categories_select').select2({
                placeholder: "Select categories",
                allowClear: true,
                theme: 'bootstrap-5'
            });
            $('#tags').tagsinput({
                confirmKeys: [13, 44], // Submits tag on Enter (13) or Comma (44)
                trimValue: true        // Automatically trims whitespace
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.7.2/tinymce.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, initializing TinyMCE...');
            // Auto-generate slug from heading
            const headingInput = document.getElementById('heading');
            const slugInput = document.getElementById('slug');
            if (headingInput && slugInput) {
                headingInput.addEventListener('input', function() {
                    const heading = this.value;
                    if (heading) { // Always generate slug when heading has value
                        const slug = heading.toLowerCase()
                            .replace(/[^a-z0-9\s-]/g, '') // Remove special characters
                            .replace(/\s+/g, '-') // Replace spaces with hyphens
                            .replace(/-+/g, '-') // Replace multiple hyphens with single
                            .replace(/^-+|-+$/g, ''); // Remove leading/trailing hyphens
                        slugInput.value = slug;
                        console.log('Generated slug:', slug); // Debug log
                    } else {
                        slugInput.value = ''; // Clear slug if heading is empty
                    }
                });

                // Also generate slug when heading loses focus
                headingInput.addEventListener('blur', function() {
                    const heading = this.value;
                    if (heading) {
                        const slug = heading.toLowerCase()
                            .replace(/[^a-z0-9\s-]/g, '')
                            .replace(/\s+/g, '-')
                            .replace(/-+/g, '-')
                            .replace(/^-+|-+$/g, '');
                        slugInput.value = slug;
                        console.log('Generated slug on blur:', slug); // Debug log
                    }
                });
            }
            // Schema JSON validation
            const schemaTextarea = document.getElementById('schema');
            if (schemaTextarea) {
                schemaTextarea.addEventListener('blur', function() {
                    const value = this.value.trim();
                    if (value) {
                        try {
                            JSON.parse(value);
                            this.classList.remove('is-invalid');
                            this.classList.add('is-valid');
                        } catch (e) {
                            this.classList.remove('is-valid');
                            this.classList.add('is-invalid');
                            console.error('Invalid JSON:', e.message);
                        }
                    } else {
                        this.classList.remove('is-valid', 'is-invalid');
                    }
                });
            }
            // Initialize TinyMCE with source code editing
            tinymce.init({
                selector: '#description,#description1,#description2,#description3,#description4,#description5,#key_tests_content,#key_tests_section_1,#key_tests_section_2,#key_tests_section_3,#key_tests_section_4,#male_factor_and_key_male_fertility,#icsi,#lifestyle,#nutrition,#exercise,#avoid,#clinic,#laboratory_standards,#experienced_team,#transparent_success_rates,#dr_review,#previous_attempts,#success_after_attempts,#emotional_support,#partner_support,#support_groups,#professinal_counselling,#personalized_treatment,#india_advantage,#conclusion,#your_journey,#user_write_and_tag_create',
                height: 300,
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'help', 'wordcount', 'codesample'
                ],
                toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media table | code fullscreen | help',
                menubar: 'file edit view insert format tools table help',
                content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; }',
                branding: false,
                promotion: false,
                codesample_languages: [
                    { text: 'HTML/XML', value: 'markup' },
                    { text: 'JavaScript', value: 'javascript' },
                    { text: 'CSS', value: 'css' },
                    { text: 'PHP', value: 'php' },
                    { text: 'Python', value: 'python' },
                    { text: 'Java', value: 'java' },
                    { text: 'C', value: 'c' },
                    { text: 'C++', value: 'cpp' },
                    { text: 'C#', value: 'csharp' },
                    { text: 'Ruby', value: 'ruby' },
                    { text: 'SQL', value: 'sql' }
                ],
                setup: function(editor) {
                    console.log('TinyMCE editor initialized');

                    // Add custom source code button
                    editor.ui.registry.addButton('sourcecode', {
                        text: 'Source',
                        tooltip: 'View/Edit Source Code',
                        onAction: function() {
                            if (editor.mode.get() === 'readonly') {
                                editor.mode.set('design');
                            } else {
                                editor.mode.set('readonly');
                                editor.setContent(editor.getContent({format: 'raw'}));
                            }
                        }
                    });

                    editor.on('change', function() {
                        editor.save();
                    });
                }
            });

            // Form validation
            // document.querySelector('form').addEventListener('submit', function(e) {
            //     var content = tinymce.get('description').getContent().trim();
            //     if (!content) {
            //         e.preventDefault();
            //         alert('Please enter content for the blog.');
            //         return false;
            //     }
            // });
        });
    </script>
    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection

