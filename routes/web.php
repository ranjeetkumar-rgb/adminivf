<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{HomeController, AdminController,UserController, BlogController, RoleController,
    TestimonialController, FaqController, SiteSettingController, ConsultationController, PerformanceController, FileUploadController, ImageCompressionController};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

// Frontend Routes with Dynamic SEO
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

// Blog Routes
Route::get('/blog', [App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\Frontend\BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/category/{slug}', [App\Http\Controllers\Frontend\BlogController::class, 'category'])->name('blog.category');

// Blog AJAX Routes
Route::post('/blog/filter', [App\Http\Controllers\Frontend\BlogController::class, 'filter'])->name('blog.filter');
Route::post('/blog/load-more', [App\Http\Controllers\Frontend\BlogController::class, 'loadMore'])->name('blog.load-more');
Route::get('/blog/search', [App\Http\Controllers\Frontend\BlogController::class, 'search'])->name('blog.search');

// Test route to check if blogs exist
Route::get('/blog/search-test', function() {
    $totalBlogs = \App\Models\Blog::count();
    $publishedBlogs = \App\Models\Blog::published()->count();
    $sampleBlogs = \App\Models\Blog::published()->take(5)->get(['id', 'title', 'slug', 'published']);

    return response()->json([
        'total_blogs' => $totalBlogs,
        'published_blogs' => $publishedBlogs,
        'sample_blogs' => $sampleBlogs,
        'search_route' => route('blog.search')
    ]);
});

// Blog Like Routes
Route::post('/blog/{id}/like', [App\Http\Controllers\Frontend\BlogController::class, 'toggleLike'])->name('blog.like');
Route::get('/blog/{id}/likes', [App\Http\Controllers\Frontend\BlogController::class, 'getLikes'])->name('blog.likes');

// Test route for debugging
Route::get('/blog/test-filter', function() {
    return response()->json([
        'message' => 'Filter endpoint is accessible',
        'timestamp' => now()
    ]);
});

// Static Pages
Route::get('/about', [App\Http\Controllers\Frontend\PageController::class, 'about'])->name('about');
// AcademicsAndTrainingPage
Route::get('/academics-and-training', [App\Http\Controllers\Frontend\PageController::class, 'academicsAndTraining'])->name('academics-and-training');
// AdvancedTechniquesPage
Route::get('/advanced-techniques', [App\Http\Controllers\Frontend\PageController::class, 'advancedTechniques'])->name('advanced-techniques');
// FaqPage
Route::get('/faq', [App\Http\Controllers\Frontend\PageController::class, 'faq'])->name('faq');
// FertilityIssue
Route::get('/fertility-issue', [App\Http\Controllers\Frontend\PageController::class, 'fertilityIssue'])->name('fertility-issue');
// Difficulty Conceiving
Route::get('/difficulty-conceiving', [App\Http\Controllers\Frontend\PageController::class, 'difficultyConceiving'])->name('difficulty-conceiving');
// FemaleInfertility_final
Route::get('female-infertility',[App\Http\Controllers\Frontend\PageController::class, 'femaleInfertility'])->name('female-infertility');
// maleInfertility_final
Route::get('male-infertility',[App\Http\Controllers\Frontend\PageController::class, 'maleInfertility'])->name('male-infertility');
Route::get('delhi-center',[App\Http\Controllers\Frontend\PageController::class, 'delhiCenter'])->name('delhi-center');
// UnexplainedInfertility_final
Route::get('unexplained-infertility',[App\Http\Controllers\Frontend\PageController::class, 'UnexplainedInfertility'])->name('unexplained-infertility');
// PregnancyLossCarePage
Route::get('pregnancy-loss-care', [App\Http\Controllers\Frontend\PageController::class, 'pregnancyLossCare'])->name('pregnancy-loss-care');
// FailedIVFSolutions_final
Route::get('failed-ivf-solutions', [App\Http\Controllers\Frontend\PageController::class, 'failedIVFSolutions'])->name('failed-ivf-solutions');
// secondSecondOpinion

Route::get('second-opinion', [App\Http\Controllers\Frontend\PageController::class, 'secondOpinion'])->name('second-opinion');
// ShopPage
Route::get('shop', [App\Http\Controllers\Frontend\PageController::class, 'shop'])->name('shop');
// Route::get('/fertility-services', [App\Http\Controllers\Frontend\PageController::class, 'fertilityServices'])->name('fertility-services');
// IVFRelatedTreatment
// FertilityPreservation
Route::get('/fertility-preservation', [App\Http\Controllers\Frontend\PageController::class, 'fertilityPreservation'])->name('fertility-preservation');
// FertilityWellness
Route::get('/fertility-wellness', [App\Http\Controllers\Frontend\PageController::class, 'fertilityWellness'])->name('fertility-wellness');
// GuidesDownloads
Route::get('/guides-downloads', [App\Http\Controllers\Frontend\PageController::class, 'guidesDownloads'])->name('guides-downloads');
// IndiaIVFCenter
Route::get('/indiaivf-center', [App\Http\Controllers\Frontend\PageController::class, 'indiaIVFCenter'])->name('indiaivf-center');
// IVF_final
Route::get('/ivf', [App\Http\Controllers\Frontend\PageController::class, 'ivf'])->name('ivf');
// IVFHIV
Route::get('/ivf-hiv', [App\Http\Controllers\Frontend\PageController::class, 'ivfHiv'])->name('ivf-hiv');
// ICSI_final.
Route::get('/icsi', [App\Http\Controllers\Frontend\PageController::class, 'icsi'])->name('icsi');
// IUI_final
Route::get('/iui', [App\Http\Controllers\Frontend\PageController::class, 'iui'])->name('iui');
// DonorEgg_final
Route::get('/donor-egg', [App\Http\Controllers\Frontend\PageController::class, 'donorEgg'])->name('donor-egg');
// DonorSperm_final
Route::get('/donor-sperm', [App\Http\Controllers\Frontend\PageController::class, 'donorSperm'])->name('donor-sperm');
// DonorEmbryo_final
Route::get('/donor-embryo', [App\Http\Controllers\Frontend\PageController::class, 'donorEmbryo'])->name('donor-embryo');
// Surrogacy_final
Route::get('/surrogacy', [App\Http\Controllers\Frontend\PageController::class, 'Surrogacy'])->name('surrogacy');
// IVFSingleMothers
Route::get('/ivf-single-mothers', [App\Http\Controllers\Frontend\PageController::class, 'IVFSingleMothers'])->name('ivf-single-mothers');
// IVFHIV_final
Route::get('/ivf-hiv', [App\Http\Controllers\Frontend\PageController::class, 'ivfHiv'])->name('ivf-hiv');
// TESA_final
Route::get('/tesa',[App\Http\Controllers\Frontend\PageController::class, 'tesa'])->name('tesa');
// PESA_final
Route::get('/pesa',[App\Http\Controllers\Frontend\PageController::class, 'pesa'])->name('pesa');
// MicroTESE_final
Route::get('/micro-tese',[App\Http\Controllers\Frontend\PageController::class, 'microTESE'])->name('micro-tese');
// IVFRelatedTreatment
Route::get('/ivf-related-treatments', [App\Http\Controllers\Frontend\PageController::class, 'ivfRelatedTreatments'])->name('ivf-related-treatments');
// FranchiseOpportunities_final
// today -----------------------------
Route::get('/franchise-opportunities', [App\Http\Controllers\Frontend\PageController::class, 'franchiseOpportunities'])->name('franchise-opportunities');
// fCorporateHealthTalks_final
Route::get('/corporate-health-talks', [App\Http\Controllers\Frontend\PageController::class, 'corporateHealthTalks'])->name('corporate-health-talks');
// FertilityDiet_final
Route::get('/fertility-diet', [App\Http\Controllers\Frontend\PageController::class, 'fertilityDiet'])->name('fertility-diet');
// BlastoCystTransfer_final
Route::get('/blasto-cyst-transfer', [App\Http\Controllers\Frontend\PageController::class, 'blastoCystTransfer'])->name('blasto-cyst-transfer');
// EmbryoGlue_final
Route::get('/embryo-glue', [App\Http\Controllers\Frontend\PageController::class, 'embryoGlue'])->name('embryo-glue');



// Route::get('/services', [App\Http\Controllers\Frontend\PageController::class, 'services'])->name('services');
// Route::get('/contact', [App\Http\Controllers\Frontend\PageController::class, 'contact'])->name('contact');
// Route::get('/testimonials', [App\Http\Controllers\Frontend\PageController::class, 'testimonials'])->name('testimonials');
// Route::get('/doctors', [App\Http\Controllers\Frontend\PageController::class, 'doctors'])->name('doctors');
// Route::get('/pricing', [App\Http\Controllers\Frontend\PageController::class, 'pricing'])->name('pricing');

// Legacy route for backward compatibility
Route::post('/submit-consultation', [HomeController::class, 'submitConsultation'])->name('submit.consultation');

// Test route for schema system
Route::get('/test-schema', function() {
    $schemaService = app(\App\Services\SchemaService::class);
    $dynamicSchemas = $schemaService->getSchemasForPage('test', []);
    return view('test-schema', compact('dynamicSchemas'));
})->name('test.schema');

// Test route for slug generation
Route::get('/test-slug', function() {
    return view('test-slug');
})->name('test.slug');
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'root'])->name('admin.dashboard');
    Route::resource('manage-users', UserController::class);
    // Blog Engagement Management - Must be before blog resource routes
    Route::prefix('blog')->group(function () {
        Route::get('engagement', [App\Http\Controllers\Admin\BlogEngagementController::class, 'index'])->name('admin.blog.engagement.index');
        Route::get('engagement/comments', [App\Http\Controllers\Admin\BlogEngagementController::class, 'comments'])->name('admin.blog.engagement.comments');
        Route::get('engagement/user-profiles', [App\Http\Controllers\Admin\BlogEngagementController::class, 'userProfiles'])->name('admin.blog.engagement.user-profiles');
        Route::post('{id}/reset-likes', [App\Http\Controllers\Admin\BlogEngagementController::class, 'resetLikes'])->name('admin.blog.reset-likes');
        Route::post('{id}/reset-views', [App\Http\Controllers\Admin\BlogEngagementController::class, 'resetViews'])->name('admin.blog.reset-views');

        // Comment Management
        Route::post('engagement/comments/{id}/approve', [App\Http\Controllers\Admin\BlogEngagementController::class, 'approveComment'])->name('admin.blog.engagement.comments.approve');
        Route::post('engagement/comments/{id}/reject', [App\Http\Controllers\Admin\BlogEngagementController::class, 'rejectComment'])->name('admin.blog.engagement.comments.reject');
        Route::post('engagement/comments/{id}/delete', [App\Http\Controllers\Admin\BlogEngagementController::class, 'deleteComment'])->name('admin.blog.engagement.comments.delete');
        Route::post('engagement/comments/bulk-approve', [App\Http\Controllers\Admin\BlogEngagementController::class, 'bulkApproveComments'])->name('admin.blog.engagement.comments.bulk-approve');
        Route::post('engagement/comments/bulk-delete', [App\Http\Controllers\Admin\BlogEngagementController::class, 'bulkDeleteComments'])->name('admin.blog.engagement.comments.bulk-delete');
    });

    Route::resource('blog', BlogController::class)->names('admin.blog');
    Route::resource('roles', RoleController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('faq', FaqController::class)->names('admin.faq');
    Route::resource('site-settings', SiteSettingController::class)->names('admin.site-settings');
    Route::resource('blog-categories', App\Http\Controllers\BlogCategoryController::class)->names('admin.blog-categories');
    Route::get('consultations/export', [ConsultationController::class, 'export'])->name('admin.consultations.export');
    Route::post('consultations/{consultation}/update-status', [ConsultationController::class, 'updateStatus'])->name('admin.consultations.update-status');
    Route::resource('consultations', ConsultationController::class)->names('admin.consultations');

    // Schema management routes
    Route::resource('schema', App\Http\Controllers\SchemaController::class)->names('admin.schema');
    Route::post('schema/{schema}/toggle-status', [App\Http\Controllers\SchemaController::class, 'toggleStatus'])->name('admin.schema.toggle-status');
    Route::get('schema/templates', [App\Http\Controllers\SchemaController::class, 'getTemplates'])->name('admin.schema.templates');
    Route::get('schema/landing-page', [App\Http\Controllers\SchemaController::class, 'getLandingPageSchemas'])->name('admin.schema.landing-page');

    // Performance monitoring routes
    Route::get('performance', [PerformanceController::class, 'index'])->name('admin.performance');
    Route::post('performance/clear-cache', [PerformanceController::class, 'clearCache'])->name('admin.performance.clear-cache');
    Route::post('performance/optimize', [PerformanceController::class, 'optimize'])->name('admin.performance.optimize');

    // Page SEO management routes
    Route::resource('page-seo', App\Http\Controllers\PageSeoController::class)->names('admin.page-seo');
    Route::patch('page-seo/{pageSeo}/toggle-status', [App\Http\Controllers\PageSeoController::class, 'toggleStatus'])->name('admin.page-seo.toggle-status');
    Route::get('page-seo/{pageName}/preview', [App\Http\Controllers\PageSeoController::class, 'preview'])->name('admin.page-seo.preview');
    Route::get('page-seo/suggestions', [App\Http\Controllers\PageSeoController::class, 'getPageSuggestions'])->name('admin.page-seo.suggestions');
    Route::post('page-seo/validate-name', [App\Http\Controllers\PageSeoController::class, 'validatePageName'])->name('admin.page-seo.validate-name');

    // File Upload management routes
    Route::get('file-upload', [App\Http\Controllers\FileUploadController::class, 'index'])->name('admin.file-upload.index');
    Route::post('file-upload', [App\Http\Controllers\FileUploadController::class, 'store'])->name('admin.file-upload.store');
    Route::delete('file-upload/{fileName}', [App\Http\Controllers\FileUploadController::class, 'destroy'])->name('admin.file-upload.destroy');
    Route::get('file-upload/{fileName}/download', [App\Http\Controllers\FileUploadController::class, 'download'])->name('admin.file-upload.download');

    // Image Compression management routes
    Route::get('image-compression', [ImageCompressionController::class, 'index'])->name('admin.image-compression.index');
    Route::post('image-compression/compress', [ImageCompressionController::class, 'compressImage'])->name('admin.image-compression.compress');
    Route::post('image-compression/batch', [ImageCompressionController::class, 'batchCompress'])->name('admin.image-compression.batch');
    Route::get('image-compression/presets', [ImageCompressionController::class, 'getPresets'])->name('admin.image-compression.presets');
    Route::get('image-compression/stats', [ImageCompressionController::class, 'getStorageStatsApi'])->name('admin.image-compression.stats');
    Route::post('image-compression/test', [ImageCompressionController::class, 'testCompression'])->name('admin.image-compression.test');
});
// EmiAndPaymentPlans_final
Route::get('/emi-and-payment-plans', [App\Http\Controllers\Frontend\PageController::class, 'emiAndPaymentPlans'])->name('emi-and-payment-plans');



//Update User Details
Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
Route::post('/update-profile/{id}', [AdminController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [AdminController::class, 'updatePassword'])->name('updatePassword');

// Debug route to check user permissions and roles
Route::get('/debug/user-info', function() {
    $user = auth()->user();
    if (!$user) {
        return 'No user logged in';
    }

    return [
        'user_id' => $user->id,
        'user_name' => $user->name,
        'user_email' => $user->email,
        'roles' => $user->roles->pluck('name'),
        'permissions' => $user->getAllPermissions()->pluck('name'),
        'has_edit_users_permission' => $user->hasPermissionTo('edit-users'),
        'is_admin' => $user->hasRole('admin'),
    ];
})->name('debug.user-info');

// Test route for SEO debugging (remove in production)
Route::get('/test-seo/{page?}', function ($page = 'home') {
    try {
        $seoData = \App\Helpers\SeoHelper::getSeoData($page);
        $metaTags = \App\Helpers\SeoHelper::generateMetaTags($page);
        $structuredData = \App\Helpers\SeoHelper::generateStructuredData($page);

        return response()->json([
            'success' => true,
            'page' => $page,
            'seo_data' => $seoData,
            'meta_tags' => $metaTags,
            'structured_data' => $structuredData,
            'is_array' => is_array($seoData),
            'type' => gettype($seoData)
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ], 500);
    }
})->name('test.seo');

// Debug route to check file upload configuration
Route::get('/debug/upload-config', function() {
    return [
        'upload_max_filesize' => ini_get('upload_max_filesize'),
        'post_max_size' => ini_get('post_max_size'),
        'max_file_uploads' => ini_get('max_file_uploads'),
        'file_uploads' => ini_get('file_uploads'),
        'memory_limit' => ini_get('memory_limit'),
        'max_execution_time' => ini_get('max_execution_time'),
    ];
})->name('debug.upload-config');

// Debug route to check file permissions and root directory
Route::get('/debug/file-permissions', function() {
    $rootPath = base_path();
    $testFile = base_path('test-delete.txt');

    return [
        'root_path' => $rootPath,
        'root_exists' => file_exists($rootPath),
        'root_is_dir' => is_dir($rootPath),
        'root_readable' => is_readable($rootPath),
        'root_writable' => is_writable($rootPath),
        'test_file_exists' => file_exists($testFile),
        'test_file_readable' => file_exists($testFile) ? is_readable($testFile) : false,
        'test_file_writable' => file_exists($testFile) ? is_writable($testFile) : false,
        'php_user' => get_current_user(),
        'file_owner' => file_exists($testFile) ? posix_getpwuid(fileowner($testFile))['name'] : 'N/A',
        'directory_owner' => posix_getpwuid(fileowner($rootPath))['name'],
    ];
})->name('debug.file-permissions');

// Test route for page-seo debugging
Route::get('/debug/page-seo', function() {
    try {
        $pageSeo = \App\Models\PageSeo::orderBy('page_name')->get();
        $globalSettings = \App\Models\SiteSetting::first();

        return response()->json([
            'success' => true,
            'page_seo_count' => $pageSeo->count(),
            'page_seo_data' => $pageSeo->toArray(),
            'global_settings' => $globalSettings ? $globalSettings->toArray() : null,
            'user_logged_in' => auth()->check(),
            'user_permissions' => auth()->check() ? auth()->user()->getAllPermissions()->pluck('name') : [],
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ], 500);
    }
})->name('debug.page-seo');


// Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
// Route::get('{any}', [App\Http\Controllers\AdminController::class, 'index'])->name('index');


