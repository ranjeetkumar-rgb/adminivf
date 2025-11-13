<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schema extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'description',
        'schema_data',
        'is_active',
        'content_type',
        'content_id'
    ];

    protected $casts = [
        'schema_data' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Get schemas by type
     */
    public static function getByType($type)
    {
        return static::where('type', $type)
                    ->where('is_active', true)
                    ->get();
    }

    /**
     * Get schemas by content type
     */
    public static function getByContentType($contentType)
    {
        return static::where('content_type', $contentType)
                    ->where('is_active', true)
                    ->get();
    }

    /**
     * Get schemas for specific content
     */
    public static function getForContent($contentType, $contentId)
    {
        return static::where('content_type', $contentType)
                    ->where('content_id', $contentId)
                    ->where('is_active', true)
                    ->get();
    }

    /**
     * Get global schemas (not tied to specific content)
     */
    public static function getGlobalSchemas()
    {
        return static::whereNull('content_type')
                    ->whereNull('content_id')
                    ->where('is_active', true)
                    ->get();
    }

    /**
     * Validate schema data
     */
    public function validateSchemaData()
    {
        if (!is_array($this->schema_data)) {
            return false;
        }

        // Basic validation for required schema.org fields
        $requiredFields = ['@context', '@type'];
        foreach ($requiredFields as $field) {
            if (!isset($this->schema_data[$field])) {
                return false;
            }
        }

        return true;
    }

    /**
     * Get formatted schema JSON
     */
    public function getFormattedSchema()
    {
        return json_encode($this->schema_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * Scope for active schemas
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for schemas by type
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }
} 