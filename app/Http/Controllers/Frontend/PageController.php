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

    public function delhiCenterRohini()
    {
        return $this->renderWithSeo('frontend.pages.delhi-center-rohini', 'delhi-center-rohini');
    }

    public function noidaCenter()
    {
        return $this->renderWithSeo('frontend.pages.noida-center', 'noida-center');
    }
    public function gurugramCenter()
    {
        return $this->renderWithSeo('frontend.pages.gurugram-center', 'gurugram-center');
    }
    public function ghaziabadCenter()
    {
        return $this->renderWithSeo('frontend.pages.ghaziabad-center', 'ghaziabad-center');
    }
    public function srinagarCenter()
    {
        return $this->renderWithSeo('frontend.pages.srinagar-center', 'srinagar-center');
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

    public function IVFSingleMothers()
    {
        return $this->renderWithSeo('frontend.pages.ivf-single-mothers', 'ivf-single-mothers');
    }
    public function tesa()
    {
        return $this->renderWithSeo('frontend.pages.tesa', 'tesa');
    }

    public function pesa()
    {
        return $this->renderWithSeo('frontend.pages.pesa', 'pesa');
    }

    public function microTESE()
    {
       return $this->renderWithSeo('frontend.pages.micro-tese', 'micro-tese');
    }

    public function franchiseOpportunities()
    {
        return $this->renderWithSeo('frontend.pages.franchise-opportunities', 'franchise-opportunities');
    }

    public function corporateHealthTalks()
    {
        return $this->renderWithSeo('frontend.pages.corporate-health-talks', 'corporate-health-talks');
    }

    public function emiAndPaymentPlans()
    {
        return $this->renderWithSeo('frontend.pages.emi-and-payment-plans', 'emi-and-payment-plans');
    }

    public function fertilityDiet()
    {
        return $this->renderWithSeo('frontend.pages.fertility-diet', 'fertility-diet');
    }

    public function blastoCystTransfer()
    {
        return $this->renderWithSeo('frontend.pages.blasto-cyst-transfer', 'blasto-cyst-transfer');
    }

    public function embryoGlue()
    {
        return $this->renderWithSeo('frontend.pages.embryo-glue', 'embryo-glue');
    }

    public function laserAssistedHatching()
    {
        return $this->renderWithSeo('frontend.pages.laser-assisted-hatching', 'laser-assisted-hatching');
    }

    public function intelligentWomb()
    {
        return $this->renderWithSeo('frontend.pages.intelligent-womb', 'intelligent-womb');
    }

    public function doubleWitnessing()
    {
        return $this->renderWithSeo('frontend.pages.double-witnessing','double-witnessing');
    }

    public function macs()
    {
        return $this->renderWithSeo('frontend.pages.macs','macs');
    }

    public function OOActive()
    {
        return $this->renderWithSeo('frontend.pages.oo-active','oo-active');
    }

    public function exosomalTherapy()
    {
        return $this->renderWithSeo('frontend.pages.exosomal-therapy','exosomal-therapy');
    }

    public function roboICSI()
    {
        return $this->renderWithSeo('frontend.pages.robo-icsi','robo-icsi');
    }

    public function testicularMapping()
    {
        return $this->renderWithSeo('frontend.pages.testicular-mapping','testicular-mapping');
    }

    public function surgicalInnovations()
    {
        return $this->renderWithSeo('frontend.pages.surgical-innovations','surgical-innovations');
    }

    public function fertilityTestsAndAssessments()
    {
        return $this->renderWithSeo('frontend.pages.fertility-tests-and-assessments','fertility-tests-and-assessments');
    }

    public function stressAndMindBody()
    {
        return $this->renderWithSeo('frontend.pages.stress-and-mind-body','stress-and-mind-body');
    }

    public function ivfCost()
    {
        return $this->renderWithSeo('frontend.pages.ivf-cost','ivf-cost');
    }

    public function icsiCost()
    {
        return $this->renderWithSeo('frontend.pages.icsi-cost','icsi-cost');
    }
    public function eggFreezingCost()
    {
        return $this->renderWithSeo('frontend.pages.egg-freezing-cost','egg-freezing-cost');
    }
    public function iuiCost()
    {
        return $this->renderWithSeo('frontend.pages.iui-cost','iui-cost');
    }
    public function embryoFreezingCost()
    {
        return $this->renderWithSeo('frontend.pages.embryo-freezing-cost','embryo-freezing-cost');
    }
    public function ovulationCalculator()
    {
        return $this->renderWithSeo('frontend.pages.ovulation-calculator','ovulation-calculator');
    }

    public function successStories()
    {
        return $this->renderWithSeo('frontend.pages.success-stories','success-stories');
    }

    public function ivfInsurance()
    {
        return $this->renderWithSeo('frontend.pages.ivf-insurance','ivf-insurance');
    }

    public function ourPricing()
    {
        return $this->renderWithSeo('frontend.pages.our-pricing','our-pricing');
    }

    public function academicsTraining()
    {
        return $this->renderWithSeo('frontend.pages.academics-training','academics-training');
    }

    public function internationalPatients()
    {
        return $this->renderWithSeo('frontend.pages.international-patients','international-patients');
    }

    public function patientResources()
    {
        return $this->renderWithSeo('frontend.pages.patient-resources','patient-resources');
    }

    public function socialEggFreezing()
    {
        return $this->renderWithSeo('frontend.pages.social-egg-freezing','social-egg-freezing');
    }

    public function SpermFreezing()
    {
        return $this->renderWithSeo('frontend.pages.sperm-freezing','sperm-freezing');
    }

    public function embryoFreezing()
    {
        return $this->renderWithSeo('frontend.pages.embryo-freezing','embryo-freezing');
    }

    public function eggFreezing()
    {
        return $this->renderWithSeo('frontend.pages.egg-freezing','egg-freezing');
    }

    public function oncoFertility()
    {
        return $this->renderWithSeo('frontend.pages.onco-fertility','onco-fertility');
    }
}
