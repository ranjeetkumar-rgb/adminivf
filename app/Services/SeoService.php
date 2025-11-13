<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class SeoService
{
    /**
     * Get SEO data for any page
     */
    public function getSeoData($page = null, $data = [])
    {
        try {
            $defaultSeo = $this->getDefaultSeo();
            
            // Ensure defaultSeo is an array
            if (!is_array($defaultSeo)) {
                \Log::error('SeoService: getDefaultSeo() returned non-array', [
                    'defaultSeo' => $defaultSeo,
                    'type' => gettype($defaultSeo)
                ]);
                $defaultSeo = $this->getFallbackSeo();
            }
            
            if (!$page) {
                return $defaultSeo;
            }
            
            // First try to get from PageSeo model
            $pageSeo = \App\Models\PageSeo::getSeoForPage($page);
            if ($pageSeo) {
                $pageSeoArray = $pageSeo->toSeoArray();
                if (!is_array($pageSeoArray)) {
                    \Log::error('SeoService: PageSeo::toSeoArray() returned non-array', [
                        'page' => $page,
                        'pageSeoArray' => $pageSeoArray,
                        'type' => gettype($pageSeoArray)
                    ]);
                    return $defaultSeo;
                }
                return array_merge($defaultSeo, $pageSeoArray);
            }
            
            // Fallback to hardcoded methods
            if ($page && is_string($page)) {
                $method = 'get' . Str::studly($page) . 'Seo';
                
                if (method_exists($this, $method)) {
                    $methodResult = $this->$method($data);
                    if (!is_array($methodResult)) {
                        \Log::error('SeoService: Method ' . $method . ' returned non-array', [
                            'page' => $page,
                            'methodResult' => $methodResult,
                            'type' => gettype($methodResult)
                        ]);
                        return $defaultSeo;
                    }
                    return array_merge($defaultSeo, $methodResult);
                }
            }
            
            return $defaultSeo;
        } catch (\Exception $e) {
            \Log::error('SeoService: Exception in getSeoData', [
                'page' => $page,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return $this->getFallbackSeo();
        }
    }
    
    /**
     * Get default SEO settings
     */
    private function getDefaultSeo()
    {
        return Cache::remember('default_seo', 3600, function () {
            return [
                'title' => 'Best IVF Center in Srinagar | Fertility Specialist | India IVF',
                'description' => 'Book consultation with India IVF Srinagar – 75%+ success rate, advanced fertility treatments, experienced doctors.',
                'keywords' => 'IVF, fertility treatment, Srinagar, India IVF, infertility, fertility specialist',
                'author' => 'India IVF',
                'robots' => 'index, follow',
                'canonical' => request()->url(),
                'og_type' => 'website',
                'og_image' => asset('images/og-default.jpg'),
                'twitter_card' => 'summary_large_image',
                'twitter_site' => '@indiaivf',
                'twitter_creator' => '@indiaivf',
            ];
        });
    }
    
    /**
     * Get fallback SEO settings when everything else fails
     */
    private function getFallbackSeo()
    {
        return [
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
    
    /**
     * Get SEO for home page
     */
    private function getHomeSeo($data = [])
    {
        return [
            'title' => 'Best IVF Center in Srinagar | Fertility Specialist | India IVF',
            'description' => 'Book consultation with India IVF Srinagar – 75%+ success rate, advanced fertility treatments, experienced doctors.',
            'keywords' => 'IVF, fertility treatment, Srinagar, India IVF, infertility, fertility specialist, IVF center',
            'og_type' => 'website',
        ];
    }
    
    /**
     * Get SEO for blog pages
     */
    private function getBlogSeo($data = [])
    {
        $blog = $data['blog'] ?? null;
        
        if (!$blog) {
            return $this->getDefaultSeo();
        }
        
        try {
            return [
                'title' => $blog->meta_title ?: $blog->title ?: 'Blog Post',
                'description' => $blog->meta_description ?: ($blog->description ? Str::limit(strip_tags($blog->description), 160) : 'Blog post from India IVF'),
                'keywords' => $blog->meta_keywords ?: $blog->focus_keyword ?: 'IVF, fertility, blog',
                'author' => $blog->author_name ?: 'India IVF',
                'robots' => $blog->index_follow ? 'index, follow' : 'noindex, nofollow',
                'canonical' => $blog->canonical_url ?: request()->url(),
                'og_type' => 'article',
                'og_title' => $blog->og_title ?: $blog->meta_title ?: $blog->title ?: 'Blog Post',
                'og_description' => $blog->og_description ?: $blog->meta_description ?: ($blog->description ? Str::limit(strip_tags($blog->description), 160) : 'Blog post from India IVF'),
                'og_image' => $blog->og_image ?: ($blog->image ? asset('storage/' . $blog->image) : asset('images/og-default.jpg')),
                'article_published_time' => $blog->created_at?->toISOString(),
                'article_modified_time' => $blog->updated_at?->toISOString(),
                'article_author' => $blog->author_name ?: 'India IVF',
                'twitter_title' => $blog->og_title ?: $blog->meta_title ?: $blog->title ?: 'Blog Post',
                'twitter_description' => $blog->og_description ?: $blog->meta_description ?: ($blog->description ? Str::limit(strip_tags($blog->description), 160) : 'Blog post from India IVF'),
                'twitter_image' => $blog->og_image ?: ($blog->image ? asset('storage/' . $blog->image) : asset('images/og-default.jpg')),
            ];
        } catch (\Exception $e) {
            \Log::error('SeoService: Exception in getBlogSeo', [
                'blog_id' => $blog->id ?? 'unknown',
                'error' => $e->getMessage()
            ]);
            return $this->getFallbackSeo();
        }
    }
    
    /**
     * Get SEO for about page
     */
    private function getAboutSeo($data = [])
    {
        return [
            'title' => 'About Us | Best IVF Center in Srinagar | India IVF',
            'description' => 'Learn about India IVF Srinagar - our mission, experienced team, and commitment to helping couples achieve their dream of parenthood.',
            'keywords' => 'about IVF center, fertility clinic Srinagar, IVF specialists, India IVF team',
            'og_type' => 'website',
        ];
    }
    
    /**
     * Get SEO for services page
     */
    private function getServicesSeo($data = [])
    {
        return [
            'title' => 'IVF Services & Treatments | Best Fertility Center in Srinagar | India IVF',
            'description' => 'Comprehensive IVF services and fertility treatments at India IVF Srinagar. IVF, IUI, ICSI, and more advanced reproductive technologies.',
            'keywords' => 'IVF services, fertility treatments, IUI, ICSI, reproductive technology, Srinagar',
            'og_type' => 'website',
        ];
    }
    
    /**
     * Get SEO for contact page
     */
    private function getContactSeo($data = [])
    {
        return [
            'title' => 'Contact Us | Best IVF Center in Srinagar | India IVF',
            'description' => 'Contact India IVF Srinagar for fertility consultation. Book appointment, get directions, and speak with our fertility specialists.',
            'keywords' => 'contact IVF center, fertility consultation, book appointment, Srinagar IVF',
            'og_type' => 'website',
        ];
    }
    
    /**
     * Get SEO for FAQ page
     */
    private function getFaqSeo($data = [])
    {
        return [
            'title' => 'Frequently Asked Questions | IVF Treatment | India IVF Srinagar',
            'description' => 'Find answers to common questions about IVF treatment, fertility procedures, and reproductive health at India IVF Srinagar.',
            'keywords' => 'IVF FAQ, fertility questions, IVF treatment questions, reproductive health FAQ',
            'og_type' => 'website',
        ];
    }
    
    /**
     * Get SEO for testimonials page
     */
    private function getTestimonialsSeo($data = [])
    {
        return [
            'title' => 'Patient Testimonials & Success Stories | India IVF Srinagar',
            'description' => 'Read success stories and testimonials from our patients who achieved their dream of parenthood at India IVF Srinagar.',
            'keywords' => 'IVF testimonials, success stories, patient reviews, fertility treatment success',
            'og_type' => 'website',
        ];
    }
    
    /**
     * Get SEO for doctors page
     */
    private function getDoctorsSeo($data = [])
    {
        return [
            'title' => 'Our Fertility Specialists & Doctors | India IVF Srinagar',
            'description' => 'Meet our experienced fertility specialists and IVF doctors at India IVF Srinagar. Expert care for your fertility journey.',
            'keywords' => 'fertility specialists, IVF doctors, reproductive endocrinologists, Srinagar',
            'og_type' => 'website',
        ];
    }
    
    /**
     * Get SEO for pricing page
     */
    private function getPricingSeo($data = [])
    {
        return [
            'title' => 'IVF Treatment Cost & Pricing | Affordable Fertility Care | India IVF',
            'description' => 'Transparent IVF treatment costs and pricing at India IVF Srinagar. Affordable fertility care with flexible payment options.',
            'keywords' => 'IVF cost, fertility treatment pricing, affordable IVF, IVF packages',
            'og_type' => 'website',
        ];
    }
    
    /**
     * Get SEO for treatments page
     */
    private function getTreatmentsSeo($data = [])
    {
        return [
            'title' => 'IVF Treatments & Procedures | Advanced Fertility Care | India IVF',
            'description' => 'Comprehensive IVF treatments and fertility procedures at India IVF Srinagar. Advanced reproductive technologies and personalized care.',
            'keywords' => 'IVF treatments, fertility procedures, reproductive technology, IVF procedures, Srinagar',
            'og_type' => 'website',
        ];
    }
    
    /**
     * Get SEO for centres page
     */
    private function getCentresSeo($data = [])
    {
        return [
            'title' => 'Our IVF Centres & Locations | India IVF Network',
            'description' => 'Find India IVF centres across multiple locations. State-of-the-art facilities and expert fertility care near you.',
            'keywords' => 'IVF centres, fertility clinics, IVF locations, India IVF network, fertility centers',
            'og_type' => 'website',
        ];
    }
    
    /**
     * Get SEO for training page
     */
    private function getTrainingSeo($data = [])
    {
        return [
            'title' => 'IVF Training & Education Programs | Fertility Specialist Training | India IVF',
            'description' => 'Professional IVF training and fertility education programs at India IVF. Learn from experienced specialists and advance your career.',
            'keywords' => 'IVF training, fertility education, reproductive medicine training, IVF courses, medical training',
            'og_type' => 'website',
        ];
    }
    
    /**
     * Get SEO for more page
     */
    private function getMoreSeo($data = [])
    {
        return [
            'title' => 'Additional Resources & Information | India IVF',
            'description' => 'Explore additional resources, articles, and information about fertility treatments and reproductive health at India IVF.',
            'keywords' => 'fertility resources, reproductive health information, IVF resources, fertility articles',
            'og_type' => 'website',
        ];
    }
    
    /**
     * Generate structured data for any page
     */
    public function getStructuredData($page = null, $data = [])
    {
        try {
            // First try to get from PageSeo model
            $pageSeo = \App\Models\PageSeo::getSeoForPage($page);
            if ($pageSeo) {
                $structuredData = $pageSeo->getStructuredData();
                if (!is_array($structuredData)) {
                    \Log::error('SeoService: PageSeo::getStructuredData() returned non-array', [
                        'page' => $page,
                        'structuredData' => $structuredData,
                        'type' => gettype($structuredData)
                    ]);
                    return $this->getDefaultStructuredData();
                }
                return $structuredData;
            }
            
            // Fallback to hardcoded methods
            if ($page && is_string($page)) {
                $method = 'get' . Str::studly($page) . 'StructuredData';
                
                if (method_exists($this, $method)) {
                    $methodResult = $this->$method($data);
                    if (!is_array($methodResult)) {
                        \Log::error('SeoService: Method ' . $method . ' returned non-array', [
                            'page' => $page,
                            'methodResult' => $methodResult,
                            'type' => gettype($methodResult)
                        ]);
                        return $this->getDefaultStructuredData();
                    }
                    return $methodResult;
                }
            }
            
            return $this->getDefaultStructuredData();
        } catch (\Exception $e) {
            \Log::error('SeoService: Exception in getStructuredData', [
                'page' => $page,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return $this->getDefaultStructuredData();
        }
    }
    
    /**
     * Get default structured data
     */
    private function getDefaultStructuredData()
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'MedicalOrganization',
            'name' => 'India IVF',
            'url' => request()->url(),
            'logo' => asset('images/logo.png'),
            'description' => 'Best IVF Center in Srinagar with advanced fertility treatments',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Srinagar',
                'addressRegion' => 'Jammu and Kashmir',
                'addressCountry' => 'IN'
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+91-XXXXXXXXXX',
                'contactType' => 'customer service'
            ]
        ];
    }
    
    /**
     * Get structured data for blog
     */
    private function getBlogStructuredData($data = [])
    {
        $blog = $data['blog'] ?? null;
        
        if (!$blog) {
            return $this->getDefaultStructuredData();
        }
        
        return [
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',
            'headline' => $blog->heading ?: $blog->title,
            'description' => $blog->meta_description ?: Str::limit(strip_tags($blog->description), 160),
            'image' => $blog->image ? asset('storage/' . $blog->image) : asset('images/og-default.jpg'),
            'author' => [
                '@type' => 'Person',
                'name' => $blog->author_name ?: 'India IVF'
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'India IVF',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('images/logo.png')
                ]
            ],
            'datePublished' => $blog->created_at?->toISOString(),
            'dateModified' => $blog->updated_at?->toISOString(),
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => request()->url()
            ]
        ];
    }
    
    /**
     * Get structured data for treatments page
     */
    private function getTreatmentsStructuredData($data = [])
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'MedicalProcedure',
            'name' => 'IVF Treatments & Procedures',
            'description' => 'Comprehensive IVF treatments and fertility procedures at India IVF Srinagar',
            'performer' => [
                '@type' => 'MedicalOrganization',
                'name' => 'India IVF',
                'url' => config('app.url'),
                'logo' => asset('images/logo.png')
            ],
            'bodyLocation' => 'Reproductive System',
            'preparation' => 'Fertility consultation and medical evaluation required',
            'followup' => 'Regular monitoring and follow-up care provided'
        ];
    }
    
    /**
     * Get structured data for centres page
     */
    private function getCentresStructuredData($data = [])
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'MedicalOrganization',
            'name' => 'India IVF Centres',
            'description' => 'Network of IVF centres across multiple locations',
            'url' => config('app.url'),
            'logo' => asset('images/logo.png'),
            'medicalSpecialty' => 'Reproductive Medicine',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Srinagar',
                'addressRegion' => 'Jammu and Kashmir',
                'addressCountry' => 'IN'
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+91-XXXXXXXXXX',
                'contactType' => 'customer service'
            ]
        ];
    }
    
    /**
     * Get structured data for training page
     */
    private function getTrainingStructuredData($data = [])
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'EducationalOrganization',
            'name' => 'India IVF Training Programs',
            'description' => 'Professional IVF training and fertility education programs',
            'url' => config('app.url'),
            'logo' => asset('images/logo.png'),
            'educationalLevel' => 'Professional Training',
            'teaches' => 'Reproductive Medicine and IVF Procedures',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Srinagar',
                'addressRegion' => 'Jammu and Kashmir',
                'addressCountry' => 'IN'
            ]
        ];
    }
    
    /**
     * Get structured data for more page
     */
    private function getMoreStructuredData($data = [])
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            'name' => 'Additional Resources & Information',
            'description' => 'Explore additional resources, articles, and information about fertility treatments',
            'url' => request()->url(),
            'isPartOf' => [
                '@type' => 'WebSite',
                'name' => 'India IVF',
                'url' => config('app.url')
            ]
        ];
    }
} 