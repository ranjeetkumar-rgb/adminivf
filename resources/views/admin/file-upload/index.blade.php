@extends('admin-layouts.master')

@section('title', 'File Upload Management')

@push('styles')
<style>
    .download-btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }
    
    .download-btn .fa-spinner {
        animation: spin 1s linear infinite;
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
@endpush

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">File Upload Management</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">File Upload</li>
                        </ol>
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

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Upload Form -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="card border-primary">
                                    <div class="card-header bg-primary text-white">
                                        <h5 class="mb-0" style="color: #fff !important"><i class="fas fa-upload" ></i> Upload File to Root Directory</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('admin.file-upload.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <label for="file" class="form-label">Select File</label>
                                                        <input type="file" class="form-control @error('file') is-invalid @enderror" 
                                                               id="file" name="file" accept="*/*" required>
                                                        @error('file')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                        <div class="form-text">
                                                            <strong>Note:</strong> Files will be uploaded to the root directory of your project. 
                                                            Maximum file size: 10MB. Supported formats: All file types.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">&nbsp;</label>
                                                        <button type="submit" class="btn btn-primary w-100">
                                                            <i class="fas fa-upload"></i> Upload File
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- File Information -->
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <h6 class="alert-heading"><i class="fas fa-info-circle"></i> File Upload Guidelines</h6>
                            <p class="mb-2">This module allows you to upload files directly to the root directory of your project.</p>
                            <ul class="mb-0">
                                <li><strong>Location:</strong> Files are stored in the project root directory</li>
                                <li><strong>Size Limit:</strong> Maximum 10MB per file</li>
                                <li><strong>Security:</strong> Critical system files are protected from deletion</li>
                                <li><strong>Access:</strong> Uploaded files can be downloaded or deleted as needed</li>
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <!-- Files List -->
                        <div class="table-responsive">
                            <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>File Name</th>
                                        <th>Size</th>
                                        <th>Type</th>
                                        <th>Last Modified</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($uploadedFiles as $file)
                                    <tr>
                                        <td>
                                            <strong>{{ $file['name'] }}</strong>
                                            @if($file['name'] === 'llms.txt')
                                                <span class="badge bg-success ms-2">LLMS File</span>
                                            @endif
                                        </td>
                                        <td>{{ $file['size'] }}</td>
                                        <td>
                                            <span class="badge bg-secondary">{{ strtoupper($file['extension']) }}</span>
                                        </td>
                                        <td>{{ $file['modified'] }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" 
                                                        class="btn btn-sm btn-outline-primary download-btn" 
                                                        title="Download"
                                                        onclick="downloadFile('{{ $file['name'] }}', this)">
                                                    <i class="fas fa-download"></i>
                                                </button>
                                                
                                                <button type="button" 
                                                        class="btn btn-sm btn-outline-danger" 
                                                        title="Delete"
                                                        onclick="confirmDelete('{{ $file['name'] }}')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            <div class="text-muted">
                                                <i class="fas fa-folder-open fa-3x mb-3"></i>
                                                <p>No files uploaded yet.</p>
                                                <p>Upload your first file using the form above.</p>
                                            </div>
                                        </td>
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

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete the file "<span id="fileNameToDelete"></span>"?
                    <br><br>
                    <strong>Warning:</strong> This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form id="deleteForm" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete File</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    function confirmDelete(fileName) {
        document.getElementById('fileNameToDelete').textContent = fileName;
        document.getElementById('deleteForm').action = "{{ route('admin.file-upload.destroy', '') }}/" + fileName;
        new bootstrap.Modal(document.getElementById('deleteModal')).show();
    }

    function downloadFile(fileName, button) {
        // Show loading state
        const originalContent = button.innerHTML;
        button.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
        button.disabled = true;
        
        // Create a temporary link element
        const link = document.createElement('a');
        link.href = "{{ route('admin.file-upload.download', '') }}/" + fileName;
        link.download = fileName;
        link.style.display = 'none';
        
        // Add to DOM and trigger download
        document.body.appendChild(link);
        
        // Handle download start
        link.addEventListener('click', function() {
            // Reset button state after download starts
            setTimeout(() => {
                button.innerHTML = originalContent;
                button.disabled = false;
            }, 500);
        });
        
        // Trigger download
        link.click();
        
        // Remove the temporary link
        setTimeout(() => {
            if (document.body.contains(link)) {
                document.body.removeChild(link);
            }
        }, 100);
        
        // Fallback reset in case the download doesn't start
        setTimeout(() => {
            button.innerHTML = originalContent;
            button.disabled = false;
        }, 2000);
    }

    // File input change handler
    document.getElementById('file').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            // Show file info
            const fileInfo = document.createElement('div');
            fileInfo.className = 'alert alert-info mt-2';
            fileInfo.innerHTML = `
                <strong>Selected File:</strong> ${file.name}<br>
                <strong>Size:</strong> ${(file.size / 1024 / 1024).toFixed(2)} MB<br>
                <strong>Type:</strong> ${file.type || 'Unknown'}
            `;
            
            // Remove previous file info if exists
            const existingInfo = this.parentNode.querySelector('.alert');
            if (existingInfo) {
                existingInfo.remove();
            }
            
            this.parentNode.appendChild(fileInfo);
        }
    });
</script>
@endpush 