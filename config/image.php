<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Image Settings
    |--------------------------------------------------------------------------
    |
    | These are the default settings for image compression and upload
    |
    */

    'default' => [
        'quality' => 80,
        'max_width' => 1200,
        'max_height' => 1200,
        'disk' => 'public',
    ],

    /*
    |--------------------------------------------------------------------------
    | Image Types Configuration
    |--------------------------------------------------------------------------
    |
    | Different image types have different optimal settings
    |
    */

    'types' => [
        'avatar' => [
            'max_width' => 400,
            'max_height' => 400,
            'quality' => 85,
        ],
        'profile_image' => [
            'max_width' => 400,
            'max_height' => 400,
            'quality' => 85,
        ],
        'logo' => [
            'max_width' => 300,
            'max_height' => 100,
            'quality' => 90,
        ],
        'favicon' => [
            'max_width' => 64,
            'max_height' => 64,
            'quality' => 95,
        ],
        'banner' => [
            'max_width' => 1920,
            'max_height' => 1080,
            'quality' => 85,
        ],
        'hero_image' => [
            'max_width' => 1920,
            'max_height' => 1080,
            'quality' => 85,
        ],
        'thumbnail' => [
            'max_width' => 300,
            'max_height' => 300,
            'quality' => 80,
        ],
        'gallery' => [
            'max_width' => 800,
            'max_height' => 600,
            'quality' => 85,
        ],
        'blog' => [
            'max_width' => 800,
            'max_height' => 600,
            'quality' => 85,
        ],
        'testimonial' => [
            'max_width' => 600,
            'max_height' => 600,
            'quality' => 85,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Validation Settings
    |--------------------------------------------------------------------------
    |
    | Settings for image validation
    |
    */

    'validation' => [
        'max_size' => 5120, // 5MB in KB
        'allowed_types' => ['jpg', 'jpeg', 'png', 'gif', 'webp'],
        'min_width' => 100,
        'min_height' => 100,
        'max_width' => 5000,
        'max_height' => 5000,
    ],

    /*
    |--------------------------------------------------------------------------
    | Watermark Settings
    |--------------------------------------------------------------------------
    |
    | Default watermark configuration
    |
    */

    'watermark' => [
        'enabled' => false,
        'path' => 'watermarks/logo.png',
        'position' => 'bottom-right',
        'opacity' => 0.5,
        'size_percentage' => 10, // 10% of image width
    ],

    /*
    |--------------------------------------------------------------------------
    | Thumbnail Settings
    |--------------------------------------------------------------------------
    |
    | Default thumbnail configuration
    |
    */

    'thumbnail' => [
        'enabled' => true,
        'width' => 300,
        'height' => 300,
        'quality' => 85,
        'suffix' => '_thumb',
    ],

    /*
    |--------------------------------------------------------------------------
    | WebP Conversion
    |--------------------------------------------------------------------------
    |
    | Settings for WebP conversion
    |
    */

    'webp' => [
        'enabled' => true,
        'quality' => 85,
        'fallback' => true, // Keep original format as fallback
    ],

    /*
    |--------------------------------------------------------------------------
    | Storage Paths
    |--------------------------------------------------------------------------
    |
    | Default storage paths for different image types
    |
    */

    'paths' => [
        'avatars' => 'avatars',
        'logos' => 'logos',
        'banners' => 'banners',
        'galleries' => 'galleries',
        'blogs' => 'blogs',
        'testimonials' => 'testimonials',
        'products' => 'products',
        'watermarks' => 'watermarks',
    ],

    /*
    |--------------------------------------------------------------------------
    | Fallback Images
    |--------------------------------------------------------------------------
    |
    | Default fallback images for different types
    |
    */

    'fallbacks' => [
        'avatar' => 'assets/images/default-avatar.jpg',
        'logo' => 'assets/images/default-logo.png',
        'banner' => 'assets/images/default-banner.jpg',
        'gallery' => 'assets/images/default-gallery.jpg',
        'blog' => 'assets/images/default-blog.jpg',
        'testimonial' => 'assets/images/default-testimonial.jpg',
        'product' => 'assets/images/default-product.jpg',
        'general' => 'assets/images/placeholder.jpg',
    ],
]; 