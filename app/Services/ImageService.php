<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

class ImageService
{
    /**
     * Default compression quality
     */
    const DEFAULT_QUALITY = 80;

    /**
     * Default max width
     */
    const DEFAULT_MAX_WIDTH = 1200;

    /**
     * Default max height
     */
    const DEFAULT_MAX_HEIGHT = 1200;

    /**
     * Compression presets
     */
    const COMPRESSION_PRESETS = [
        'high' => [
            'quality' => 90,
            'max_width' => 1920,
            'max_height' => 1080,
            'convert_to_webp' => false,
        ],
        'medium' => [
            'quality' => 80,
            'max_width' => 1200,
            'max_height' => 800,
            'convert_to_webp' => true,
        ],
        'small' => [
            'quality' => 70,
            'max_width' => 600,
            'max_height' => 400,
            'convert_to_webp' => true,
        ],
        'low' => [
            'quality' => 60,
            'max_width' => 800,
            'max_height' => 600,
            'convert_to_webp' => true,
        ],
        'thumbnail' => [
            'quality' => 75,
            'max_width' => 300,
            'max_height' => 300,
            'convert_to_webp' => true,
        ],
        'avatar' => [
            'quality' => 85,
            'max_width' => 400,
            'max_height' => 400,
            'convert_to_webp' => false,
        ],
        'logo' => [
            'quality' => 95,
            'max_width' => 300,
            'max_height' => 300,
            'convert_to_webp' => false,
        ],
    ];

    /**
     * Get image manager instance
     */
    private static function getImageManager()
    {
        return new ImageManager(new Driver());
    }

    /**
     * Compress and upload image with enhanced compression
     *
     * @param UploadedFile $file
     * @param string $path
     * @param array $options
     * @return string
     */
    public static function compressAndUpload(UploadedFile $file, string $path, array $options = [])
    {
        $options = array_merge([
            'quality' => self::DEFAULT_QUALITY,
            'max_width' => self::DEFAULT_MAX_WIDTH,
            'max_height' => self::DEFAULT_MAX_HEIGHT,
            'disk' => 'public',
            'filename' => null,
            'watermark' => false,
            'watermark_path' => null,
            'watermark_position' => 'bottom-right',
            'watermark_opacity' => 0.5,
            'convert_to_webp' => false,
            'preset' => 'medium',
            'progressive' => true,
            'strip_metadata' => true,
        ], $options);

        // Apply preset if specified
        if (isset(self::COMPRESSION_PRESETS[$options['preset']])) {
            $preset = self::COMPRESSION_PRESETS[$options['preset']];
            $options = array_merge($options, $preset);
        }

        // Generate filename if not provided
        if (!$options['filename']) {
            $options['filename'] = self::generateFilename($file, $options['convert_to_webp']);
        }

        // Create image manager
        $manager = self::getImageManager();
        
        // Create image instance
        $image = $manager->read($file->getRealPath());

        // Strip metadata if requested
        if ($options['strip_metadata']) {
            $image = self::stripMetadata($image);
        }

        // Resize image if needed
        $image = self::resizeImage($image, $options['max_width'], $options['max_height']);

        // Add watermark if requested
        if ($options['watermark'] && $options['watermark_path']) {
            $image = self::addWatermark($image, $options['watermark_path'], $options['watermark_position'], $options['watermark_opacity']);
        }

        // Store image with enhanced compression
        $fullPath = $path . '/' . $options['filename'];
        $imageData = self::encodeImage($image, $file, $options);
        
        Storage::disk($options['disk'])->put($fullPath, $imageData);

        return $fullPath;
    }

    /**
     * Enhanced image encoding with better compression
     *
     * @param \Intervention\Image\Interfaces\ImageInterface $image
     * @param UploadedFile $file
     * @param array $options
     * @return string
     */
    private static function encodeImage($image, UploadedFile $file, array $options)
    {
        $extension = strtolower($file->getClientOriginalExtension());
        
        // Convert to WebP if requested and supported
        if ($options['convert_to_webp'] && function_exists('imagewebp')) {
            return $image->toWebp($options['quality']);
        }

        // Use the correct encoder for Intervention Image v3
        switch ($extension) {
            case 'jpeg':
            case 'jpg':
                return $image->toJpeg($options['quality']);
            case 'png':
                return $image->toPng();
            case 'gif':
                return $image->toGif();
            case 'webp':
                return $image->toWebp($options['quality']);
            default:
                return $image->toJpeg($options['quality']);
        }
    }

    /**
     * Strip metadata from image
     *
     * @param \Intervention\Image\Interfaces\ImageInterface $image
     * @return \Intervention\Image\Interfaces\ImageInterface
     */
    private static function stripMetadata($image)
    {
        // Intervention Image v3 automatically strips metadata
        return $image;
    }

    /**
     * Compress and upload multiple images with batch processing
     *
     * @param array $files
     * @param string $path
     * @param array $options
     * @return array
     */
    public static function compressAndUploadMultiple(array $files, string $path, array $options = [])
    {
        $uploadedFiles = [];
        $errors = [];

        foreach ($files as $index => $file) {
            if ($file instanceof UploadedFile) {
                try {
                    $uploadedFiles[] = self::compressAndUpload($file, $path, $options);
                } catch (\Exception $e) {
                    $errors[] = "File {$index}: " . $e->getMessage();
                }
            }
        }

        if (!empty($errors)) {
            throw new \Exception("Some files failed to upload: " . implode(', ', $errors));
        }

        return $uploadedFiles;
    }

    /**
     * Resize image maintaining aspect ratio with smart cropping
     *
     * @param \Intervention\Image\Interfaces\ImageInterface $image
     * @param int $maxWidth
     * @param int $maxHeight
     * @return \Intervention\Image\Interfaces\ImageInterface
     */
    private static function resizeImage($image, int $maxWidth, int $maxHeight)
    {
        $width = $image->width();
        $height = $image->height();

        // Always resize to fit within max dimensions while maintaining aspect ratio
        if ($width > $maxWidth || $height > $maxHeight) {
            $image->scaleDown($maxWidth, $maxHeight);
        }

        return $image;
    }

    /**
     * Add watermark to image
     *
     * @param \Intervention\Image\Interfaces\ImageInterface $image
     * @param string $watermarkPath
     * @param string $position
     * @param float $opacity
     * @return \Intervention\Image\Interfaces\ImageInterface
     */
    private static function addWatermark($image, string $watermarkPath, string $position = 'bottom-right', float $opacity = 0.5)
    {
        if (!Storage::disk('public')->exists($watermarkPath)) {
            return $image;
        }

        $manager = self::getImageManager();
        $watermark = $manager->read(Storage::disk('public')->path($watermarkPath));
        
        // Resize watermark to reasonable size (10% of image width)
        $watermarkWidth = $image->width() * 0.1;
        $watermark->scaleDown($watermarkWidth);

        // Set opacity
        $watermark->opacity($opacity * 100);

        // Calculate position
        $position = self::calculateWatermarkPosition($image, $watermark, $position);

        // Insert watermark
        $image->place($watermark, $position['x'], $position['y']);

        return $image;
    }

    /**
     * Calculate watermark position
     *
     * @param \Intervention\Image\Interfaces\ImageInterface $image
     * @param \Intervention\Image\Interfaces\ImageInterface $watermark
     * @param string $position
     * @return array
     */
    private static function calculateWatermarkPosition($image, $watermark, string $position)
    {
        $imageWidth = $image->width();
        $imageHeight = $image->height();
        $watermarkWidth = $watermark->width();
        $watermarkHeight = $watermark->height();
        $margin = 20;

        switch ($position) {
            case 'top-left':
                return ['x' => $margin, 'y' => $margin];
            case 'top-right':
                return ['x' => $imageWidth - $watermarkWidth - $margin, 'y' => $margin];
            case 'bottom-left':
                return ['x' => $margin, 'y' => $imageHeight - $watermarkHeight - $margin];
            case 'bottom-right':
            default:
                return ['x' => $imageWidth - $watermarkWidth - $margin, 'y' => $imageHeight - $watermarkHeight - $margin];
            case 'center':
                return ['x' => ($imageWidth - $watermarkWidth) / 2, 'y' => ($imageHeight - $watermarkHeight) / 2];
        }
    }

    /**
     * Generate unique filename with optional WebP conversion
     *
     * @param UploadedFile $file
     * @param bool $convertToWebp
     * @return string
     */
    private static function generateFilename(UploadedFile $file, bool $convertToWebp = false)
    {
        $extension = $file->getClientOriginalExtension();
        
        // Convert to WebP if requested and supported
        if ($convertToWebp && function_exists('imagewebp')) {
            $extension = 'webp';
        }
        
        $filename = Str::random(40) . '.' . $extension;
        
        return $filename;
    }

    /**
     * Delete image from storage
     *
     * @param string $path
     * @param string $disk
     * @return bool
     */
    public static function deleteImage(string $path, string $disk = 'public')
    {
        if (Storage::disk($disk)->exists($path)) {
            return Storage::disk($disk)->delete($path);
        }
        
        return false;
    }

    /**
     * Get image dimensions
     *
     * @param UploadedFile $file
     * @return array
     */
    public static function getImageDimensions(UploadedFile $file)
    {
        $manager = self::getImageManager();
        $image = $manager->read($file->getRealPath());
        
        return [
            'width' => $image->width(),
            'height' => $image->height(),
        ];
    }

    /**
     * Get file size before and after compression
     *
     * @param UploadedFile $file
     * @param string $compressedPath
     * @return array
     */
    public static function getCompressionStats(UploadedFile $file, string $compressedPath)
    {
        $originalSize = $file->getSize();
        $compressedSize = Storage::disk('public')->size($compressedPath);
        $compressionRatio = $originalSize > 0 ? (($originalSize - $compressedSize) / $originalSize) * 100 : 0;

        return [
            'original_size' => $originalSize,
            'compressed_size' => $compressedSize,
            'compression_ratio' => round($compressionRatio, 2),
            'saved_bytes' => $originalSize - $compressedSize,
        ];
    }

    /**
     * Validate image file
     *
     * @param UploadedFile $file
     * @param array $options
     * @return array
     */
    public static function validateImage(UploadedFile $file, array $options = [])
    {
        $options = array_merge([
            'max_size' => 10240, // 10MB
            'allowed_types' => ['jpg', 'jpeg', 'png', 'gif', 'webp'],
            'min_width' => 1,  // Allow any minimum size
            'min_height' => 1, // Allow any minimum size
            'max_width' => 50000, // Allow very large images
            'max_height' => 50000, // Allow very large images
        ], $options);

        $errors = [];
        $valid = true;

        // Check file size
        if ($file->getSize() > $options['max_size'] * 1024) {
            $errors[] = 'File size must be less than ' . $options['max_size'] . 'KB';
            $valid = false;
        }

        // Check file type
        $extension = strtolower($file->getClientOriginalExtension());
        if (!in_array($extension, $options['allowed_types'])) {
            $errors[] = 'File type must be one of: ' . implode(', ', $options['allowed_types']);
            $valid = false;
        }

        // Check image dimensions (basic validation only)
        try {
            $dimensions = self::getImageDimensions($file);
            
            if ($dimensions['width'] < $options['min_width'] || $dimensions['height'] < $options['min_height']) {
                $errors[] = 'Image dimensions must be at least ' . $options['min_width'] . 'x' . $options['min_height'] . ' pixels';
                $valid = false;
            }
            
            if ($dimensions['width'] > $options['max_width'] || $dimensions['height'] > $options['max_height']) {
                $errors[] = 'Image dimensions must be less than ' . $options['max_width'] . 'x' . $options['max_height'] . ' pixels';
                $valid = false;
            }
        } catch (\Exception $e) {
            $errors[] = 'Invalid image file';
            $valid = false;
        }

        return [
            'valid' => $valid,
            'errors' => $errors,
        ];
    }

    /**
     * Create thumbnail with enhanced compression
     *
     * @param string $imagePath
     * @param string $thumbnailPath
     * @param int $width
     * @param int $height
     * @param string $disk
     * @return string|null
     */
    public static function createThumbnail(string $imagePath, string $thumbnailPath, int $width = 300, int $height = 300, string $disk = 'public')
    {
        if (!Storage::disk($disk)->exists($imagePath)) {
            return null;
        }

        try {
            $manager = self::getImageManager();
            $image = $manager->read(Storage::disk($disk)->path($imagePath));
            
            $image->scaleDown($width, $height);
            
            $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
            if ($extension === 'jpg') {
                $extension = 'jpeg';
            }
            
            // Use the correct encoder for Intervention Image v3
            switch ($extension) {
                case 'jpeg':
                case 'jpg':
                    $imageData = $image->toJpeg(80);
                    break;
                case 'png':
                    $imageData = $image->toPng();
                    break;
                case 'gif':
                    $imageData = $image->toGif();
                    break;
                case 'webp':
                    $imageData = $image->toWebp(80);
                    break;
                default:
                    $imageData = $image->toJpeg(80);
                    break;
            }
            
            Storage::disk($disk)->put($thumbnailPath, $imageData);
            
            return $thumbnailPath;
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Optimize image for web with smart compression
     *
     * @param UploadedFile $file
     * @param string $path
     * @param array $options
     * @return string
     */
    public static function optimizeForWeb(UploadedFile $file, string $path, array $options = [])
    {
        $options = array_merge([
            'quality' => 85,
            'max_width' => 1200,
            'max_height' => 1200,
            'disk' => 'public',
            'filename' => null,
            'convert_to_webp' => true,
            'preset' => 'medium',
        ], $options);

        return self::compressAndUpload($file, $path, $options);
    }

    /**
     * Get available compression presets
     *
     * @return array
     */
    public static function getCompressionPresets()
    {
        return self::COMPRESSION_PRESETS;
    }

    /**
     * Batch compress existing images
     *
     * @param string $directory
     * @param array $options
     * @return array
     */
    public static function batchCompressImages(string $directory, array $options = [])
    {
        $results = [];
        $files = Storage::disk('public')->files($directory);

        foreach ($files as $file) {
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            if (in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'gif'])) {
                try {
                    $tempPath = Storage::disk('public')->path($file);
                    $uploadedFile = new UploadedFile($tempPath, basename($file));
                    
                    $compressedPath = self::compressAndUpload($uploadedFile, dirname($file), $options);
                    $stats = self::getCompressionStats($uploadedFile, $compressedPath);
                    
                    $results[] = [
                        'file' => $file,
                        'compressed_path' => $compressedPath,
                        'stats' => $stats,
                        'success' => true,
                    ];
                } catch (\Exception $e) {
                    $results[] = [
                        'file' => $file,
                        'error' => $e->getMessage(),
                        'success' => false,
                    ];
                }
            }
        }

        return $results;
    }
} 