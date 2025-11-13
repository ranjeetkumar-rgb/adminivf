<?php

namespace App\Http\Controllers\Frontend;

class PageController extends BaseController
{
    public function about()
    {
        return $this->renderWithSeo('frontend.pages.about', 'about');
    }

    public function services()
    {
        return $this->renderWithSeo('frontend.pages.services', 'services');
    }

    public function contact()
    {
        return $this->renderWithSeo('frontend.pages.contact', 'contact');
    }

    public function faq()
    {
        return $this->renderWithSeo('frontend.pages.faq', 'faq');
    }

    public function testimonials()
    {
        return $this->renderWithSeo('frontend.pages.testimonials', 'testimonials');
    }

    public function doctors()
    {
        return $this->renderWithSeo('frontend.pages.doctors', 'doctors');
    }

    public function pricing()
    {
        return $this->renderWithSeo('frontend.pages.pricing', 'pricing');
    }
    public function academicsAndTraining()
    {
        return $this->renderWithSeo('frontend.pages.academics-and-training', 'academics-and-training');
    }

    public function advancedTechniques()
    {
        return $this->renderWithSeo('frontend.pages.advanced-techniques', 'advanced-techniques');
    }

    public function fertilityIssue()
    {
        return $this->renderWithSeo('frontend.pages.fertility-issue', 'fertility-issue');
    }
    public function ivfRelatedTreatments()
    {
        return $this->renderWithSeo('frontend.pages.ivf-related-treatments', 'ivf-related-treatments');
    }

}
