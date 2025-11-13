@extends('admin-layouts.master')

@section('title', 'Page SEO Management')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Page SEO Management</h4>
                    <div class="page-title-right">
                        <a href="{{ route('admin.page-seo.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add New Page SEO
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
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Page Name Information -->
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <h6 class="alert-heading"><i class="fas fa-info-circle"></i> Page Name Guidelines</h6>
                            <p class="mb-2">Page names are crucial for both SEO and schema management. They help identify which page the SEO settings and structured data belong to.</p>
                            <ul class="mb-0">
                                <li><strong>Format:</strong> Use lowercase letters, numbers, and hyphens only (e.g., "ivf-treatment", "fertility-services")</li>
                                <li><strong>Uniqueness:</strong> Each page name must be unique across your entire website</li>
                                <li><strong>SEO Impact:</strong> Page names are used to match SEO settings with specific pages</li>
                                <li><strong>Schema Impact:</strong> Page names determine which structured data is applied to each page</li>
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Page Name</th>
                                        <th>Title</th>
                                        <th>Focus Keyword</th>
                                        <th>SEO Status</th>
                                        <th>Schema Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($pageSeo as $seo)
                                    <tr>
                                        <td>
                                            <strong>{{ ucfirst($seo->page_name) }}</strong>
                                            @if($seo->canonical_url)
                                                <br><small class="text-muted">{{ $seo->canonical_url }}</small>
                                            @endif
                                        </td>
                                        <td>
                                            {{ Str::limit($seo->page_title, 50) }}
                                            <br><small class="text-muted">{{ Str::limit($seo->meta_description, 80) }}</small>
                                        </td>
                                        <td>
                                            @if($seo->focus_keyword)
                                                <span class="badge bg-info">{{ $seo->focus_keyword }}</span>
                                            @else
                                                <span class="text-muted">Not set</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($seo->is_active)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($seo->schema_data)
                                                <span class="badge bg-info">Configured</span>
                                            @else
                                                <span class="badge bg-warning">Default</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.page-seo.edit', $seo->id) }}" 
                                                   class="btn btn-sm btn-outline-primary" 
                                                   title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                
                                                <button type="button" 
                                                        class="btn btn-sm btn-outline-info" 
                                                        onclick="previewSeo('{{ $seo->page_name }}')"
                                                        data-page-name="{{ $seo->page_name }}"
                                                        title="Preview SEO">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                
                                                <form action="{{ route('admin.page-seo.toggle-status', $seo->id) }}" 
                                                      method="POST" 
                                                      style="display: inline;">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" 
                                                            class="btn btn-sm btn-outline-warning" 
                                                            title="{{ $seo->is_active ? 'Deactivate' : 'Activate' }}">
                                                        <i class="fas fa-{{ $seo->is_active ? 'pause' : 'play' }}"></i>
                                                    </button>
                                                </form>
                                                
                                                <form action="{{ route('admin.page-seo.destroy', $seo->id) }}" 
                                                      method="POST" 
                                                      style="display: inline;"
                                                      onsubmit="return confirm('Are you sure you want to delete this page SEO?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                            class="btn btn-sm btn-outline-danger" 
                                                            title="Delete">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No page SEO settings found.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Preview Modal -->
<div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="previewModalLabel">SEO Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="previewContent">
                    <div class="text-center">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
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
// Simple and reliable modal management
let previewModal = null;

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    // Initialize modal
    const modalElement = document.getElementById('previewModal');
    if (modalElement) {
        previewModal = new bootstrap.Modal(modalElement, {
            backdrop: true,
            keyboard: true,
            focus: true
        });
        
        // Handle modal close events
        modalElement.addEventListener('hidden.bs.modal', function() {
            console.log('Modal closed');
            resetModalContent();
        });
        
        // Handle modal show events
        modalElement.addEventListener('shown.bs.modal', function() {
            console.log('Modal shown');
        });
    }
});

// Global preview function
function previewSeo(pageName) {
    console.log('Opening preview for:', pageName);
    
    if (!previewModal) {
        console.error('Modal not initialized');
        alert('Modal not available. Please refresh the page.');
        return;
    }
    
    // Show loading state
    showLoadingState();
    
    // Show modal
    previewModal.show();
    
    // Fetch data
    fetchPreviewData(pageName);
}

// Show loading state
function showLoadingState() {
    const content = document.getElementById('previewContent');
    if (content) {
        content.innerHTML = `
            <div class="text-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="mt-2">Loading SEO preview...</p>
            </div>
        `;
    }
}

// Fetch preview data
function fetchPreviewData(pageName) {
    fetch(`/admin/page-seo/${pageName}/preview`)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            if (data.error) {
                showError(data.error);
            } else {
                showPreviewData(data);
            }
        })
        .catch(error => {
            console.error('Error loading preview:', error);
            showError(`Error loading preview: ${error.message}`);
        });
}

// Show preview data
function showPreviewData(data) {
    const content = document.getElementById('previewContent');
    if (!content) return;
    
    const seoData = data.seo_data;
    const structuredData = data.structured_data;
    
    content.innerHTML = `
        <div class="row">
            <div class="col-md-6">
                <h6 class="text-primary">SEO Data</h6>
                <table class="table table-sm table-bordered">
                    <tr><td><strong>Title:</strong></td><td>${seoData.title || 'Not set'}</td></tr>
                    <tr><td><strong>Description:</strong></td><td>${seoData.description || 'Not set'}</td></tr>
                    <tr><td><strong>Keywords:</strong></td><td>${seoData.keywords || 'Not set'}</td></tr>
                    <tr><td><strong>Focus Keyword:</strong></td><td>${seoData.focus_keyword || 'Not set'}</td></tr>
                    <tr><td><strong>Canonical:</strong></td><td>${seoData.canonical || 'Not set'}</td></tr>
                    <tr><td><strong>Robots:</strong></td><td>${seoData.robots || 'Not set'}</td></tr>
                </table>
            </div>
            <div class="col-md-6">
                <h6 class="text-primary">Open Graph</h6>
                <table class="table table-sm table-bordered">
                    <tr><td><strong>Type:</strong></td><td>${seoData.og_type || 'Not set'}</td></tr>
                    <tr><td><strong>Title:</strong></td><td>${seoData.og_title || 'Not set'}</td></tr>
                    <tr><td><strong>Description:</strong></td><td>${seoData.og_description || 'Not set'}</td></tr>
                    <tr><td><strong>Image:</strong></td><td>${seoData.og_image || 'Not set'}</td></tr>
                </table>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <h6 class="text-primary">Structured Data</h6>
                <pre class="bg-light p-3 rounded border"><code>${JSON.stringify(structuredData, null, 2)}</code></pre>
            </div>
        </div>
    `;
}

// Show error
function showError(message) {
    const content = document.getElementById('previewContent');
    if (content) {
        content.innerHTML = `
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-triangle"></i>
                ${message}
            </div>
        `;
    }
}

// Reset modal content
function resetModalContent() {
    const content = document.getElementById('previewContent');
    if (content) {
        content.innerHTML = `
            <div class="text-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        `;
    }
}

// Close modal function
function closePreviewModal() {
    console.log('Closing modal');
    if (previewModal) {
        previewModal.hide();
    }
}

// Add event listeners for close buttons
document.addEventListener('click', function(e) {
    if (e.target.matches('[data-bs-dismiss="modal"]') || 
        e.target.closest('[data-bs-dismiss="modal"]')) {
        console.log('Close button clicked');
        closePreviewModal();
    }
});

// ESC key support
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && previewModal) {
        console.log('ESC key pressed');
        closePreviewModal();
    }
});
</script>
@endpush 