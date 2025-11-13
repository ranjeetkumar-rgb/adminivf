@extends('admin-layouts.master')

@section('title', 'Create Page SEO')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Create Page SEO</h4>
                    <div class="page-title-right">
                        <a href="{{ route('admin.page-seo.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.page-seo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="row">
                                <!-- Basic SEO -->
                                <div class="col-md-6">
                                    <h5 class="mb-3">Basic SEO Settings</h5>
                                    
                                    <!-- Enhanced Page Name Section -->
                                    <div class="mb-3">
                                        <label for="page_name" class="form-label">Page Name *</label>
                                        <div class="input-group">
                                            @if(count($availablePages) > 0)
                                                <select name="page_name" id="page_name" class="form-select @error('page_name') is-invalid @enderror" required>
                                                    <option value="">Select Page</option>
                                                    @foreach($availablePages as $key => $value)
                                                        <option value="{{ $key }}" {{ old('page_name') == $key ? 'selected' : '' }}>
                                                            {{ $value }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <button type="button" class="btn btn-outline-secondary" onclick="showCustomPageInput()">
                                                    <i class="fas fa-plus"></i> Custom
                                                </button>
                                            @else
                                                <input type="text" name="page_name" id="page_name" 
                                                       class="form-control @error('page_name') is-invalid @enderror" 
                                                       value="{{ old('page_name') }}" required maxlength="100" 
                                                       placeholder="Enter page name (e.g., custom-page, new-service)">
                                                <button type="button" class="btn btn-outline-secondary" onclick="showPageSuggestions()">
                                                    <i class="fas fa-lightbulb"></i> Suggestions
                                                </button>
                                            @endif
                                        </div>
                                        
                                        <!-- Page Name Help -->
                                        <div class="form-text">
                                            <strong>Page Name Guidelines:</strong>
                                            <ul class="mb-0 mt-1">
                                                <li>Use lowercase letters, numbers, and hyphens only</li>
                                                <li>Keep it short and descriptive (e.g., "ivf-treatment", "fertility-services")</li>
                                                <li>This name will be used to identify the page in SEO and schema systems</li>
                                                <li>Must be unique across all pages</li>
                                            </ul>
                                        </div>
                                        
                                        <!-- Page Name Validation -->
                                        <div id="page-name-validation" class="mt-2"></div>
                                        
                                        @error('page_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Custom Page Name Input (Hidden by default) -->
                                    <div id="custom-page-input" class="mb-3" style="display: none;">
                                        <label for="custom_page_name" class="form-label">Custom Page Name</label>
                                        <div class="input-group">
                                            <input type="text" name="custom_page_name" id="custom_page_name" 
                                                   class="form-control" maxlength="100" 
                                                   placeholder="Enter custom page name">
                                            <button type="button" class="btn btn-outline-secondary" onclick="hideCustomPageInput()">
                                                <i class="fas fa-times"></i> Cancel
                                            </button>
                                        </div>
                                        <div class="form-text">Enter a unique page name for your custom page</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="page_title" class="form-label">Page Title *</label>
                                        <input type="text" name="page_title" id="page_title" 
                                               class="form-control @error('page_title') is-invalid @enderror" 
                                               value="{{ old('page_title') }}" required maxlength="255">
                                        <div class="form-text">Recommended: 50-60 characters</div>
                                        @error('page_title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="meta_description" class="form-label">Meta Description *</label>
                                        <textarea name="meta_description" id="meta_description" rows="3" 
                                                  class="form-control @error('meta_description') is-invalid @enderror" 
                                                  required maxlength="500">{{ old('meta_description') }}</textarea>
                                        <div class="form-text">Recommended: 150-160 characters</div>
                                        @error('meta_description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                        <input type="text" name="meta_keywords" id="meta_keywords" 
                                               class="form-control @error('meta_keywords') is-invalid @enderror" 
                                               value="{{ old('meta_keywords') }}" maxlength="500">
                                        <div class="form-text">Comma-separated keywords</div>
                                        @error('meta_keywords')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="focus_keyword" class="form-label">Focus Keyword</label>
                                        <input type="text" name="focus_keyword" id="focus_keyword" 
                                               class="form-control @error('focus_keyword') is-invalid @enderror" 
                                               value="{{ old('focus_keyword') }}" maxlength="100">
                                        @error('focus_keyword')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="canonical_url" class="form-label">Canonical URL</label>
                                        <input type="url" name="canonical_url" id="canonical_url" 
                                               class="form-control @error('canonical_url') is-invalid @enderror" 
                                               value="{{ old('canonical_url') }}">
                                        @error('canonical_url')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="index_follow" id="index_follow" 
                                                   class="form-check-input" value="1" 
                                                   {{ old('index_follow', true) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="index_follow">
                                                Allow indexing and following
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Open Graph -->
                                <div class="col-md-6">
                                    <h5 class="mb-3">Open Graph Settings</h5>
                                    
                                    <div class="mb-3">
                                        <label for="og_title" class="form-label">OG Title</label>
                                        <input type="text" name="og_title" id="og_title" 
                                               class="form-control @error('og_title') is-invalid @enderror" 
                                               value="{{ old('og_title') }}" maxlength="255">
                                        @error('og_title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="og_description" class="form-label">OG Description</label>
                                        <textarea name="og_description" id="og_description" rows="3" 
                                                  class="form-control @error('og_description') is-invalid @enderror">{{ old('og_description') }}</textarea>
                                        @error('og_description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="og_image" class="form-label">OG Image</label>
                                        <input type="file" name="og_image" id="og_image" 
                                               class="form-control @error('og_image') is-invalid @enderror" 
                                               accept="image/*">
                                        <div class="form-text">Recommended: 1200x630 pixels</div>
                                        @error('og_image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="og_type" class="form-label">OG Type</label>
                                        <select name="og_type" id="og_type" class="form-select @error('og_type') is-invalid @enderror">
                                            <option value="website" {{ old('og_type', 'website') == 'website' ? 'selected' : '' }}>Website</option>
                                            <option value="article" {{ old('og_type') == 'article' ? 'selected' : '' }}>Article</option>
                                            <option value="product" {{ old('og_type') == 'product' ? 'selected' : '' }}>Product</option>
                                            <option value="profile" {{ old('og_type') == 'profile' ? 'selected' : '' }}>Profile</option>
                                        </select>
                                        @error('og_type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <h5 class="mb-3 mt-4">Twitter Card Settings</h5>
                                    
                                    <div class="mb-3">
                                        <label for="twitter_title" class="form-label">Twitter Title</label>
                                        <input type="text" name="twitter_title" id="twitter_title" 
                                               class="form-control @error('twitter_title') is-invalid @enderror" 
                                               value="{{ old('twitter_title') }}" maxlength="255">
                                        @error('twitter_title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="twitter_description" class="form-label">Twitter Description</label>
                                        <textarea name="twitter_description" id="twitter_description" rows="3" 
                                                  class="form-control @error('twitter_description') is-invalid @enderror">{{ old('twitter_description') }}</textarea>
                                        @error('twitter_description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="twitter_image" class="form-label">Twitter Image</label>
                                        <input type="file" name="twitter_image" id="twitter_image" 
                                               class="form-control @error('twitter_image') is-invalid @enderror" 
                                               accept="image/*">
                                        <div class="form-text">Recommended: 1200x600 pixels</div>
                                        @error('twitter_image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="twitter_card" class="form-label">Twitter Card Type</label>
                                        <select name="twitter_card" id="twitter_card" class="form-select @error('twitter_card') is-invalid @enderror">
                                            <option value="summary_large_image" {{ old('twitter_card', 'summary_large_image') == 'summary_large_image' ? 'selected' : '' }}>Summary Large Image</option>
                                            <option value="summary" {{ old('twitter_card') == 'summary' ? 'selected' : '' }}>Summary</option>
                                            <option value="app" {{ old('twitter_card') == 'app' ? 'selected' : '' }}>App</option>
                                        </select>
                                        @error('twitter_card')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="twitter_site" class="form-label">Twitter Site</label>
                                        <input type="text" name="twitter_site" id="twitter_site" 
                                               class="form-control @error('twitter_site') is-invalid @enderror" 
                                               value="{{ old('twitter_site') }}" maxlength="100">
                                        <div class="form-text">e.g., @yourcompany</div>
                                        @error('twitter_site')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="twitter_creator" class="form-label">Twitter Creator</label>
                                        <input type="text" name="twitter_creator" id="twitter_creator" 
                                               class="form-control @error('twitter_creator') is-invalid @enderror" 
                                               value="{{ old('twitter_creator') }}" maxlength="100">
                                        <div class="form-text">e.g., @author</div>
                                        @error('twitter_creator')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="author" class="form-label">Author</label>
                                        <input type="text" name="author" id="author" 
                                               class="form-control @error('author') is-invalid @enderror" 
                                               value="{{ old('author') }}" maxlength="100">
                                        @error('author')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="robots" class="form-label">Robots</label>
                                        <input type="text" name="robots" id="robots" 
                                               class="form-control @error('robots') is-invalid @enderror" 
                                               value="{{ old('robots', 'index, follow') }}" maxlength="100">
                                        <div class="form-text">e.g., index, follow or noindex, nofollow</div>
                                        @error('robots')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="is_active" id="is_active" 
                                                   class="form-check-input" value="1" 
                                                   {{ old('is_active', true) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_active">
                                                Active
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Create Page SEO
                                    </button>
                                    <a href="{{ route('admin.page-seo.index') }}" class="btn btn-secondary">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Suggestions Modal -->
    <div class="modal fade" id="pageSuggestionsModal" tabindex="-1" aria-labelledby="pageSuggestionsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pageSuggestionsModalLabel">Common Page Name Suggestions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Main Pages</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    home
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="selectPageName('home')">Select</button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    about
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="selectPageName('about')">Select</button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    contact
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="selectPageName('contact')">Select</button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    services
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="selectPageName('services')">Select</button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    treatments
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="selectPageName('treatments')">Select</button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Specialized Pages</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    ivf-treatment
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="selectPageName('ivf-treatment')">Select</button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    fertility-services
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="selectPageName('fertility-services')">Select</button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    doctors
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="selectPageName('doctors')">Select</button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    testimonials
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="selectPageName('testimonials')">Select</button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    faq
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="selectPageName('faq')">Select</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
// Character counter for title and description
document.getElementById('page_title').addEventListener('input', function() {
    const length = this.value.length;
    const feedback = this.parentNode.querySelector('.form-text');
    if (length > 60) {
        feedback.style.color = 'red';
    } else if (length > 50) {
        feedback.style.color = 'orange';
    } else {
        feedback.style.color = 'green';
    }
});

document.getElementById('meta_description').addEventListener('input', function() {
    const length = this.value.length;
    const feedback = this.parentNode.querySelector('.form-text');
    if (length > 160) {
        feedback.style.color = 'red';
    } else if (length > 150) {
        feedback.style.color = 'orange';
    } else {
        feedback.style.color = 'green';
    }
});

// Page name validation
document.getElementById('page_name').addEventListener('input', function() {
    validatePageName(this.value);
});

// Show custom page input
function showCustomPageInput() {
    document.getElementById('custom-page-input').style.display = 'block';
    document.getElementById('page_name').disabled = true;
}

// Hide custom page input
function hideCustomPageInput() {
    document.getElementById('custom-page-input').style.display = 'none';
    document.getElementById('page_name').disabled = false;
    document.getElementById('custom_page_name').value = '';
}

// Show page suggestions modal
function showPageSuggestions() {
    const modal = new bootstrap.Modal(document.getElementById('pageSuggestionsModal'));
    modal.show();
}

// Select page name from suggestions
function selectPageName(pageName) {
    document.getElementById('page_name').value = pageName;
    validatePageName(pageName);
    const modal = bootstrap.Modal.getInstance(document.getElementById('pageSuggestionsModal'));
    modal.hide();
}

// Validate page name
function validatePageName(pageName) {
    const validationDiv = document.getElementById('page-name-validation');
    const regex = /^[a-z0-9-]+$/;
    
    if (!pageName) {
        validationDiv.innerHTML = '';
        return;
    }
    
    if (!regex.test(pageName)) {
        validationDiv.innerHTML = '<div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> Page name can only contain lowercase letters, numbers, and hyphens</div>';
    } else if (pageName.length < 3) {
        validationDiv.innerHTML = '<div class="alert alert-warning"><i class="fas fa-info-circle"></i> Page name should be at least 3 characters long</div>';
    } else if (pageName.length > 50) {
        validationDiv.innerHTML = '<div class="alert alert-warning"><i class="fas fa-info-circle"></i> Page name should be less than 50 characters</div>';
    } else {
        validationDiv.innerHTML = '<div class="alert alert-success"><i class="fas fa-check"></i> Valid page name format</div>';
    }
}

// Form submission handling
document.querySelector('form').addEventListener('submit', function(e) {
    const pageName = document.getElementById('page_name').value;
    const customPageName = document.getElementById('custom_page_name').value;
    
    // If custom page name is provided, use it
    if (customPageName) {
        document.getElementById('page_name').value = customPageName;
    }
    
    // Validate page name before submission
    if (!pageName && !customPageName) {
        e.preventDefault();
        alert('Please enter a page name');
        return;
    }
    
    const finalPageName = customPageName || pageName;
    if (!/^[a-z0-9-]+$/.test(finalPageName)) {
        e.preventDefault();
        alert('Page name can only contain lowercase letters, numbers, and hyphens');
        return;
    }
});
</script>
@endpush 