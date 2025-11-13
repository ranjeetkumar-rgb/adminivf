<?php

namespace App\Services;

use App\Models\Schema;

class SchemaService
{
    /**
     * Get all active schemas for a specific content type and ID
     */
    public function getSchemasForContent($contentType, $contentId = null)
    {
        $schemas = collect();

        // Get global schemas (not tied to specific content)
        $globalSchemas = Schema::getGlobalSchemas();
        $schemas = $schemas->merge($globalSchemas);

        // Get schemas for specific content type
        $contentTypeSchemas = Schema::getByContentType($contentType);
        $schemas = $schemas->merge($contentTypeSchemas);

        // Get schemas for specific content ID
        if ($contentId) {
            $specificSchemas = Schema::getForContent($contentType, $contentId);
            $schemas = $schemas->merge($specificSchemas);
        }

        return $schemas->unique('id');
    }

    /**
     * Get schemas by type
     */
    public function getSchemasByType($type)
    {
        return Schema::getByType($type);
    }

    /**
     * Get global schemas (not tied to specific content)
     */
    public function getGlobalSchemas()
    {
        return Schema::getGlobalSchemas();
    }

    /**
     * Render schemas as JSON-LD script tags
     */
    public function renderSchemas($schemas)
    {
        $output = '';
        
        foreach ($schemas as $schema) {
            if ($schema->is_active && $schema->validateSchemaData()) {
                $output .= '<script type="application/ld+json">' . "\n";
                $output .= $schema->getFormattedSchema() . "\n";
                $output .= '</script>' . "\n";
            }
        }
        
        return $output;
    }

    /**
     * Get schemas for a specific page/route
     */
    public function getSchemasForPage($pageType, $pageData = [])
    {
        $schemas = collect();

        // Get global schemas
        $globalSchemas = Schema::getGlobalSchemas();
        $schemas = $schemas->merge($globalSchemas);

        // Get page-specific schemas
        $pageSchemas = Schema::where('content_type', $pageType)
                            ->whereNull('content_id')
                            ->where('is_active', true)
                            ->get();
        $schemas = $schemas->merge($pageSchemas);

        // Get specific content schemas if content ID is provided
        if (isset($pageData['id'])) {
            $specificSchemas = Schema::getForContent($pageType, $pageData['id']);
            $schemas = $schemas->merge($specificSchemas);
        }

        return $schemas->unique('id');
    }

    /**
     * Generate dynamic schema based on content data
     */
    public function generateDynamicSchema($type, $data)
    {
        $baseSchema = [
            '@context' => 'https://schema.org',
            '@type' => $type,
        ];

        switch ($type) {
            case 'Article':
            case 'BlogPosting':
                return array_merge($baseSchema, [
                    'headline' => $data['title'] ?? '',
                    'description' => $data['description'] ?? '',
                    'image' => $data['image'] ?? '',
                    'author' => [
                        '@type' => 'Person',
                        'name' => $data['author'] ?? 'Admin'
                    ],
                    'publisher' => [
                        '@type' => 'Organization',
                        'name' => config('app.name', 'Your Organization'),
                        'logo' => [
                            '@type' => 'ImageObject',
                            'url' => asset('images/logo.png')
                        ]
                    ],
                    'datePublished' => $data['created_at'] ?? date('Y-m-d'),
                    'dateModified' => $data['updated_at'] ?? date('Y-m-d'),
                    'mainEntityOfPage' => [
                        '@type' => 'WebPage',
                        '@id' => request()->url()
                    ]
                ]);

            case 'Organization':
                return array_merge($baseSchema, [
                    'name' => $data['name'] ?? config('app.name'),
                    'url' => $data['url'] ?? config('app.url'),
                    'logo' => $data['logo'] ?? asset('images/logo.png'),
                    'description' => $data['description'] ?? '',
                    'address' => $data['address'] ?? [],
                    'contactPoint' => $data['contact'] ?? []
                ]);

            case 'FAQPage':
                return array_merge($baseSchema, [
                    'mainEntity' => $data['faqs'] ?? []
                ]);

            case 'LocalBusiness':
                return array_merge($baseSchema, [
                    'name' => $data['name'] ?? config('app.name'),
                    'description' => $data['description'] ?? '',
                    'url' => $data['url'] ?? config('app.url'),
                    'telephone' => $data['phone'] ?? '',
                    'address' => $data['address'] ?? [],
                    'geo' => $data['geo'] ?? [],
                    'openingHoursSpecification' => $data['hours'] ?? []
                ]);

            default:
                return array_merge($baseSchema, $data);
        }
    }

    /**
     * Validate and clean schema data
     */
    public function validateSchema($schemaData)
    {
        if (!is_array($schemaData)) {
            return false;
        }

        // Check required fields
        if (!isset($schemaData['@context']) || !isset($schemaData['@type'])) {
            return false;
        }

        // Validate context
        if ($schemaData['@context'] !== 'https://schema.org') {
            return false;
        }

        return true;
    }

    /**
     * Get schema statistics
     */
    public function getSchemaStats()
    {
        return [
            'total' => Schema::count(),
            'active' => Schema::where('is_active', true)->count(),
            'inactive' => Schema::where('is_active', false)->count(),
            'global' => Schema::whereNull('content_type')->count(),
            'content_specific' => Schema::whereNotNull('content_type')->count(),
            'by_type' => Schema::selectRaw('type, count(*) as count')
                                ->groupBy('type')
                                ->pluck('count', 'type')
                                ->toArray()
        ];
    }

    /**
     * Bulk operations for schemas
     */
    public function bulkUpdateStatus($schemaIds, $status)
    {
        return Schema::whereIn('id', $schemaIds)->update(['is_active' => $status]);
    }

    public function bulkDelete($schemaIds)
    {
        return Schema::whereIn('id', $schemaIds)->delete();
    }

    /**
     * Export schemas
     */
    public function exportSchemas($format = 'json')
    {
        $schemas = Schema::all();

        switch ($format) {
            case 'json':
                return $schemas->toJson(JSON_PRETTY_PRINT);
            
            case 'csv':
                $csv = "ID,Name,Type,Content Type,Content ID,Status,Created\n";
                foreach ($schemas as $schema) {
                    $csv .= sprintf(
                        "%d,%s,%s,%s,%s,%s,%s\n",
                        $schema->id,
                        $schema->name,
                        $schema->type,
                        $schema->content_type ?? 'Global',
                        $schema->content_id ?? 'N/A',
                        $schema->is_active ? 'Active' : 'Inactive',
                        $schema->created_at->format('Y-m-d H:i:s')
                    );
                }
                return $csv;
            
            default:
                return $schemas;
        }
    }
} 