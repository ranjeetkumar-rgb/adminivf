@extends('admin-layouts.master')

@section('title', 'View Schema')

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
                <h4 class="mb-sm-0 font-size-18">Schema Details</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.schema.index') }}">Schemas</a></li>
                        <li class="breadcrumb-item active">View</li>
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
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">{{ $schema->name }}</h4>
                        <div class="btn-group" role="group">
                            <a href="{{ route('admin.schema.edit', $schema->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="{{ route('admin.schema.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="150">Schema Name:</th>
                                    <td>{{ $schema->name }}</td>
                                </tr>
                                <tr>
                                    <th>Schema Type:</th>
                                    <td><span class="badge bg-info">{{ $schema->type }}</span></td>
                                </tr>
                                <tr>
                                    <th>Content Type:</th>
                                    <td>
                                        @if($schema->content_type)
                                            <span class="badge bg-secondary">{{ ucfirst($schema->content_type) }}</span>
                                        @else
                                            <span class="badge bg-warning">Global</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Content ID:</th>
                                    <td>
                                        @if($schema->content_id)
                                            {{ $schema->content_id }}
                                        @else
                                            <span class="text-muted">N/A</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        @if($schema->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created:</th>
                                    <td>{{ $schema->created_at->format('M d, Y H:i:s') }}</td>
                                </tr>
                                <tr>
                                    <th>Updated:</th>
                                    <td>{{ $schema->updated_at->format('M d, Y H:i:s') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            @if($schema->description)
                                <div class="mb-3">
                                    <h6>Description:</h6>
                                    <p class="text-muted">{{ $schema->description }}</p>
                                </div>
                            @endif
                            
                            <div class="mb-3">
                                <h6>Schema Validation:</h6>
                                @if($schema->validateSchemaData())
                                    <span class="badge bg-success">Valid Schema</span>
                                @else
                                    <span class="badge bg-danger">Invalid Schema</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <h6>Schema Preview:</h6>
                                <div class="bg-light p-3 rounded" style="max-height: 200px; overflow-y: auto;">
                                    <pre class="mb-0 small">{{ $schema->getFormattedSchema() }}</pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <h5>Complete Schema Data (JSON-LD)</h5>
                            <div class="bg-dark text-light p-3 rounded" style="max-height: 400px; overflow-y: auto;">
                                <pre class="mb-0 text-light"><code>{{ $schema->getFormattedSchema() }}</code></pre>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <h5>Schema Information</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <h6 class="card-title">Schema Type</h6>
                                            <p class="card-text">{{ $schema->type }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <h6 class="card-title">Content Scope</h6>
                                            <p class="card-text">
                                                @if($schema->content_type)
                                                    {{ ucfirst($schema->content_type) }}
                                                    @if($schema->content_id)
                                                        (ID: {{ $schema->content_id }})
                                                    @endif
                                                @else
                                                    Global
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <h6 class="card-title">Status</h6>
                                            <p class="card-text">
                                                @if($schema->is_active)
                                                    <span class="text-success">Active</span>
                                                @else
                                                    <span class="text-danger">Inactive</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    // Syntax highlighting for JSON (if you have a syntax highlighter library)
    // For now, we'll just make the JSON more readable
    document.addEventListener('DOMContentLoaded', function() {
        // Add copy functionality
        const jsonBlocks = document.querySelectorAll('pre code');
        jsonBlocks.forEach(block => {
            block.style.cursor = 'pointer';
            block.title = 'Click to copy';
            
            block.addEventListener('click', function() {
                const text = this.textContent;
                navigator.clipboard.writeText(text).then(function() {
                    // Show a temporary tooltip
                    const tooltip = document.createElement('div');
                    tooltip.textContent = 'Copied!';
                    tooltip.style.cssText = `
                        position: fixed;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        background: #333;
                        color: white;
                        padding: 10px 20px;
                        border-radius: 5px;
                        z-index: 9999;
                        pointer-events: none;
                    `;
                    document.body.appendChild(tooltip);
                    
                    setTimeout(() => {
                        document.body.removeChild(tooltip);
                    }, 1000);
                });
            });
        });
    });
    
    // Simple and reliable sidebar activation
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