@extends('admin-layouts.master')
@section('title')
    {{'Create Blog'}}
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
            Create Blog
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
                    <h4 class="card-title">Create Blog</h4>
                    <p class="card-title-desc ms-2">Here you can create a new blog.</p>
                    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter blog title" value="{{ old('title') }}" required>
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
                                    <input type="text" class="form-control @error('heading') is-invalid @enderror" id="heading" name="heading" placeholder="Enter blog heading" value="{{ old('heading') }}" required>
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
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Auto-generated from heading" value="{{ old('slug') }}">
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
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" required>
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
                                    <input type="text" class="form-control @error('meta_title') is-invalid @enderror" id="meta_title" name="meta_title" placeholder="Enter blog meta title" value="{{ old('meta_title') }}" required>
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
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror" id="meta_description" name="meta_description" rows="3" placeholder="Enter blog meta description" required>{{ old('meta_description') }}</textarea>
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
                                    <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" id="meta_keywords" name="meta_keywords" placeholder="Enter blog meta keywords" value="{{ old('meta_keywords') }}">
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
                                    <input type="text" class="form-control @error('og_title') is-invalid @enderror" id="og_title" name="og_title" placeholder="Enter Open Graph title" value="{{ old('og_title') }}">
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
                                    <input type="text" class="form-control @error('og_image') is-invalid @enderror" id="og_image" name="og_image" placeholder="Enter Open Graph image URL" value="{{ old('og_image') }}">
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
                                    <textarea class="form-control @error('og_description') is-invalid @enderror" id="og_description" name="og_description" rows="3" placeholder="Enter Open Graph description">{{ old('og_description') }}</textarea>
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
                                    <input type="url" class="form-control @error('canonical_url') is-invalid @enderror" id="canonical_url" name="canonical_url" placeholder="Enter canonical URL" value="{{ old('canonical_url') }}">
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
                                    <input type="text" class="form-control @error('focus_keyword') is-invalid @enderror" id="focus_keyword" name="focus_keyword" placeholder="Enter main focus keyword" value="{{ old('focus_keyword') }}">
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
                                    <input type="text" class="form-control @error('author_name') is-invalid @enderror" id="author_name" name="author_name" placeholder="Enter author name" value="{{ old('author_name') }}">
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
                                        <option value="1" {{ old('index_follow', '1') == '1' ? 'selected' : '' }}>Index, Follow</option>
                                        <option value="0" {{ old('index_follow', '1') == '0' ? 'selected' : '' }}>No Index, No Follow</option>
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
                                    <textarea class="form-control @error('schema') is-invalid @enderror" id="schema" name="schema" rows="8" placeholder='{"@context": "https://schema.org", "@type": "Article", "headline": "Your Article Title", "author": {"@type": "Person", "name": "Author Name"}, "datePublished": "2024-01-01", "dateModified": "2024-01-01", "publisher": {"@type": "Organization", "name": "Your Organization"}}'>{{ old('schema') }}</textarea>
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
                                    <textarea class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt" rows="3" placeholder="Enter blog excerpt (short description)">{{ old('excerpt') }}</textarea>
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
                                    <label for="description" class="form-label">Blog Content</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="10" placeholder="Enter blog content">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
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
                                        <option value="1" {{ old('published', '1') == '1' ? 'selected' : '' }}>Published</option>
                                        <option value="0" {{ old('published', '1') == '0' ? 'selected' : '' }}>Draft</option>
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
                                        <option value="0" {{ old('featured', '0') == '0' ? 'selected' : '' }}>Regular</option>
                                        <option value="1" {{ old('featured', '0') == '1' ? 'selected' : '' }}>Featured</option>
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
                                    <input type="datetime-local" class="form-control @error('published_at') is-invalid @enderror" id="published_at" name="published_at" value="{{ old('published_at', now()->format('Y-m-d\TH:i')) }}">
                                    @error('published_at')
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
                                    <input type="url" class="form-control @error('video_url') is-invalid @enderror" id="video_url" name="video_url" placeholder="Enter video URL (YouTube, Vimeo, etc.)" value="{{ old('video_url') }}">
                                    <small class="form-text text-muted">URL to video content (YouTube, Vimeo, etc.)</small>
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
                                    <input type="number" class="form-control @error('video_duration') is-invalid @enderror" id="video_duration" name="video_duration" placeholder="Enter video duration in minutes" value="{{ old('video_duration') }}">
                                    @error('video_duration')
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
                                    <input type="text" class="form-control @error('author_title') is-invalid @enderror" id="author_title" name="author_title" placeholder="Enter author title (e.g., Dr., Specialist)" value="{{ old('author_title') }}">
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
                                    <input type="file" class="form-control @error('author_image') is-invalid @enderror" id="author_image" name="author_image" accept="image/*">
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
                                    <textarea class="form-control @error('author_bio') is-invalid @enderror" id="author_bio" name="author_bio" rows="3" placeholder="Enter author biography">{{ old('author_bio') }}</textarea>
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
                                    <input type="text" class="form-control @error('faq_question') is-invalid @enderror" id="faq_question" name="faq_question" value="{{ old('faq_question') }}" required>
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
                                    <textarea class="form-control @error('faq_answer') is-invalid @enderror" id="faq_answer" name="faq_answer" rows="3" required>{{ old('faq_answer') }}</textarea>
                                    @error('faq_answer')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> -->
                            <div class="col-12">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Create Blog</button>
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
                selector: '#description',
                height: 500,
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
            document.querySelector('form').addEventListener('submit', function(e) {
                var content = tinymce.get('description').getContent().trim();
                if (!content) {
                    e.preventDefault();
                    alert('Please enter content for the blog.');
                    return false;
                }
            });
        });
    </script>
    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection

