@extends('admin-layouts.master')

@section('title', 'Schema Management')

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
                    <h4 class="mb-sm-0 font-size-18">Schema Management</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Schemas</li>
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
                            <h4 class="card-title mb-0">Schema List</h4>
                            <a href="{{ route('admin.schema.create') }}" class="btn btn-primary text-white">
                                <i class="fas fa-plus"></i> Add New Schema
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Content Type</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($schemas as $schema)
                                        <tr>
                                            <td>{{ $schema->id }}</td>
                                            <td>
                                                <strong>{{ $schema->name }}</strong>
                                                @if($schema->description)
                                                    <br><small class="text-muted">{{ Str::limit($schema->description, 50) }}</small>
                                                @endif
                                            </td>
                                            <td>
                                                <span class="badge bg-info">{{ $schema->type }}</span>
                                            </td>
                                            <td>
                                                @if($schema->content_type)
                                                    <span class="badge bg-secondary">{{ ucfirst($schema->content_type) }}</span>
                                                    @if($schema->content_id)
                                                        <br><small class="text-muted">ID: {{ $schema->content_id }}</small>
                                                    @endif
                                                @else
                                                    <span class="badge bg-warning">Global</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($schema->is_active)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>{{ $schema->created_at->format('M d, Y') }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.schema.show', $schema->id) }}" 
                                                       class="btn btn-sm btn-info" title="View">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.schema.edit', $schema->id) }}" 
                                                       class="btn btn-sm btn-warning" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.schema.toggle-status', $schema->id) }}" 
                                                          method="POST" style="display: inline;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-{{ $schema->is_active ? 'secondary' : 'success' }}" 
                                                                title="{{ $schema->is_active ? 'Deactivate' : 'Activate' }}">
                                                            <i class="fas fa-{{ $schema->is_active ? 'pause' : 'play' }}"></i>
                                                        </button>
                                                    </form>
                                                    <form action="{{ route('admin.schema.destroy', $schema->id) }}" 
                                                          method="POST" style="display: inline;" 
                                                          onsubmit="return confirm('Are you sure you want to delete this schema?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No schemas found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        @if($schemas->hasPages())
                            <div class="d-flex justify-content-center">
                                {{ $schemas->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    // Auto-hide alerts after 5 seconds
    setTimeout(function() {
        $('.alert').fadeOut('slow');
    }, 5000);
    
    // Ensure proper sidebar menu activation for schema management
    // $(document).ready(function() {
    //     // Wait for metisMenu to be fully initialized
    //     setTimeout(function() {
    //         // Find and activate the schema management menu
    //         var schemaMenu = $('a[href*="schema"]').closest('li').parent().parent();
    //         if (schemaMenu.length > 0) {
    //             schemaMenu.addClass('mm-active');
    //             schemaMenu.find('> a').addClass('mm-active');
    //             schemaMenu.find('> ul').addClass('mm-show');
                
    //             // Also activate the specific submenu item
    //             $('a[href*="schema"]').addClass('active').parent().addClass('mm-active');
    //         }
            
    //         // Add schema-menu-item class to schema links
    //         $('a[href*="schema"]').addClass('schema-menu-item');
            
    //         // Simple fix: ensure schema menu items work correctly
    //         $('a[href*="schema"]').on('click', function(e) {
    //             // Allow normal navigation
    //             console.log('Schema menu item clicked:', this.href);
    //         });
    //     }, 300);
    // });
</script>
@endsection 