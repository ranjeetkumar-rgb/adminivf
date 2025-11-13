<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogLike extends Model
{
    protected $fillable = [
        'blog_id',
        'user_identifier',
        'ip_address',
        'user_agent'
    ];

    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class);
    }

    /**
     * Check if a user has liked a blog
     */
    public static function hasUserLiked($blogId, $userIdentifier): bool
    {
        return self::where('blog_id', $blogId)
                   ->where('user_identifier', $userIdentifier)
                   ->exists();
    }

    /**
     * Get user identifier (user_id for authenticated, session_id for anonymous)
     */
    public static function getUserIdentifier(): string
    {
        if (auth()->check()) {
            return 'user_' . auth()->id();
        }
        
        return 'session_' . session()->getId();
    }
}