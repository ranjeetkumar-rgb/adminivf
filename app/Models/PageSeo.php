<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasImageUpload;

class PageSeo extends Model
{
    use HasFactory, HasImageUpload;

    protected $table = 'page_seo';

    protected $fillable = [
        'page_name',
        'page_title',
        'meta_description',
        'meta_keywords',
        'focus_keyword',
        'canonical_url',
        'index_follow',
        'og_title',
        'og_description',
        'og_image',
        'og_type',
        'twitter_title',
        'twitter_description',
        'twitter_image',
        'twitter_card',
        'twitter_site',
        'twitter_creator',
        'author',
        'robots',
        'schema_data',
        'is_active',
    ];

    protected $casts = [
        'index_follow' => 'boolean',
        'is_active' => 'boolean',
        'schema_data' => 'array',
    ];

    /**
     * Get SEO data for a specific page
     */
    public static function getSeoForPage($pageName)
    {
        try {
            if (!$pageName || !is_string($pageName)) {
                \Log::warning('PageSeo: Invalid page name provided', [
                    'pageName' => $pageName,
                    'type' => gettype($pageName)
                ]);
                return null;
            }
            
            return static::where('page_name', $pageName)
                        ->where('is_active', true)
                        ->first();
        } catch (\Exception $e) {
            \Log::error('PageSeo: Exception in getSeoForPage', [
                'pageName' => $pageName,
                'error' => $e->getMessage()
            ]);
            return null;
        }
    }

    /**
     * Get all active page SEO data
     */
    public static function getAllActive()
    {
        return static::where('is_active', true)->get();
    }

    /**
     * Get SEO data as array for easy use in views
     */
    public function toSeoArray()
    {
        try {
            return [
                'title' => $this->page_title ?: 'India IVF',
                'description' => $this->meta_description ?: 'Best IVF Center in Srinagar',
                'keywords' => $this->meta_keywords ?: 'IVF, fertility treatment, Srinagar',
                'focus_keyword' => $this->focus_keyword ?: '',
                'canonical' => $this->canonical_url ?: request()->url(),
                'robots' => $this->robots ?: 'index, follow',
                'author' => $this->author ?: 'India IVF',
                
                // Open Graph
                'og_type' => $this->og_type ?: 'website',
                'og_title' => $this->og_title ?: $this->page_title ?: 'India IVF',
                'og_description' => $this->og_description ?: $this->meta_description ?: 'Best IVF Center in Srinagar',
                'og_image' => $this->og_image ? asset('storage/' . $this->og_image) : asset('images/og-default.jpg'),
                
                // Twitter Card
                'twitter_card' => $this->twitter_card ?: 'summary_large_image',
                'twitter_site' => $this->twitter_site ?: '@indiaivf',
                'twitter_creator' => $this->twitter_creator ?: '@indiaivf',
                'twitter_title' => $this->twitter_title ?: $this->page_title ?: 'India IVF',
                'twitter_description' => $this->twitter_description ?: $this->meta_description ?: 'Best IVF Center in Srinagar',
                'twitter_image' => $this->twitter_image ? asset('storage/' . $this->twitter_image) : asset('images/og-default.jpg'),
                
                // Schema data
                'schema_data' => $this->schema_data ?: null,
            ];
        } catch (\Exception $e) {
            \Log::error('PageSeo: Exception in toSeoArray', [
                'page_seo_id' => $this->id ?? 'unknown',
                'page_name' => $this->page_name ?? 'unknown',
                'error' => $e->getMessage()
            ]);
            
            // Return fallback data
            return [
                'title' => 'India IVF - Fertility Treatment Center',
                'description' => 'Best IVF Center in Srinagar | Fertility Specialist',
                'keywords' => 'IVF, fertility treatment, Srinagar',
                'focus_keyword' => '',
                'canonical' => request()->url(),
                'robots' => 'index, follow',
                'author' => 'India IVF',
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
                'schema_data' => null,
            ];
        }
    }

    /**
     * Get structured data for the page
     */
    public function getStructuredData()
    {
        try {
            if (!$this->schema_data) {
                return $this->getDefaultStructuredData();
            }

            // Ensure schema_data is an array
            if (!is_array($this->schema_data)) {
                \Log::error('PageSeo: schema_data is not an array', [
                    'page_seo_id' => $this->id ?? 'unknown',
                    'page_name' => $this->page_name ?? 'unknown',
                    'schema_data' => $this->schema_data,
                    'type' => gettype($this->schema_data)
                ]);
                return $this->getDefaultStructuredData();
            }

            return $this->schema_data;
        } catch (\Exception $e) {
            \Log::error('PageSeo: Exception in getStructuredData', [
                'page_seo_id' => $this->id ?? 'unknown',
                'page_name' => $this->page_name ?? 'unknown',
                'error' => $e->getMessage()
            ]);
            return $this->getDefaultStructuredData();
        }
    }

    /**
     * Get default structured data based on page type
     */
    private function getDefaultStructuredData()
    {
        try {
            $baseData = [
                '@context' => 'https://schema.org',
                'url' => request()->url(),
            ];

            switch ($this->page_name) {
                case 'home':
                    return array_merge($baseData, [
                        '@type' => 'MedicalOrganization',
                        'name' => 'India IVF',
                        'description' => $this->meta_description ?: 'Best IVF Center in Srinagar',
                        'logo' => asset('images/logo.png'),
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
                    ]);

                case 'services':
                    return array_merge($baseData, [
                        '@type' => 'Service',
                        'name' => $this->page_title ?: 'IVF Services',
                        'description' => $this->meta_description ?: 'Comprehensive IVF services',
                        'provider' => [
                            '@type' => 'MedicalOrganization',
                            'name' => 'India IVF'
                        ]
                    ]);

                case 'treatments':
                    return array_merge($baseData, [
                        '@type' => 'MedicalProcedure',
                        'name' => $this->page_title ?: 'IVF Treatments',
                        'description' => $this->meta_description ?: 'Advanced fertility treatments',
                        'performer' => [
                            '@type' => 'MedicalOrganization',
                            'name' => 'India IVF'
                        ]
                    ]);

                case 'centres':
                    return array_merge($baseData, [
                        '@type' => 'MedicalOrganization',
                        'name' => $this->page_title ?: 'India IVF Centres',
                        'description' => $this->meta_description ?: 'Network of IVF centres',
                        'medicalSpecialty' => 'Reproductive Medicine'
                    ]);

                case 'training':
                    return array_merge($baseData, [
                        '@type' => 'EducationalOrganization',
                        'name' => $this->page_title ?: 'IVF Training Programs',
                        'description' => $this->meta_description ?: 'Professional IVF training',
                        'educationalLevel' => 'Professional Training'
                    ]);

                case 'about':
                    return array_merge($baseData, [
                        '@type' => 'AboutPage',
                        'name' => $this->page_title ?: 'About India IVF',
                        'description' => $this->meta_description ?: 'Learn about India IVF',
                        'mainEntity' => [
                            '@type' => 'MedicalOrganization',
                            'name' => 'India IVF'
                        ]
                    ]);

                default:
                    return array_merge($baseData, [
                        '@type' => 'WebPage',
                        'name' => $this->page_title ?: 'India IVF',
                        'description' => $this->meta_description ?: 'Best IVF Center in Srinagar',
                    ]);
            }
        } catch (\Exception $e) {
            \Log::error('PageSeo: Exception in getDefaultStructuredData', [
                'page_seo_id' => $this->id ?? 'unknown',
                'page_name' => $this->page_name ?? 'unknown',
                'error' => $e->getMessage()
            ]);
            
            // Return basic fallback structured data
            return [
                '@context' => 'https://schema.org',
                '@type' => 'MedicalOrganization',
                'name' => 'India IVF',
                'url' => request()->url(),
                'description' => 'Best IVF Center in Srinagar with advanced fertility treatments'
            ];
        }
    }
} 