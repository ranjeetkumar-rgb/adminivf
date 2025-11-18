<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'color', 'icon', 'sort_order', 'is_active'];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }

    // Scope for active categories
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope for ordered categories
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc')->orderBy('name', 'asc');
    }

    // Get blogs count for this category
    // public function getBlogsCountAttribute()
    // {
    //     return $this->blogs()->published()->count();
    // }
    public function getBlogsCountAttribute()
    {
        return Blog::published() // Uses the scope from your Blog model
                   ->whereJsonContains('categories', $this->id)
                   ->count();
    }

    // Get category color class
    public function getColorClassAttribute()
    {
        $colorMap = [
            'primary-pink' => 'bg-primary-pink',
            'primary-blue' => 'bg-primary-blue',
            'green' => 'bg-green-500',
            'purple' => 'bg-purple-500',
            'orange' => 'bg-orange-500',
        ];

        return $colorMap[$this->color] ?? 'bg-gray-500';
    }
}
