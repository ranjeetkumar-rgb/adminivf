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

    public function difficultyConceiving()
    {
        return $this->renderWithSeo('frontend.pages.difficulty-conceiving', 'difficulty-conceiving');
    }

    public function femaleInfertility()
    {
        return $this->renderWithSeo('frontend.pages.female-infertility', 'female-infertility');
    }

    public function maleInfertility()
    {
        return $this->renderWithSeo('frontend.pages.male-infertility', 'male-infertility');
    }

    public function delhiCenter()
    {
        return $this->renderWithSeo('frontend.pages.delhi-center', 'delhi-center');
    }

    public function UnexplainedInfertility()
    {
        return $this->renderWithSeo('frontend.pages.unexplained-infertility', 'unexplained-infertility');
    }

    public function pregnancyLossCare()
    {
        return $this->renderWithSeo('frontend.pages.pregnancy-loss-care', 'pregnancy-loss-care');
    }
    public function failedIVFSolutions()
    {
        return $this->renderWithSeo('frontend.pages.failed-ivf-solutions', 'failed-ivf-solutions');
    }

    public function secondOpinion(){
        return $this->renderWithSeo('frontend.pages.second-opinion', 'second-opinion');
    }

    public function shop(){
        return $this->renderWithSeo('frontend.pages.shop', 'shop');
    }

    public function fertilityPreservation()
    {
        return $this->renderWithSeo('frontend.pages.fertility-preservation', 'fertility-preservation');
    }

    public function fertilityWellness()
    {
        return $this->renderWithSeo('frontend.pages.fertility-wellness', 'fertility-wellness');
    }

    public function guidesDownloads()
    {
        return $this->renderWithSeo('frontend.pages.guides-downloads', 'guides-downloads');
    }

    public function indiaIVFCenter()
    {
        return $this->renderWithSeo('frontend.pages.indiaivf-center', 'indiaivf-center');
    }

    public function ivf()
    {
        return $this->renderWithSeo('frontend.pages.ivf', 'ivf');
    }

    public function ivfHiv()
    {
        return $this->renderWithSeo('frontend.pages.ivf-hiv', 'ivf-hiv');
    }

    public function icsi()
    {
        return $this->renderWithSeo('frontend.pages.icsi', 'icsi');
    }

    public function iui()
    {
        return $this->renderWithSeo('frontend.pages.iui', 'iui');
    }

    public function donorEgg()
    {
        return $this->renderWithSeo('frontend.pages.donor-egg', 'donor-egg');
    }
    public function donorSperm()
    {
        return $this->renderWithSeo('frontend.pages.donor-sperm', 'donor-sperm');
    }

    public function donorEmbryo()
    {
        return $this->renderWithSeo('frontend.pages.donor-embryo', 'donor-sperm');
    }

    public function Surrogacy()
    {
        return $this->renderWithSeo('frontend.pages.surrogacy', 'surrogacy');
    }
}
