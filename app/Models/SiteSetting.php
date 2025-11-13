<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasImageUpload;

class SiteSetting extends Model
{
    use HasImageUpload;

    protected $fillable = [
        'site_name',
        'site_email',
        'site_logo',
        'site_favicon',
        'contact_phone',
        'whatsapp_number',
        'contact_address',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'youtube_url',
        'linkedin_url',
        'copyright_text',
    ];
}
