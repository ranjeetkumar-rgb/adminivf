# Image Compression System

This Laravel project includes a comprehensive image compression system that automatically compresses uploaded images to optimize storage space and improve website performance.

## Features

### 🚀 Core Features
- **Automatic Image Compression**: All uploaded images are automatically compressed
- **Multiple Compression Presets**: Pre-configured settings for different use cases
- **WebP Conversion**: Optional conversion to WebP format for better compression
- **Batch Processing**: Compress multiple images at once
- **Compression Statistics**: Track compression ratios and space savings
- **Metadata Stripping**: Remove unnecessary metadata from images
- **Smart Resizing**: Maintain aspect ratio while resizing images

### 📊 Compression Presets

| Preset | Quality | Max Dimensions | WebP | Use Case |
|--------|---------|----------------|------|----------|
| **High** | 90% | 1920x1080 | No | High-quality images, banners |
| **Medium** | 80% | 1200x800 | Yes | General purpose, blog images |
| **Low** | 60% | 800x600 | Yes | Thumbnails, previews |
| **Thumbnail** | 75% | 300x300 | Yes | Small previews |
| **Avatar** | 85% | 400x400 | No | User avatars, profile pictures |
| **Logo** | 95% | 300x300 | No | Logos, icons, favicons |

## Installation & Setup

### 1. Install Dependencies
```bash
composer require intervention/image
```

### 2. Publish Configuration (Optional)
```bash
php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"
```

### 3. Create Storage Link
```bash
php artisan storage:link
```

## Usage

### Automatic Compression

The system automatically compresses images when they are uploaded through models that use the `HasImageUpload` trait:

```php
// In your model
use App\Traits\HasImageUpload;

class Blog extends Model
{
    use HasImageUpload;
    
    // ... rest of your model
}

// In your controller
public function store(Request $request)
{
    $blog = new Blog($request->validated());
    
    if ($request->hasFile('image')) {
        // Automatically compressed using medium preset
        $imagePath = $blog->uploadImage($request->file('image'), 'image');
        $blog->image = $imagePath;
    }
    
    $blog->save();
}
```

### Manual Compression

#### Using the Web Interface

1. Navigate to `/admin/image-compression`
2. Use the dashboard to:
   - Compress single images
   - Batch compress images in directories
   - Test compression with different presets

#### Using Artisan Commands

```bash
# Compress all images in storage
php artisan images:compress

# Compress images in specific directory
php artisan images:compress blogs

# Use specific preset
php artisan images:compress --preset=high

# Convert to WebP
php artisan images:compress --webp

# Custom quality
php artisan images:compress --quality=85

# Dry run (see what would be compressed)
php artisan images:compress --dry-run

# Combine options
php artisan images:compress blogs --preset=medium --webp --quality=80
```

#### Using the API

```php
// Single image compression
$compressedPath = ImageService::compressAndUpload($file, 'path', [
    'preset' => 'medium',
    'convert_to_webp' => true,
    'quality' => 80,
]);

// Batch compression
$results = ImageService::batchCompressImages('directory', [
    'preset' => 'low',
    'convert_to_webp' => true,
]);

// Get compression stats
$stats = ImageService::getCompressionStats($originalFile, $compressedPath);
```

### Custom Compression Options

```php
$options = [
    'quality' => 85,              // JPEG/WebP quality (1-100)
    'max_width' => 1200,          // Maximum width
    'max_height' => 800,          // Maximum height
    'convert_to_webp' => true,    // Convert to WebP
    'preset' => 'medium',         // Use preset
    'strip_metadata' => true,     // Remove metadata
    'watermark' => false,         // Add watermark
    'watermark_path' => null,     // Watermark image path
    'watermark_position' => 'bottom-right', // Watermark position
    'watermark_opacity' => 0.5,   // Watermark opacity
];
```

## File Structure

```
app/
├── Services/
│   └── ImageService.php          # Core compression service
├── Traits/
│   └── HasImageUpload.php        # Trait for models with image uploads
├── Http/Controllers/
│   └── ImageCompressionController.php  # Web interface controller
└── Console/Commands/
    └── CompressImages.php        # Artisan command

resources/views/admin/
└── image-compression/
    └── index.blade.php           # Compression dashboard

routes/
└── web.php                       # Routes for compression features
```

## Configuration

### Compression Presets

You can customize compression presets in `ImageService.php`:

```php
const COMPRESSION_PRESETS = [
    'custom' => [
        'quality' => 85,
        'max_width' => 1500,
        'max_height' => 1000,
        'convert_to_webp' => true,
    ],
    // ... other presets
];
```

### Model-Specific Options

Override compression options in your models:

```php
protected function getImageOptions(string $field)
{
    $options = parent::getImageOptions($field);
    
    // Customize for specific fields
    if ($field === 'gallery') {
        $options['preset'] = 'high';
        $options['convert_to_webp'] = false;
    }
    
    return $options;
}
```

## Performance Benefits

### Typical Compression Results

| Image Type | Original Size | Compressed Size | Savings |
|------------|---------------|-----------------|---------|
| Blog Image (1200x800) | 2.5 MB | 450 KB | 82% |
| Avatar (400x400) | 800 KB | 120 KB | 85% |
| Thumbnail (300x300) | 500 KB | 45 KB | 91% |
| Logo (300x300) | 200 KB | 180 KB | 10% |

### WebP Benefits

- **30-50% smaller** than equivalent JPEG images
- **Better quality** at smaller file sizes
- **Modern browser support** (Chrome, Firefox, Safari, Edge)

## Monitoring & Logging

### Compression Logs

The system logs all compression activities:

```php
// Check logs
tail -f storage/logs/laravel.log | grep "compression"
```

### Storage Statistics

Monitor storage usage through the web interface or API:

```php
// Get storage stats
$stats = ImageService::getStorageStats();
```

## Troubleshooting

### Common Issues

1. **Intervention Image not found**
   ```bash
   composer require intervention/image
   ```

2. **WebP conversion fails**
   - Ensure GD extension is installed with WebP support
   - Check `function_exists('imagewebp')`

3. **Memory limits**
   - Increase PHP memory limit for large images
   - Use smaller max dimensions

4. **Storage permissions**
   ```bash
   chmod -R 775 storage/app/public
   ```

### Debug Mode

Enable debug logging in `.env`:
```
LOG_LEVEL=debug
```

## Best Practices

### 1. Choose Appropriate Presets
- Use `high` for important images (logos, banners)
- Use `medium` for general content (blog images)
- Use `low` or `thumbnail` for previews

### 2. WebP Conversion
- Enable WebP for better compression
- Keep original format for logos/icons

### 3. Batch Processing
- Use dry-run first: `php artisan images:compress --dry-run`
- Process during low-traffic periods
- Monitor server resources

### 4. Regular Maintenance
- Run batch compression monthly
- Monitor storage usage
- Clean up old uncompressed images

## API Reference

### ImageService Methods

```php
// Core compression
ImageService::compressAndUpload($file, $path, $options)
ImageService::compressAndUploadMultiple($files, $path, $options)
ImageService::optimizeForWeb($file, $path, $options)

// Utilities
ImageService::getCompressionStats($file, $compressedPath)
ImageService::getCompressionPresets()
ImageService::validateImage($file, $options)
ImageService::createThumbnail($imagePath, $thumbnailPath, $width, $height)
ImageService::deleteImage($path, $disk)
ImageService::getImageDimensions($file)

// Batch operations
ImageService::batchCompressImages($directory, $options)
```

### HasImageUpload Trait Methods

```php
// Upload methods
$model->uploadImage($file, $field, $options)
$model->uploadMultipleImages($files, $field, $options)
$model->uploadImageWithPreset($file, $field, $preset)

// Utility methods
$model->deleteImage($field)
$model->getImageUrl($field)
$model->createThumbnail($field, $width, $height)
$model->getThumbnailUrl($field)
$model->getImageCompressionStats($field)
$model->batchCompressExistingImages($options)
```

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests if applicable
5. Submit a pull request

## License

This image compression system is part of the Laravel project and follows the same license terms. 