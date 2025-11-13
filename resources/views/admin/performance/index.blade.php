@extends('admin-layouts.master')    
@section('title')
   {{'Performance Monitoring'}}
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
    <!-- SweetAlert2 Css -->
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Performance Monitoring</h4>
            <div class="page-title-right">
                <button class="btn btn-primary" onclick="clearCache()">
                    <i class="fas fa-broom"></i> Clear Cache
                </button>
                <button class="btn btn-success" onclick="optimizeApp()">
                    <i class="fas fa-rocket"></i> Optimize App
                </button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Database Metrics -->
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-muted fw-medium">Database</p>
                        <h4 class="mb-0">{{ $metrics['database']['total_tables'] }} Tables</h4>
                        <p class="text-muted mt-2 mb-0">
                            <span class="text-success me-2">
                                <i class="mdi mdi-arrow-up-bold me-1"></i>
                            </span>
                            {{ $metrics['database']['total_size'] }} MB
                        </p>
                    </div>
                    <div class="flex-shrink-0 align-self-center">
                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                            <span class="avatar-title">
                                <i class="bx bx-data font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cache Metrics -->
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-muted fw-medium">Cache</p>
                        <h4 class="mb-0">{{ $metrics['cache']['cache_hits'] }} Hits</h4>
                        <p class="text-muted mt-2 mb-0">
                            <span class="text-info me-2">
                                <i class="mdi mdi-arrow-up-bold me-1"></i>
                            </span>
                            {{ $metrics['cache']['cache_size'] }} MB
                        </p>
                    </div>
                    <div class="flex-shrink-0 align-self-center">
                        <div class="mini-stat-icon avatar-sm rounded-circle bg-success align-self-center">
                            <span class="avatar-title">
                                <i class="bx bx-memory-card font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- System Metrics -->
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-muted fw-medium">System</p>
                        <h4 class="mb-0">PHP {{ $metrics['system']['php_version'] }}</h4>
                        <p class="text-muted mt-2 mb-0">
                            <span class="text-warning me-2">
                                <i class="mdi mdi-arrow-up-bold me-1"></i>
                            </span>
                            Laravel {{ $metrics['system']['laravel_version'] }}
                        </p>
                    </div>
                    <div class="flex-shrink-0 align-self-center">
                        <div class="mini-stat-icon avatar-sm rounded-circle bg-warning align-self-center">
                            <span class="avatar-title">
                                <i class="bx bx-server font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Storage Metrics -->
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-muted fw-medium">Storage</p>
                        <h4 class="mb-0">{{ $metrics['storage']['storage_size'] }} MB</h4>
                        <p class="text-muted mt-2 mb-0">
                            <span class="text-danger me-2">
                                <i class="mdi mdi-arrow-up-bold me-1"></i>
                            </span>
                            {{ $metrics['storage']['log_size'] }} MB Logs
                        </p>
                    </div>
                    <div class="flex-shrink-0 align-self-center">
                        <div class="mini-stat-icon avatar-sm rounded-circle bg-danger align-self-center">
                            <span class="avatar-title">
                                <i class="bx bx-hdd font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">System Information</h4>
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <tbody>
                            <tr>
                                <th>PHP Version</th>
                                <td>{{ $metrics['system']['php_version'] }}</td>
                                <th>Laravel Version</th>
                                <td>{{ $metrics['system']['laravel_version'] }}</td>
                            </tr>
                            <tr>
                                <th>Memory Limit</th>
                                <td>{{ $metrics['system']['memory_limit'] }}</td>
                                <th>Max Execution Time</th>
                                <td>{{ $metrics['system']['max_execution_time'] }} seconds</td>
                            </tr>
                            <tr>
                                <th>Upload Max Filesize</th>
                                <td>{{ $metrics['system']['upload_max_filesize'] }}</td>
                                <th>Database Size</th>
                                <td>{{ $metrics['database']['total_size'] }} MB</td>
                            </tr>
                            <tr>
                                <th>Cache Size</th>
                                <td>{{ $metrics['cache']['cache_size'] }} MB</td>
                                <th>Storage Size</th>
                                <td>{{ $metrics['storage']['storage_size'] }} MB</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
function clearCache() {
    swalConfirm('Are you sure you want to clear all caches?', function() {
        // Show page loader with custom message
        if (window.showPageLoader) {
            window.showPageLoader('Clearing cache...');
        }
        
        $.ajax({
            url: '{{ route("admin.performance.clear-cache") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response && response.success) {
                    swalSuccess(response.message || 'Cache cleared successfully!').then(() => {
                        location.reload();
                    });
                } else {
                    swalError(response?.message || 'Failed to clear cache');
                }
            },
            error: function(xhr) {
                console.error('Cache clear error:', xhr);
                swalError('Failed to clear cache. Please try again.');
            }
        });
    });
}

function optimizeApp() {
    swalConfirm('Are you sure you want to optimize the application?', function() {
        // Show page loader with custom message
        if (window.showPageLoader) {
            window.showPageLoader('Optimizing application...');
        }
        
        $.ajax({
            url: '{{ route("admin.performance.optimize") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response && response.success) {
                    swalSuccess(response.message || 'Application optimized successfully!').then(() => {
                        location.reload();
                    });
                } else {
                    swalError(response?.message || 'Failed to optimize application');
                }
            },
            error: function(xhr) {
                console.error('Optimize error:', xhr);
                swalError('Failed to optimize application. Please try again.');
            }
        });
    });
}
</script>
@endsection 