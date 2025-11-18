<?php

namespace App\Traits;

use App\Services\ImageService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait HasImageUpload
{
    /**
     * Upload and compress image with enhanced compression
     *
     * @param UploadedFile $file
     * @param string $field
     * @param array $options
     * @return string|null
     */
    public function uploadImage(UploadedFile $file, string $field = 'image', array $options = [])
    {
        // Set default options based on field
        $defaultOptions = $this->getImageOptions($field);
        $options = array_merge($defaultOptions, $options);

        // Create separate validation options that don't include resizing limits
        $validationOptions = [
            'max_size' => 10240, // 10MB
            'allowed_types' => ['jpg', 'jpeg', 'png', 'gif', 'webp'],
            'min_width' => 1,  // Allow any minimum size
            'min_height' => 1, // Allow any minimum size
            'max_width' => 50000,  // Allow very large images
            'max_height' => 50000, // Allow very large images
        ];
        // Validate image with permissive size limits
        $validation = ImageService::validateImage($file, $validationOptions);
        if (!$validation['valid']) {
            $errorMessage = 'Image validation failed: ' . implode(', ', $validation['errors']);
            \Log::error($errorMessage, [
                'file_size' => $file->getSize(),
                'file_type' => $file->getClientOriginalExtension(),
                'validation_options' => $validationOptions
            ]);
            throw new \Exception($errorMessage);
        }
        // Delete old image if exists
        if ($this->$field) {
            $this->deleteImage($field);
        }
        // Upload and compress image
        $path = $this->getImagePath($field);
        $imagePath = ImageService::compressAndUpload($file, $path, $options);

        // Log compression stats
        try {
            $stats = ImageService::getCompressionStats($file, $imagePath);
            \Log::info('Image compression completed', [
                'field' => $field,
                'original_size' => $stats['original_size'],
                'compressed_size' => $stats['compressed_size'],
                'compression_ratio' => $stats['compression_ratio'] . '%',
                'saved_bytes' => $stats['saved_bytes'],
            ]);
        } catch (\Exception $e) {
            \Log::warning('Could not get compression stats', ['error' => $e->getMessage()]);
        }

        return $imagePath;
    }

    /**
     * Upload multiple images with batch compression
     *
     * @param array $files
     * @param string $field
     * @param array $options
     * @return array
     */
    public function uploadMultipleImages(array $files, string $field = 'images', array $options = [])
    {
        $uploadedImages = [];
        $compressionStats = [];

        foreach ($files as $index => $file) {
            if ($file instanceof UploadedFile) {
                try {
                    $imagePath = $this->uploadImage($file, $field, $options);
                    $uploadedImages[] = $imagePath;

                    // Get compression stats
                    $stats = ImageService::getCompressionStats($file, $imagePath);
                    $compressionStats[] = [
                        'file_index' => $index,
                        'stats' => $stats,
                    ];
                } catch (\Exception $e) {
                    \Log::error('Failed to upload image in batch', [
                        'file_index' => $index,
                        'error' => $e->getMessage(),
                    ]);
                    throw $e;
                }
            }
        }

        // Log batch compression summary
        if (!empty($compressionStats)) {
            $totalOriginal = array_sum(array_column($compressionStats, 'stats.original_size'));
            $totalCompressed = array_sum(array_column($compressionStats, 'stats.compressed_size'));
            $totalSaved = $totalOriginal - $totalCompressed;
            $avgCompression = $totalOriginal > 0 ? (($totalOriginal - $totalCompressed) / $totalOriginal) * 100 : 0;

            \Log::info('Batch image compression completed', [
                'total_files' => count($compressionStats),
                'total_original_size' => $totalOriginal,
                'total_compressed_size' => $totalCompressed,
                'total_saved_bytes' => $totalSaved,
                'average_compression' => round($avgCompression, 2) . '%',
            ]);
        }

        return $uploadedImages;
    }

    /**
     * Delete image
     *
     * @param string $field
     * @return bool
     */
    public function deleteImage(string $field = 'image')
    {
        if ($this->$field && Storage::disk('public')->exists($this->$field)) {
            return ImageService::deleteImage($this->$field);
        }

        return false;
    }

    /**
     * Get image URL
     *
     * @param string $field
     * @return string|null
     */
    public function getImageUrl(string $field = 'image')
    {
        if ($this->$field) {
            return Storage::disk('public')->url($this->$field);
        }

        return null;
    }

    /**
     * Get image path
     *
     * @param string $field
     * @return string
     */
    protected function getImagePath(string $field)
    {
        $modelName = strtolower(class_basename($this));
        return $modelName . 's';
    }

    /**
     * Get default image options with compression presets
     *
     * @param string $field
     * @return array
     */
    protected function getImageOptions(string $field)
    {
        $options = [
            'quality' => 80,
            'max_width' => 1200,
            'max_height' => 1200,
            'convert_to_webp' => true,
            'strip_metadata' => true,
        ];

        // Use compression presets based on field type
        switch ($field) {
            case 'avatar':
            case 'profile_image':
                $options['preset'] = 'avatar';
                break;
            case 'logo':
            case 'favicon':
            case 'site_logo':
            case 'site_favicon':
                $options['preset'] = 'logo';
                break;
            case 'banner':
            case 'hero_image':
                $options['preset'] = 'high';
                break;
            case 'thumbnail':
                $options['preset'] = 'thumbnail';
                break;
            case 'gallery':
                $options['preset'] = 'medium';
                break;
            case 'image':
                // For blog images, use medium preset
                $options['preset'] = 'medium';
                break;
            default:
                $options['preset'] = 'medium';
                break;
        }

        return $options;
    }

    /**
     * Create thumbnail with enhanced compression
     *
     * @param string $field
     * @param int $width
     * @param int $height
     * @return string|null
     */
    public function createThumbnail(string $field = 'image', int $width = 300, int $height = 300)
    {
        if (!$this->$field) {
            return null;
        }

        $thumbnailPath = str_replace(
            '.' . pathinfo($this->$field, PATHINFO_EXTENSION),
            '_thumb.' . pathinfo($this->$field, PATHINFO_EXTENSION),
            $this->$field
        );

        try {
            return ImageService::createThumbnail($this->$field, $thumbnailPath, $width, $height);
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Get thumbnail URL
     *
     * @param string $field
     * @return string|null
     */
    public function getThumbnailUrl(string $field = 'image')
    {
        $thumbnailPath = str_replace(
            '.' . pathinfo($this->$field, PATHINFO_EXTENSION),
            '_thumb.' . pathinfo($this->$field, PATHINFO_EXTENSION),
            $this->$field
        );

        if (Storage::disk('public')->exists($thumbnailPath)) {
            return Storage::disk('public')->url($thumbnailPath);
        }

        // Fallback to original image
        return $this->getImageUrl($field);
    }

    /**
     * Optimize image for web with smart compression
     *
     * @param UploadedFile $file
     * @param string $field
     * @param array $options
     * @return string|null
     */
    public function optimizeForWeb(UploadedFile $file, string $field = 'image', array $options = [])
    {
        // Delete old image if exists
        if ($this->$field) {
            $this->deleteImage($field);
        }

        $path = $this->getImagePath($field);
        $imagePath = ImageService::optimizeForWeb($file, $path, $options);

        return $imagePath;
    }

    /**
     * Get compression stats for an image
     *
     * @param string $field
     * @return array|null
     */
    public function getImageCompressionStats(string $field = 'image')
    {
        if (!$this->$field) {
            return null;
        }

        try {
            // This would require storing original file size in database
            // For now, return basic info
            $fileSize = Storage::disk('public')->size($this->$field);
            return [
                'compressed_size' => $fileSize,
                'file_path' => $this->$field,
                'file_url' => $this->getImageUrl($field),
            ];
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Upload image with specific compression preset
     *
     * @param UploadedFile $file
     * @param string $field
     * @param string $preset
     * @return string|null
     */
    public function uploadImageWithPreset(UploadedFile $file, string $field = 'image', string $preset = 'medium')
    {
        $presets = ImageService::getCompressionPresets();
        if (!isset($presets[$preset])) {
            throw new \Exception("Invalid compression preset: {$preset}");
        }
        $options = array_merge($this->getImageOptions($field), ['preset' => $preset]);
        return $this->uploadImage($file, $field, $options);
    }

    /**
     * Batch compress existing images in model's directory
     *
     * @param array $options
     * @return array
     */
    public function batchCompressExistingImages(array $options = [])
    {
        $path = $this->getImagePath('image');
        return ImageService::batchCompressImages($path, $options);
    }
}
