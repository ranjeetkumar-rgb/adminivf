<?php
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
?>


<title><?php echo e($seoData['title'] ?? 'India IVF'); ?></title>
<meta name="description" content="<?php echo e($seoData['description'] ?? 'Best IVF Center in Srinagar'); ?>">
<meta name="keywords" content="<?php echo e($seoData['keywords'] ?? 'IVF, fertility treatment, Srinagar'); ?>">
<meta name="author" content="<?php echo e($seoData['author'] ?? 'India IVF'); ?>">
<meta name="robots" content="<?php echo e($seoData['robots'] ?? 'index, follow'); ?>">


<?php if(!empty($seoData['canonical'] ?? '')): ?>
    <link rel="canonical" href="<?php echo e($seoData['canonical']); ?>">
<?php endif; ?>


<meta property="og:type" content="<?php echo e($seoData['og_type'] ?? 'website'); ?>">
<meta property="og:title" content="<?php echo e($seoData['og_title'] ?? $seoData['title'] ?? 'India IVF'); ?>">
<meta property="og:description" content="<?php echo e($seoData['og_description'] ?? $seoData['description'] ?? 'Best IVF Center in Srinagar'); ?>">
<meta property="og:url" content="<?php echo e($seoData['og_url'] ?? $seoData['canonical'] ?? request()->url()); ?>">
<?php
    $ogImage = $seoData['og_image'] ?? asset('images/og-default.jpg');
    // Ensure og_image is an absolute URL
    if (!filter_var($ogImage, FILTER_VALIDATE_URL)) {
        $ogImage = asset($ogImage);
    }
?>
<meta property="og:image" content="<?php echo e($ogImage); ?>">
<meta property="og:site_name" content="India IVF">


<?php if(($seoData['og_type'] ?? '') === 'article' && isset($seoData['article_published_time'])): ?>
    <meta property="article:published_time" content="<?php echo e($seoData['article_published_time']); ?>">
<?php endif; ?>
<?php if(($seoData['og_type'] ?? '') === 'article' && isset($seoData['article_modified_time'])): ?>
    <meta property="article:modified_time" content="<?php echo e($seoData['article_modified_time']); ?>">
<?php endif; ?>
<?php if(($seoData['og_type'] ?? '') === 'article' && isset($seoData['article_author'])): ?>
    <meta property="article:author" content="<?php echo e($seoData['article_author']); ?>">
<?php endif; ?>


<meta name="twitter:card" content="<?php echo e($seoData['twitter_card'] ?? 'summary_large_image'); ?>">
<meta name="twitter:site" content="<?php echo e($seoData['twitter_site'] ?? '@indiaivf'); ?>">
<meta name="twitter:creator" content="<?php echo e($seoData['twitter_creator'] ?? '@indiaivf'); ?>">
<meta name="twitter:title" content="<?php echo e($seoData['twitter_title'] ?? $seoData['title'] ?? 'India IVF'); ?>">
<meta name="twitter:description" content="<?php echo e($seoData['twitter_description'] ?? $seoData['description'] ?? 'Best IVF Center in Srinagar'); ?>">
<?php
    $twitterImage = $seoData['twitter_image'] ?? $seoData['og_image'] ?? asset('images/og-default.jpg');
    // Ensure twitter_image is an absolute URL
    if (!filter_var($twitterImage, FILTER_VALIDATE_URL)) {
        $twitterImage = asset($twitterImage);
    }
?>
<meta name="twitter:image" content="<?php echo e($twitterImage); ?>">


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">


<?php if(!empty($structuredData)): ?>
    <script type="application/ld+json">
    <?php echo json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>

    </script>
<?php endif; ?>


<?php if(!empty($seoData['focus_keyword'] ?? '')): ?>
    <meta name="focus-keyword" content="<?php echo e($seoData['focus_keyword']); ?>">
<?php endif; ?>

<?php if(!empty($seoData['geo_region'] ?? '')): ?>
    <meta name="geo.region" content="<?php echo e($seoData['geo_region']); ?>">
<?php endif; ?>

<?php if(!empty($seoData['geo_placename'] ?? '')): ?>
    <meta name="geo.placename" content="<?php echo e($seoData['geo_placename']); ?>">
<?php endif; ?>

<?php if(!empty($seoData['geo_position'] ?? '')): ?>
    <meta name="geo.position" content="<?php echo e($seoData['geo_position']); ?>">
<?php endif; ?>

<?php if(!empty($seoData['icbm'] ?? '')): ?>
    <meta name="ICBM" content="<?php echo e($seoData['icbm']); ?>">
<?php endif; ?>


<meta name="language" content="English">
<meta name="locale" content="en_US">


<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="India IVF">


<meta name="theme-color" content="#3e73b9">
<meta name="msapplication-TileColor" content="#3e73b9">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://cdn.tailwindcss.com">
<link rel="preconnect" href="https://cdnjs.cloudflare.com">
<?php /**PATH C:\wamp64\www\adminivf\resources\views/components/dynamic-seo.blade.php ENDPATH**/ ?>