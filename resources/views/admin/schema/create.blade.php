@extends('admin-layouts.master')

@section('title', 'Create Schema')

@section('content')
    <style>
        /* Prevent sidebar toggle conflicts for schema management */
        .schema-menu-item {
            pointer-events: auto !important;
        }
        
        /* Ensure schema menu items don't interfere with sidebar toggle */
        a[href*="schema"] {
            z-index: 1000;
            position: relative;
        }
        
        /* Prevent hover effects from interfering with navigation */
        .vertical-menu[data-sidebar-size="sm"] a[href*="schema"]:hover {
            width: auto !important;
        }
    </style>
    
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Create New Schema</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.schema.index') }}">Schemas</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Schema Information</h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.schema.store') }}" method="POST">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Schema Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                               id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="type" class="form-label">Schema Type <span class="text-danger">*</span></label>
                                        <select class="form-select @error('type') is-invalid @enderror" id="type" name="type" required>
                                            <option value="">Select Schema Type</option>
                                            @foreach($schemaTypes as $key => $value)
                                                <option value="{{ $key }}" {{ old('type') == $key ? 'selected' : '' }}>
                                                    {{ $value }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="content_type" class="form-label">Content Type</label>
                                        <select class="form-select @error('content_type') is-invalid @enderror" id="content_type" name="content_type">
                                            <option value="">Global (All Pages)</option>
                                            @foreach($contentTypes as $key => $value)
                                                <option value="{{ $key }}" {{ old('content_type') == $key ? 'selected' : '' }}>
                                                    {{ $value }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('content_type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="content_id" class="form-label">Content ID</label>
                                        <input type="number" class="form-control @error('content_id') is-invalid @enderror" 
                                               id="content_id" name="content_id" value="{{ old('content_id') }}" 
                                               placeholder="Leave empty for global schema">
                                        @error('content_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                          id="description" name="description" rows="3" 
                                          placeholder="Optional description for this schema">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <label for="schema_data" class="form-label mb-0">Schema Data (JSON-LD) <span class="text-danger">*</span></label>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-sm btn-outline-primary" id="loadTemplate">
                                            <i class="fas fa-file-code"></i> Load Template
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" id="formatJson">
                                            <i class="fas fa-code"></i> Format JSON
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-info" id="validateJson">
                                            <i class="fas fa-check"></i> Validate
                                        </button>
                                    </div>
                                </div>
                                <textarea class="form-control @error('schema_data') is-invalid @enderror" 
                                          id="schema_data" name="schema_data" rows="15" required
                                          placeholder='{"@context": "https://schema.org", "@type": "Article", "headline": "Your Title"}'>{{ old('schema_data') }}</textarea>
                                @error('schema_data')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text">
                                    Enter valid JSON-LD structured data. Must include @context and @type fields.
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="hidden" name="is_active" value="0">
                                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1"
                                           {{ old('is_active', true) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">
                                        Active (Enable this schema)
                                    </label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('admin.schema.index') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Create Schema</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Template Modal -->
<div class="modal fade" id="templateModal" tabindex="-1" aria-labelledby="templateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="templateModalLabel">Select Schema Template</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    @foreach($templates as $key => $template)
                        <div class="col-md-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $template['name'] }}</h6>
                                    <p class="card-text small text-muted">
                                        {{ $template['schema']['@type'] }} schema template
                                    </p>
                                    <button type="button" class="btn btn-sm btn-primary load-template" 
                                            data-template='@json($template["schema"])' 
                                            data-type="{{ $template['schema']['@type'] }}">
                                        Use Template
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const schemaTextarea = document.getElementById('schema_data');
    const typeSelect = document.getElementById('type');
    const loadTemplateBtn = document.getElementById('loadTemplate');
    const formatJsonBtn = document.getElementById('formatJson');
    const validateJsonBtn = document.getElementById('validateJson');
    const templateModal = new bootstrap.Modal(document.getElementById('templateModal'));

    // Load template button
    loadTemplateBtn.addEventListener('click', function() {
        templateModal.show();
    });

    // Load template from modal
    document.querySelectorAll('.load-template').forEach(btn => {
        btn.addEventListener('click', function() {
            const template = JSON.parse(this.dataset.template);
            const type = this.dataset.type;
            
            schemaTextarea.value = JSON.stringify(template, null, 2);
            typeSelect.value = type;
            
            templateModal.hide();
            validateJson();
        });
    });

    // Format JSON button
    formatJsonBtn.addEventListener('click', function() {
        try {
            const json = JSON.parse(schemaTextarea.value);
            schemaTextarea.value = JSON.stringify(json, null, 2);
            schemaTextarea.classList.remove('is-invalid');
            schemaTextarea.classList.add('is-valid');
        } catch (e) {
            schemaTextarea.classList.remove('is-valid');
            schemaTextarea.classList.add('is-invalid');
            alert('Invalid JSON: ' + e.message);
        }
    });

    // Validate JSON button
    validateJsonBtn.addEventListener('click', validateJson);

    // Auto-validate on blur
    schemaTextarea.addEventListener('blur', validateJson);

    function validateJson() {
        const value = schemaTextarea.value.trim();
        if (!value) {
            schemaTextarea.classList.remove('is-valid', 'is-invalid');
            return;
        }

        try {
            const json = JSON.parse(value);
            
            // Check for required fields
            if (!json['@context'] || !json['@type']) {
                throw new Error('Schema must contain @context and @type fields');
            }

            schemaTextarea.classList.remove('is-invalid');
            schemaTextarea.classList.add('is-valid');
            
            // Auto-update type if it matches
            if (json['@type'] && typeSelect.value !== json['@type']) {
                typeSelect.value = json['@type'];
            }
            
        } catch (e) {
            schemaTextarea.classList.remove('is-valid');
            schemaTextarea.classList.add('is-invalid');
            console.error('JSON validation error:', e.message);
        }
    }

    // Form submission validation
    document.querySelector('form').addEventListener('submit', function(e) {
        const value = schemaTextarea.value.trim();
        if (!value) {
            e.preventDefault();
            alert('Please enter schema data.');
            return false;
        }

        try {
            const json = JSON.parse(value);
            if (!json['@context'] || !json['@type']) {
                e.preventDefault();
                alert('Schema must contain @context and @type fields.');
                return false;
            }
        } catch (e) {
            e.preventDefault();
            alert('Invalid JSON format: ' + e.message);
            return false;
        }
    });
});

// Ensure proper sidebar menu activation for schema management
$(document).ready(function() {
    // Wait for metisMenu to be fully initialized
    setTimeout(function() {
        // Find and activate the schema management menu
        var schemaMenu = $('a[href*="schema"]').closest('li').parent().parent();
        if (schemaMenu.length > 0) {
            schemaMenu.addClass('mm-active');
            schemaMenu.find('> a').addClass('mm-active');
            schemaMenu.find('> ul').addClass('mm-show');
            
            // Also activate the specific submenu item
            $('a[href*="schema"]').addClass('active').parent().addClass('mm-active');
        }
        
        // Add schema-menu-item class to schema links
        $('a[href*="schema"]').addClass('schema-menu-item');
        
        // Simple fix: ensure schema menu items work correctly
        $('a[href*="schema"]').on('click', function(e) {
            // Allow normal navigation
            console.log('Schema menu item clicked:', this.href);
        });
    }, 300);
});
</script>
@endsection 