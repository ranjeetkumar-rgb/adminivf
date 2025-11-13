<?php

namespace App\Helpers;

use App\Models\PageSeo;
use App\Services\SeoService;
use App\Services\SchemaService;

class SeoHelper
{
    /**
     * Generate complete SEO meta tags for a page
     */
    public static function generateMetaTags($pageName = null, $data = [])
    {
        $seoService = app(SeoService::class);
        $seoData = $seoService->getSeoData($pageName, $data);
        
        // Ensure $seoData is an array
        if (!is_array($seoData)) {
            \Log::error('SeoHelper: $seoData is not an array', [
                'pageName' => $pageName,
                'seoData' => $seoData,
                'type' => gettype($seoData)
            ]);
            
            // Fallback to default SEO data
            $seoData = [
                'title' => 'India IVF - Fertility Treatment Center',
                'description' => 'Best IVF Center in Srinagar | Fertility Specialist',
                'keywords' => 'IVF, fertility treatment, Srinagar',
                'author' => 'India IVF',
                'robots' => 'index, follow',
                'canonical' => request()->url(),
                'og_type' => 'website',
                'og_title' => 'India IVF - Fertility Treatment Center',
                'og_description' => 'Best IVF Center in Srinagar | Fertility Specialist',
                'og_image' => asset('images/og-default.jpg'),
                'twitter_card' => 'summary_large_image',
                'twitter_title' => 'India IVF - Fertility Treatment Center',
                'twitter_description' => 'Best IVF Center in Srinagar | Fertility Specialist',
                'twitter_image' => asset('images/og-default.jpg'),
                'twitter_site' => '@indiaivf',
                'twitter_creator' => '@indiaivf',
            ];
        }
        
        $metaTags = [];
        
        // Basic meta tags
        $metaTags[] = '<title>' . e($seoData['title'] ?? 'India IVF') . '</title>';
        $metaTags[] = '<meta name="description" content="' . e($seoData['description'] ?? 'Best IVF Center in Srinagar') . '">';
        
        if (!empty($seoData['keywords'] ?? '')) {
            $metaTags[] = '<meta name="keywords" content="' . e($seoData['keywords'] ?? '') . '">';
        }
        
        if (!empty($seoData['author'] ?? '')) {
            $metaTags[] = '<meta name="author" content="' . e($seoData['author'] ?? '') . '">';
        }
        
        $metaTags[] = '<meta name="robots" content="' . e($seoData['robots'] ?? 'index, follow') . '">';
        
        // Canonical URL
        if (!empty($seoData['canonical'] ?? '')) {
            $metaTags[] = '<link rel="canonical" href="' . e($seoData['canonical'] ?? '') . '">';
        }
        
        // Open Graph tags
        $metaTags[] = '<meta property="og:type" content="' . e($seoData['og_type'] ?? 'website') . '">';
        $metaTags[] = '<meta property="og:title" content="' . e($seoData['og_title'] ?? $seoData['title'] ?? 'India IVF') . '">';
        $metaTags[] = '<meta property="og:description" content="' . e($seoData['og_description'] ?? $seoData['description'] ?? 'Best IVF Center in Srinagar') . '">';
        $metaTags[] = '<meta property="og:url" content="' . e($seoData['canonical'] ?? request()->url()) . '">';
        $metaTags[] = '<meta property="og:image" content="' . e($seoData['og_image'] ?? asset('images/og-default.jpg')) . '">';
        $metaTags[] = '<meta property="og:site_name" content="' . e(config('app.name', 'India IVF')) . '">';
        
        // Twitter Card tags
        $metaTags[] = '<meta name="twitter:card" content="' . e($seoData['twitter_card'] ?? 'summary_large_image') . '">';
        $metaTags[] = '<meta name="twitter:title" content="' . e($seoData['twitter_title'] ?? $seoData['title'] ?? 'India IVF') . '">';
        $metaTags[] = '<meta name="twitter:description" content="' . e($seoData['twitter_description'] ?? $seoData['description'] ?? 'Best IVF Center in Srinagar') . '">';
        $metaTags[] = '<meta name="twitter:image" content="' . e($seoData['twitter_image'] ?? asset('images/og-default.jpg')) . '">';
        
        if (!empty($seoData['twitter_site'] ?? '')) {
            $metaTags[] = '<meta name="twitter:site" content="' . e($seoData['twitter_site'] ?? '') . '">';
        }
        
        if (!empty($seoData['twitter_creator'] ?? '')) {
            $metaTags[] = '<meta name="twitter:creator" content="' . e($seoData['twitter_creator'] ?? '') . '">';
        }
        
        // Additional meta tags for articles
        if (($seoData['og_type'] ?? '') === 'article' && isset($seoData['article_published_time'])) {
            $metaTags[] = '<meta property="article:published_time" content="' . e($seoData['article_published_time']) . '">';
        }
        
        if (($seoData['og_type'] ?? '') === 'article' && isset($seoData['article_modified_time'])) {
            $metaTags[] = '<meta property="article:modified_time" content="' . e($seoData['article_modified_time']) . '">';
        }
        
        if (($seoData['og_type'] ?? '') === 'article' && isset($seoData['article_author'])) {
            $metaTags[] = '<meta property="article:author" content="' . e($seoData['article_author']) . '">';
        }
        
        return implode("\n    ", $metaTags);
    }
    
    /**
     * Generate structured data JSON-LD
     */
    public static function generateStructuredData($pageName = null, $data = [])
    {
        $seoService = app(SeoService::class);
        $schemaService = app(SchemaService::class);
        
        $structuredData = $seoService->getStructuredData($pageName, $data);
        $schemas = $schemaService->getSchemasForPage($pageName, $data);
        
        $output = '';
        
        // Add main structured data
        if (!empty($structuredData)) {
            $output .= '<script type="application/ld+json">' . "\n";
            $output .= json_encode($structuredData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . "\n";
            $output .= '</script>' . "\n";
        }
        
        // Add additional schemas
        if ($schemas->isNotEmpty()) {
            $output .= $schemaService->renderSchemas($schemas);
        }
        
        return $output;
    }
    
    /**
     * Get SEO data as array for custom use
     */
    public static function getSeoData($pageName = null, $data = [])
    {
        $seoService = app(SeoService::class);
        return $seoService->getSeoData($pageName, $data);
    }
    
    /**
     * Generate complete SEO head section
     */
    public static function generateHeadSection($pageName = null, $data = [])
    {
        $metaTags = self::generateMetaTags($pageName, $data);
        $structuredData = self::generateStructuredData($pageName, $data);
        
        return $metaTags . "\n    " . $structuredData;
    }
    
    /**
     * Check if page SEO exists and is active
     */
    public static function hasPageSeo($pageName)
    {
        return PageSeo::where('page_name', $pageName)
                     ->where('is_active', true)
                     ->exists();
    }
    
    /**
     * Get page SEO model
     */
    public static function getPageSeo($pageName)
    {
        return PageSeo::getSeoForPage($pageName);
    }
} 