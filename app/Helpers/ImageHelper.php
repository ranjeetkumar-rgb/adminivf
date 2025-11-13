<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class ImageHelper
{
    /**
     * Get image URL with fallback
     *
     * @param string|null $path
     * @param string $fallback
     * @param string $disk
     * @return string
     */
    public static function getImageUrl($path, $fallback = null, $disk = 'public')
    {
        if (!$path) {
            return $fallback ?: asset('assets/images/placeholder.jpg');
        }

        // If it's already a full URL, return as is
        if (filter_var($path, FILTER_VALIDATE_URL)) {
            return $path;
        }

        // If it's a relative path starting with /, make it absolute
        if (str_starts_with($path, '/')) {
            return asset($path);
        }

        // Check if file exists in storage
        if (Storage::disk($disk)->exists($path)) {
            return Storage::disk($disk)->url($path);
        }

        return $fallback ?: asset('assets/images/placeholder.jpg');
    }

    /**
     * Get thumbnail URL
     *
     * @param string|null $path
     * @param string $fallback
     * @param string $disk
     * @return string
     */
    public static function getThumbnailUrl($path, $fallback = null, $disk = 'public')
    {
        if (!$path) {
            return $fallback ?: asset('assets/images/placeholder-thumb.jpg');
        }

        $thumbnailPath = str_replace(
            '.' . pathinfo($path, PATHINFO_EXTENSION),
            '_thumb.' . pathinfo($path, PATHINFO_EXTENSION),
            $path
        );

        if (Storage::disk($disk)->exists($thumbnailPath)) {
            return Storage::disk($disk)->url($thumbnailPath);
        }

        // Fallback to original image
        return self::getImageUrl($path, $fallback, $disk);
    }

    /**
     * Display image with attributes
     *
     * @param string|null $path
     * @param array $attributes
     * @param string $fallback
     * @param string $disk
     * @return string
     */
    public static function image($path, $attributes = [], $fallback = null, $disk = 'public')
    {
        $url = self::getImageUrl($path, $fallback, $disk);
        
        $attrString = '';
        foreach ($attributes as $key => $value) {
            $attrString .= " {$key}=\"{$value}\"";
        }

        return "<img src=\"{$url}\"{$attrString}>";
    }

    /**
     * Display responsive image
     *
     * @param string|null $path
     * @param array $attributes
     * @param string $fallback
     * @param string $disk
     * @return string
     */
    public static function responsiveImage($path, $attributes = [], $fallback = null, $disk = 'public')
    {
        $defaultAttributes = [
            'class' => 'img-fluid',
            'loading' => 'lazy',
        ];

        $attributes = array_merge($defaultAttributes, $attributes);

        return self::image($path, $attributes, $fallback, $disk);
    }

    /**
     * Display avatar image
     *
     * @param string|null $path
     * @param array $attributes
     * @param string $fallback
     * @param string $disk
     * @return string
     */
    public static function avatar($path, $attributes = [], $fallback = null, $disk = 'public')
    {
        $defaultAttributes = [
            'class' => 'rounded-circle',
            'alt' => 'Avatar',
            'width' => '40',
            'height' => '40',
        ];

        $attributes = array_merge($defaultAttributes, $attributes);

        return self::image($path, $attributes, $fallback, $disk);
    }

    /**
     * Display logo image
     *
     * @param string|null $path
     * @param array $attributes
     * @param string $fallback
     * @param string $disk
     * @return string
     */
    public static function logo($path, $attributes = [], $fallback = null, $disk = 'public')
    {
        $defaultAttributes = [
            'class' => 'img-fluid',
            'alt' => 'Logo',
        ];

        $attributes = array_merge($defaultAttributes, $attributes);

        return self::image($path, $attributes, $fallback, $disk);
    }

    /**
     * Display favicon
     *
     * @param string|null $path
     * @param array $attributes
     * @param string $fallback
     * @param string $disk
     * @return string
     */
    public static function favicon($path, $attributes = [], $fallback = null, $disk = 'public')
    {
        $defaultAttributes = [
            'rel' => 'icon',
            'type' => 'image/x-icon',
            'sizes' => '16x16 32x32',
        ];

        $attributes = array_merge($defaultAttributes, $attributes);

        $url = self::getImageUrl($path, $fallback, $disk);

        $attrString = '';
        foreach ($attributes as $key => $value) {
            $attrString .= " {$key}=\"{$value}\"";
        }

        return "<link href=\"{$url}\"{$attrString}>";
    }

    /**
     * Get image size in human readable format
     *
     * @param string $path
     * @param string $disk
     * @return string
     */
    public static function getImageSize($path, $disk = 'public')
    {
        if (!Storage::disk($disk)->exists($path)) {
            return '0 B';
        }

        $size = Storage::disk($disk)->size($path);
        
        $units = ['B', 'KB', 'MB', 'GB'];
        $i = 0;
        
        while ($size >= 1024 && $i < count($units) - 1) {
            $size /= 1024;
            $i++;
        }

        return round($size, 2) . ' ' . $units[$i];
    }

    /**
     * Get image dimensions
     *
     * @param string $path
     * @param string $disk
     * @return array|null
     */
    public static function getImageDimensions($path, $disk = 'public')
    {
        if (!Storage::disk($disk)->exists($path)) {
            return null;
        }

        try {
            $image = \Intervention\Image\Facades\Image::make(Storage::disk($disk)->path($path));
            return [
                'width' => $image->width(),
                'height' => $image->height(),
            ];
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Check if image exists
     *
     * @param string|null $path
     * @param string $disk
     * @return bool
     */
    public static function imageExists($path, $disk = 'public')
    {
        if (!$path) {
            return false;
        }

        return Storage::disk($disk)->exists($path);
    }
} 