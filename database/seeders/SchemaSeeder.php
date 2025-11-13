<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schema;

class SchemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schemas = [
            [
                'name' => 'Organization Schema',
                'type' => 'Organization',
                'description' => 'Global organization schema for the website',
                'schema_data' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Organization',
                    'name' => 'India IVF',
                    'url' => 'https://indiaivf.com',
                    'logo' => 'https://indiaivf.com/assets/images/logo.png',
                    'description' => 'Best IVF Center in Srinagar | Fertility Specialist | India IVF',
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'telephone' => '+91-XXXXXXXXXX',
                        'contactType' => 'customer service'
                    ],
                    'sameAs' => [
                        'https://facebook.com/indiaivf',
                        'https://twitter.com/indiaivf',
                        'https://instagram.com/indiaivf'
                    ]
                ],
                'is_active' => true,
                'content_type' => null,
                'content_id' => null,
            ],
            [
                'name' => 'Medical Business Schema',
                'type' => 'MedicalBusiness',
                'description' => 'Medical business schema for IVF center',
                'schema_data' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'MedicalBusiness',
                    'name' => 'India IVF',
                    'description' => 'Best IVF Center in Srinagar | Fertility Specialist | India IVF',
                    'url' => 'https://indiaivf.com',
                    'telephone' => '+91-XXXXXXXXXX',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'addressLocality' => 'Srinagar',
                        'addressRegion' => 'Jammu and Kashmir',
                        'addressCountry' => 'IN'
                    ],
                    'geo' => [
                        '@type' => 'GeoCoordinates',
                        'latitude' => '34.0837',
                        'longitude' => '74.7973'
                    ],
                    'openingHours' => 'Mo-Su 09:00-18:00',
                    'priceRange' => '₹₹',
                    'medicalSpecialty' => 'Reproductive Medicine',
                    'availableService' => [
                        '@type' => 'MedicalProcedure',
                        'name' => 'In Vitro Fertilization (IVF)'
                    ]
                ],
                'is_active' => true,
                'content_type' => null,
                'content_id' => null,
            ],
            [
                'name' => 'Blog Article Schema',
                'type' => 'Article',
                'description' => 'Default schema for blog articles',
                'schema_data' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Article',
                    'headline' => '{{title}}',
                    'description' => '{{description}}',
                    'image' => '{{image}}',
                    'author' => [
                        '@type' => 'Person',
                        'name' => '{{author}}'
                    ],
                    'publisher' => [
                        '@type' => 'Organization',
                        'name' => 'India IVF',
                        'logo' => [
                            '@type' => 'ImageObject',
                            'url' => 'https://indiaivf.com/assets/images/logo.png'
                        ]
                    ],
                    'datePublished' => '{{datePublished}}',
                    'dateModified' => '{{dateModified}}',
                    'mainEntityOfPage' => [
                        '@type' => 'WebPage',
                        '@id' => '{{url}}'
                    ]
                ],
                'is_active' => true,
                'content_type' => 'blog',
                'content_id' => null,
            ],
            [
                'name' => 'FAQ Page Schema',
                'type' => 'FAQPage',
                'description' => 'Schema for FAQ pages',
                'schema_data' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'What is IVF?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'In Vitro Fertilization (IVF) is a fertility treatment where eggs are retrieved from the ovaries and fertilized with sperm in a laboratory.'
                            ]
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'How long does IVF treatment take?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'A complete IVF cycle typically takes 4-6 weeks, including ovarian stimulation, egg retrieval, fertilization, and embryo transfer.'
                            ]
                        ]
                    ]
                ],
                'is_active' => true,
                'content_type' => 'faq',
                'content_id' => null,
            ],
            [
                'name' => 'Home Page Schema',
                'type' => 'WebPage',
                'description' => 'Schema for the home page',
                'schema_data' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'WebPage',
                    'name' => 'India IVF - Best IVF Center in Srinagar',
                    'description' => 'Best IVF Center in Srinagar | Fertility Specialist | India IVF. Get expert fertility treatment and IVF services.',
                    'url' => 'https://indiaivf.com',
                    'mainEntity' => [
                        '@type' => 'MedicalBusiness',
                        'name' => 'India IVF',
                        'description' => 'Leading IVF and fertility treatment center in Srinagar'
                    ]
                ],
                'is_active' => true,
                'content_type' => 'home',
                'content_id' => null,
            ]
        ];

        foreach ($schemas as $schemaData) {
            Schema::create($schemaData);
        }
    }
} 