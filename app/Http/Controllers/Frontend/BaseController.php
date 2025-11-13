<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\SeoService;

class BaseController extends Controller
{
    protected $seoService;
    
    public function __construct()
    {
        $this->seoService = app(SeoService::class);
    }
    
    /**
     * Share SEO data with the view
     */
    protected function shareSeoData($page = null, $data = [])
    {
        view()->share([
            'seoPage' => $page,
            'seoData' => $data
        ]);
    }
    
    /**
     * Render view with SEO data
     */
    protected function renderWithSeo($view, $page = null, $data = [], $viewData = [])
    {
        $this->shareSeoData($page, $data);
        return view($view, $viewData);
    }
} 