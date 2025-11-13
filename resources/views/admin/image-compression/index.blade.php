@extends('admin-layouts.master')

@section('title', 'Image Compression Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Image Compression Dashboard</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Image Compression</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Storage Statistics -->
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <i class="fe fe-hard-drive text-primary" style="font-size: 2rem;"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Total Files</h6>
                            <h4 class="mb-0">{{ $storageStats['total_files'] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <i class="fe fe-image text-success" style="font-size: 2rem;"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Image Files</h6>
                            <h4 class="mb-0">{{ $storageStats['image_files'] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <i class="fe fe-database text-warning" style="font-size: 2rem;"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Total Size</h6>
                            <h4 class="mb-0">{{ $storageStats['total_size_formatted'] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <i class="fe fe-pie-chart text-info" style="font-size: 2rem;"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Image Size</h6>
                            <h4 class="mb-0">{{ $storageStats['image_size_formatted'] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Single Image Compression -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Single Image Compression</h5>
                </div>
                <div class="card-body">
                    <form id="singleCompressForm" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="image" class="form-label">Select Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                            <div class="form-text">Max size: 10MB. Supported formats: JPG, PNG, GIF, WebP</div>
                        </div>

                        <div class="mb-3">
                            <label for="preset" class="form-label">Compression Preset</label>
                            <select class="form-select" id="preset" name="preset" required>
                                @foreach($presets as $presetName => $presetOptions)
                                    <option value="{{ $presetName }}" data-quality="{{ $presetOptions['quality'] }}" 
                                            data-max-width="{{ $presetOptions['max_width'] }}" 
                                            data-max-height="{{ $presetOptions['max_height'] }}"
                                            data-webp="{{ $presetOptions['convert_to_webp'] ? '1' : '0' }}">
                                        {{ ucfirst($presetName) }} ({{ $presetOptions['quality'] }}% quality, {{ $presetOptions['max_width'] }}x{{ $presetOptions['max_height'] }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="convert_to_webp" name="convert_to_webp">
                                <label class="form-check-label" for="convert_to_webp">
                                    Convert to WebP (better compression)
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="quality" class="form-label">Custom Quality (1-100)</label>
                            <input type="number" class="form-control" id="quality" name="quality" min="1" max="100" placeholder="Leave empty to use preset">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="max_width" class="form-label">Max Width</label>
                                    <input type="number" class="form-control" id="max_width" name="max_width" min="1" max="5000" placeholder="Leave empty to use preset">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="max_height" class="form-label">Max Height</label>
                                    <input type="number" class="form-control" id="max_height" name="max_height" min="1" max="5000" placeholder="Leave empty to use preset">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fe fe-compress"></i> Compress Image
                        </button>
                    </form>

                    <div id="singleCompressResult" class="mt-3" style="display: none;">
                        <div class="alert alert-success">
                            <h6>Compression Result</h6>
                            <div id="compressionStats"></div>
                            <div id="compressedImage" class="mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Batch Compression -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Batch Image Compression</h5>
                </div>
                <div class="card-body">
                    <form id="batchCompressForm">
                        @csrf
                        <div class="mb-3">
                            <label for="directory" class="form-label">Directory Path</label>
                            <input type="text" class="form-control" id="directory" name="directory" placeholder="e.g., blogs, users, products" required>
                            <div class="form-text">Enter the directory path relative to storage/app/public/</div>
                        </div>

                        <div class="mb-3">
                            <label for="batch_preset" class="form-label">Compression Preset</label>
                            <select class="form-select" id="batch_preset" name="preset" required>
                                @foreach($presets as $presetName => $presetOptions)
                                    <option value="{{ $presetName }}">
                                        {{ ucfirst($presetName) }} ({{ $presetOptions['quality'] }}% quality, {{ $presetOptions['max_width'] }}x{{ $presetOptions['max_height'] }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="batch_convert_to_webp" name="convert_to_webp">
                                <label class="form-check-label" for="batch_convert_to_webp">
                                    Convert to WebP (better compression)
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-warning">
                            <i class="fe fe-download"></i> Batch Compress
                        </button>
                    </form>

                    <div id="batchCompressResult" class="mt-3" style="display: none;">
                        <div class="alert alert-info">
                            <h6>Batch Compression Result</h6>
                            <div id="batchStats"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Compression Test -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Compression Test Tool</h5>
                </div>
                <div class="card-body">
                    <form id="testCompressForm" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="test_image" class="form-label">Test Image</label>
                            <input type="file" class="form-control" id="test_image" name="image" accept="image/*" required>
                            <div class="form-text">This will test compression with all presets and show you the results</div>
                        </div>

                        <button type="submit" class="btn btn-info">
                            <i class="fe fe-play"></i> Test All Presets
                        </button>
                    </form>

                    <div id="testCompressResult" class="mt-3" style="display: none;">
                        <h6>Test Results</h6>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Preset</th>
                                        <th>Quality</th>
                                        <th>Dimensions</th>
                                        <th>Original Size</th>
                                        <th>Compressed Size</th>
                                        <th>Compression Ratio</th>
                                        <th>WebP</th>
                                    </tr>
                                </thead>
                                <tbody id="testResultsBody">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
$(document).ready(function() {
    // Update custom fields when preset changes
    $('#preset').change(function() {
        const selectedOption = $(this).find('option:selected');
        const quality = selectedOption.data('quality');
        const maxWidth = selectedOption.data('max-width');
        const maxHeight = selectedOption.data('max-height');
        const webp = selectedOption.data('webp');

        $('#quality').val(quality);
        $('#max_width').val(maxWidth);
        $('#max_height').val(maxHeight);
        $('#convert_to_webp').prop('checked', webp == 1);
    });

    // Single image compression
    $('#singleCompressForm').submit(function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const submitBtn = $(this).find('button[type="submit"]');
        const originalText = submitBtn.html();
        
        submitBtn.html('<i class="fe fe-loader fa-spin"></i> Compressing...').prop('disabled', true);
        
        $.ajax({
            url: '{{ route("admin.image-compression.compress") }}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    const stats = response.data.stats;
                    const statsHtml = `
                        <p><strong>Original Size:</strong> ${formatBytes(stats.original_size)}</p>
                        <p><strong>Compressed Size:</strong> ${formatBytes(stats.compressed_size)}</p>
                        <p><strong>Compression Ratio:</strong> ${stats.compression_ratio}%</p>
                        <p><strong>Space Saved:</strong> ${formatBytes(stats.saved_bytes)}</p>
                    `;
                    
                    $('#compressionStats').html(statsHtml);
                    $('#compressedImage').html(`<img src="${response.data.compressed_url}" class="img-fluid" style="max-height: 200px;">`);
                    $('#singleCompressResult').show();
                    
                    // Show success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message,
                    });
                }
            },
            error: function(xhr) {
                const response = xhr.responseJSON;
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: response ? response.message : 'An error occurred during compression',
                });
            },
            complete: function() {
                submitBtn.html(originalText).prop('disabled', false);
            }
        });
    });

    // Batch compression
    $('#batchCompressForm').submit(function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const submitBtn = $(this).find('button[type="submit"]');
        const originalText = submitBtn.html();
        
        submitBtn.html('<i class="fe fe-loader fa-spin"></i> Processing...').prop('disabled', true);
        
        $.ajax({
            url: '{{ route("admin.image-compression.batch") }}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    const summary = response.data.summary;
                    const statsHtml = `
                        <p><strong>Total Files:</strong> ${summary.total_files}</p>
                        <p><strong>Success:</strong> ${summary.success_count}</p>
                        <p><strong>Failed:</strong> ${summary.failed_count}</p>
                        <p><strong>Total Original Size:</strong> ${formatBytes(summary.total_original_size)}</p>
                        <p><strong>Total Compressed Size:</strong> ${formatBytes(summary.total_compressed_size)}</p>
                        <p><strong>Total Space Saved:</strong> ${formatBytes(summary.total_saved_bytes)}</p>
                        <p><strong>Average Compression:</strong> ${summary.compression_ratio}%</p>
                    `;
                    
                    $('#batchStats').html(statsHtml);
                    $('#batchCompressResult').show();
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message,
                    });
                }
            },
            error: function(xhr) {
                const response = xhr.responseJSON;
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: response ? response.message : 'An error occurred during batch compression',
                });
            },
            complete: function() {
                submitBtn.html(originalText).prop('disabled', false);
            }
        });
    });

    // Test compression
    $('#testCompressForm').submit(function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const submitBtn = $(this).find('button[type="submit"]');
        const originalText = submitBtn.html();
        
        submitBtn.html('<i class="fe fe-loader fa-spin"></i> Testing...').prop('disabled', true);
        
        $.ajax({
            url: '{{ route("admin.image-compression.test") }}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    let tableBody = '';
                    
                    Object.keys(response.data).forEach(preset => {
                        const result = response.data[preset];
                        if (result.success) {
                            const stats = result.stats;
                            const options = result.options;
                            
                            tableBody += `
                                <tr>
                                    <td><strong>${preset.charAt(0).toUpperCase() + preset.slice(1)}</strong></td>
                                    <td>${options.quality}%</td>
                                    <td>${options.max_width}x${options.max_height}</td>
                                    <td>${formatBytes(stats.original_size)}</td>
                                    <td>${formatBytes(stats.compressed_size)}</td>
                                    <td><span class="badge bg-success">${stats.compression_ratio}%</span></td>
                                    <td>${options.convert_to_webp ? '<span class="badge bg-info">Yes</span>' : '<span class="badge bg-secondary">No</span>'}</td>
                                </tr>
                            `;
                        } else {
                            tableBody += `
                                <tr>
                                    <td><strong>${preset.charAt(0).toUpperCase() + preset.slice(1)}</strong></td>
                                    <td colspan="6"><span class="text-danger">${result.error}</span></td>
                                </tr>
                            `;
                        }
                    });
                    
                    $('#testResultsBody').html(tableBody);
                    $('#testCompressResult').show();
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Test Completed!',
                        text: 'Compression test completed successfully. Check the results below.',
                    });
                }
            },
            error: function(xhr) {
                const response = xhr.responseJSON;
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: response ? response.message : 'An error occurred during testing',
                });
            },
            complete: function() {
                submitBtn.html(originalText).prop('disabled', false);
            }
        });
    });

    // Format bytes function
    function formatBytes(bytes, decimals = 2) {
        if (bytes === 0) return '0 Bytes';
        
        const k = 1024;
        const dm = decimals < 0 ? 0 : decimals;
        const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
        
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        
        return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
    }
});
</script>
@endpush 