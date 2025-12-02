<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Traits\HasImageUpload;
use App\Models\BlogCategory;
use App\Models\Comment;
use App\Models\BlogLike;


class Blog extends Model
{
    use HasImageUpload;

    protected $fillable = [
        'title', 'description','description1','description2','description3','description4','description5','key_tests_heading'
        ,'key_tests_content','key_tests_section_1','key_tests_section_2','key_tests_section_3','key_tests_section_4','male_factor_and_key_male_fertility',
        'icsi','lifestyle','nutrition','exercise','avoid','clinic','laboratory_standards','experienced_team',
        'transparent_success_rates','dr_review','previous_attempts','success_after_attempts','emotional_support',
        'partner_support','support_groups','professinal_counselling','personalized_treatment','india_advantage',
        'conclusion','your_journey','user_write_and_tag_create','tags',
        'content', 'excerpt', 'slug', 'image', 'featured_image',
        'meta_title', 'meta_description', 'meta_keywords', 'og_title', 'og_description',
        'og_image', 'canonical_url', 'focus_keyword', 'author_name', 'author_title',
        'author_bio', 'author_image', 'categories', 'published', 'featured',
        'published_at', 'video_url', 'video_duration', 'video_description',
        'image_caption', 'views', 'likes', 'comments_count', 'shares', 'rating',
        'tags', 'meta_tags', 'index_follow',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'published' => 'boolean',
        'index_follow' => 'boolean',
        'meta_tags' => 'array',
        'published_at' => 'datetime',
    ];

    // In your app/Models/Blog.php
    public function categories()
    {
        return $this->belongsToMany(BlogCategory::class);
    }

    // Accessor to get the first category (for backward compatibility)
    public function getCategoryAttribute()
    {
        $categories = $this->getCategoriesAttribute($this->attributes['categories'] ?? null);
        return $categories->first();
    }

    public function getCategoriesAttribute($value)
    {
        if (empty($value)) {
            return collect();
        }
        return BlogCategory::whereIn('id', json_decode($value))->get();
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(BlogLike::class);
    }

    public function approvedComments()
    {
        return $this->hasMany(Comment::class)->approved()->topLevel();
    }

    // Scope for published blogs
    public function scopePublished(Builder $query)
    {
        return $query->where('published', true)
                    ->where('index_follow', true)
                    ->whereNotNull('published_at');
    }

    // Scope for featured blogs
    public function scopeFeatured(Builder $query)
    {
        return $query->where('featured', true);
    }

    // Scope for popular blogs (based on views)
    public function scopePopular(Builder $query, $limit = 5)
    {
        return $query->orderBy('views', 'desc');
    }

    // Scope for recent blogs
    public function scopeRecent(Builder $query, $limit = 6)
    {
        return $query->orderBy('published_at', 'desc');
    }

    // Scope for related blogs
    // public function scopeRelated(Builder $query, $categoryId, $excludeId = null, $limit = 3)
    // {
    //     $query = $query->where('category_id', $categoryId);

    //     if ($excludeId) {
    //         $query->where('id', '!=', $excludeId);
    //     }

    //     return $query->limit($limit);
    // }
    public function scopeRelated(Builder $query, array $categoryIds, $excludeId = null, $limit = 3)
    {
        if (empty($categoryIds)) {
            return $query;
        }
        $query->where(function(Builder $q) use ($categoryIds) {
            foreach ($categoryIds as $id) {
                $q->orWhereJsonContains('categories', $id);
            }
        });
        if ($excludeId) {
            $query->where('id', '!=', $excludeId);
        }
        return $query->limit($limit);
    }

    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
    // Get reading time estimate
    public function getReadingTimeAttribute()
    {
        $content = $this->attributes['content'] ?? '';
        $wordCount = str_word_count(strip_tags($content));
        $readingTime = ceil($wordCount / 200); // Average reading speed: 200 words per minute
        return $readingTime . ' min read';
    }

    // Get excerpt
    public function getExcerptAttribute()
    {
        $excerpt = $this->attributes['excerpt'] ?? '';
        $content = $this->attributes['content'] ?? '';
        return $excerpt ?: \Str::limit(strip_tags($content), 150);
    }

    // Get formatted published date
    public function getFormattedPublishedDateAttribute()
    {
        $publishedAt = $this->attributes['published_at'] ?? null;
        return $publishedAt ? \Carbon\Carbon::parse($publishedAt)->format('F j, Y') : null;
    }

    // Increment views
    public function incrementViews()
    {
        $this->increment('views');
    }

    // Increment likes
    public function incrementLikes()
    {
        $this->increment('likes');
    }

    // Decrement likes
    public function decrementLikes()
    {
        if ($this->likes > 0) {
            $this->decrement('likes');
        }
    }

    // Increment shares
    public function incrementShares()
    {
        $this->increment('shares');
    }

    // Update comments count
    public function updateCommentsCount()
    {
        $this->update(['comments_count' => $this->comments()->approved()->count()]);
    }

    // Get content type (article or video)
    public function getContentTypeAttribute()
    {
        $videoUrl = $this->attributes['video_url'] ?? null;
        return !empty($videoUrl) ? 'video' : 'article';
    }

    // Get video duration for videos
    public function getVideoDurationAttribute()
    {
        $videoDuration = $this->attributes['video_duration'] ?? null;
        $videoUrl = $this->attributes['video_url'] ?? null;

        if ($videoUrl && $videoDuration) {
            return $videoDuration . ' min video';
        }
        return null;
    }

    // Get video embed URL
    public function getVideoEmbedUrlAttribute()
    {
        $videoUrl = $this->attributes['video_url'] ?? null;

        if (!$videoUrl) {
            return null;
        }

        // Parse different video platforms
        if (strpos($videoUrl, 'youtube.com') !== false || strpos($videoUrl, 'youtu.be') !== false) {
            // YouTube URL
            if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $videoUrl, $matches)) {
                return 'https://www.youtube.com/embed/' . $matches[1];
            }
        } elseif (strpos($videoUrl, 'vimeo.com') !== false) {
            // Vimeo URL
            if (preg_match('/vimeo\.com\/(\d+)/', $videoUrl, $matches)) {
                return 'https://player.vimeo.com/video/' . $matches[1];
            }
        } elseif (strpos($videoUrl, '.mp4') !== false || strpos($videoUrl, '.webm') !== false || strpos($videoUrl, '.ogg') !== false) {
            // Direct video file
            return $videoUrl;
        }

        return null;
    }

    // Check if video is from external platform (YouTube/Vimeo)
    public function getIsExternalVideoAttribute()
    {
        $embedUrl = $this->video_embed_url;

        if (!$embedUrl) {
            return false;
        }

        return strpos($embedUrl, 'youtube.com') !== false || strpos($embedUrl, 'vimeo.com') !== false;
    }
}
