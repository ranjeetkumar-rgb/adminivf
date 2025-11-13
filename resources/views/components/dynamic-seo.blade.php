@php
    // Get SEO service
    $seoService = app(\App\Services\SeoService::class);
    
    // Determine current page
    $currentPage = $page ?? null;
    
    // Get SEO data with error handling
    try {
        $seoData = $seoService->getSeoData($currentPage, $data ?? []);
        
        // Ensure $seoData is an array
        if (!is_array($seoData)) {
            \Log::error('Dynamic SEO: $seoData is not an array', [
                'currentPage' => $currentPage,
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
                'twitter_site' => '@indiaivf',
                'twitter_creator' => '@indiaivf',
                'twitter_title' => 'India IVF - Fertility Treatment Center',
                'twitter_description' => 'Best IVF Center in Srinagar | Fertility Specialist',
                'twitter_image' => asset('images/og-default.jpg'),
            ];
        }
        
        // Get structured data
        $structuredData = $seoService->getStructuredData($currentPage, $data ?? []);
        
        // Ensure $structuredData is an array
        if (!is_array($structuredData)) {
            \Log::error('Dynamic SEO: $structuredData is not an array', [
                'currentPage' => $currentPage,
                'structuredData' => $structuredData,
                'type' => gettype($structuredData)
            ]);
            
            // Fallback to default structured data
            $structuredData = [
                '@context' => 'https://schema.org',
                '@type' => 'MedicalOrganization',
                'name' => 'India IVF',
                'url' => request()->url(),
                'description' => 'Best IVF Center in Srinagar with advanced fertility treatments'
            ];
        }
    } catch (\Exception $e) {
        \Log::error('Dynamic SEO: Exception occurred', [
            'currentPage' => $currentPage,
            'error' => $e->getMessage()
        ]);
        
        // Fallback data
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
            'twitter_site' => '@indiaivf',
            'twitter_creator' => '@indiaivf',
            'twitter_title' => 'India IVF - Fertility Treatment Center',
            'twitter_description' => 'Best IVF Center in Srinagar | Fertility Specialist',
            'twitter_image' => asset('images/og-default.jpg'),
        ];
        
        $structuredData = [
            '@context' => 'https://schema.org',
            '@type' => 'MedicalOrganization',
            'name' => 'India IVF',
            'url' => request()->url(),
            'description' => 'Best IVF Center in Srinagar with advanced fertility treatments'
        ];
    }
@endphp

{{-- Dynamic Meta Tags --}}
<title>{{ $seoData['title'] ?? 'India IVF' }}</title>
<meta name="description" content="{{ $seoData['description'] ?? 'Best IVF Center in Srinagar' }}">
<meta name="keywords" content="{{ $seoData['keywords'] ?? 'IVF, fertility treatment, Srinagar' }}">
<meta name="author" content="{{ $seoData['author'] ?? 'India IVF' }}">
<meta name="robots" content="{{ $seoData['robots'] ?? 'index, follow' }}">

{{-- Canonical URL --}}
@if(!empty($seoData['canonical'] ?? ''))
    <link rel="canonical" href="{{ $seoData['canonical'] }}">
@endif

{{-- Open Graph Meta Tags --}}
<meta property="og:type" content="{{ $seoData['og_type'] ?? 'website' }}">
<meta property="og:title" content="{{ $seoData['og_title'] ?? $seoData['title'] ?? 'India IVF' }}">
<meta property="og:description" content="{{ $seoData['og_description'] ?? $seoData['description'] ?? 'Best IVF Center in Srinagar' }}">
<meta property="og:url" content="{{ $seoData['canonical'] ?? request()->url() }}">
<meta property="og:image" content="{{ $seoData['og_image'] ?? asset('images/og-default.jpg') }}">
<meta property="og:site_name" content="India IVF">

{{-- Article specific meta tags --}}
@if(($seoData['og_type'] ?? '') === 'article' && isset($seoData['article_published_time']))
    <meta property="article:published_time" content="{{ $seoData['article_published_time'] }}">
@endif
@if(($seoData['og_type'] ?? '') === 'article' && isset($seoData['article_modified_time']))
    <meta property="article:modified_time" content="{{ $seoData['article_modified_time'] }}">
@endif
@if(($seoData['og_type'] ?? '') === 'article' && isset($seoData['article_author']))
    <meta property="article:author" content="{{ $seoData['article_author'] }}">
@endif

{{-- Twitter Card Meta Tags --}}
<meta name="twitter:card" content="{{ $seoData['twitter_card'] ?? 'summary_large_image' }}">
<meta name="twitter:site" content="{{ $seoData['twitter_site'] ?? '@indiaivf' }}">
<meta name="twitter:creator" content="{{ $seoData['twitter_creator'] ?? '@indiaivf' }}">
<meta name="twitter:title" content="{{ $seoData['twitter_title'] ?? $seoData['title'] ?? 'India IVF' }}">
<meta name="twitter:description" content="{{ $seoData['twitter_description'] ?? $seoData['description'] ?? 'Best IVF Center in Srinagar' }}">
<meta name="twitter:image" content="{{ $seoData['twitter_image'] ?? $seoData['og_image'] ?? asset('images/og-default.jpg') }}">

{{-- Additional Meta Tags --}}
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">

{{-- Structured Data (JSON-LD) --}}
@if(!empty($structuredData))
    <script type="application/ld+json">
    {!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endif

{{-- Additional SEO Meta Tags --}}
@if(!empty($seoData['focus_keyword'] ?? ''))
    <meta name="focus-keyword" content="{{ $seoData['focus_keyword'] }}">
@endif

@if(!empty($seoData['geo_region'] ?? ''))
    <meta name="geo.region" content="{{ $seoData['geo_region'] }}">
@endif

@if(!empty($seoData['geo_placename'] ?? ''))
    <meta name="geo.placename" content="{{ $seoData['geo_placename'] }}">
@endif

@if(!empty($seoData['geo_position'] ?? ''))
    <meta name="geo.position" content="{{ $seoData['geo_position'] }}">
@endif

@if(!empty($seoData['icbm'] ?? ''))
    <meta name="ICBM" content="{{ $seoData['icbm'] }}">
@endif

{{-- Language and Locale --}}
<meta name="language" content="English">
<meta name="locale" content="en_US">

{{-- Mobile App Meta Tags --}}
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="India IVF">

{{-- Theme Color --}}
<meta name="theme-color" content="#3e73b9">
<meta name="msapplication-TileColor" content="#3e73b9">

{{-- Preconnect for Performance --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://cdn.tailwindcss.com">
<link rel="preconnect" href="https://cdnjs.cloudflare.com"> 