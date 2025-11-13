<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteSetting;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::firstOrCreate(
            ['id' => 1], // Use a specific ID to ensure only one record
            [
                'site_name' => 'IndiaIVF',
                'site_email' => 'info@indiaivf.in',
                'site_logo' => null,
                'site_favicon' => null,
                'contact_phone' => '+91 7353873538',
                'contact_address' => 'NOIDA | DELHI | GURGAON | GHAZIABAD | SRINAGAR',
                'facebook_url' => null,
                'twitter_url' => null,
                'instagram_url' => null,
                'youtube_url' => null,
                'linkedin_url' => null,
                'copyright_text' => '© 2025 IndiaIVF. All rights reserved.',
            ]
        );
    }
}
