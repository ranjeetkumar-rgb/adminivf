<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;

class UserProfile extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'location', 'consultation_interest', 
        'additional_notes', 'total_comments', 'first_comment_at', 'last_comment_at'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'first_comment_at' => 'datetime',
        'last_comment_at' => 'datetime',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function updateCommentStats()
    {
        $this->update([
            'total_comments' => $this->comments()->count(),
            'last_comment_at' => now()
        ]);
    }

    public static function findOrCreateByEmail($email, $userData = [])
    {
        $profile = self::where('email', $email)->first();
        
        if (!$profile) {
            // Hash password if provided
            if (isset($userData['password'])) {
                $userData['password'] = Hash::make($userData['password']);
            }
            
            $profile = self::create(array_merge([
                'email' => $email,
                'first_comment_at' => now(),
                'last_comment_at' => now()
            ], $userData));
        }
        
        return $profile;
    }

    public function setPasswordAttribute($value)
    {
        if ($value) {
            $this->attributes['password'] = Hash::make($value);
        }
    }
}