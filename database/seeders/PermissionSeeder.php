<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $permissions = [
            'view-users',
            'create-users',
            'edit-users',
            'delete-users',
            'view-roles',
            'create-roles',
            'edit-roles',
            'delete-roles',
            'view-profile',
            'edit-profile',
            'delete-profile',
            'view-faqs',
            'create-faqs',
            'edit-faqs',
            'delete-faqs',
            'view-testimonials',
            'create-testimonials',
            'edit-testimonials',
            'delete-testimonials',
            'view-blogs',
            'create-blogs',
            'edit-blogs',
            'delete-blogs',
            'view-site-settings',
            'create-site-settings',
            'edit-site-settings',
            'delete-site-settings',
            'view-blog-categories',
            'create-blog-categories',
            'edit-blog-categories',
            'delete-blog-categories',
            'view-consultations',
            'create-consultations',
            'edit-consultations',
            'delete-consultations',
            'view-appointments',
            'create-appointments',
            'edit-appointments',
            'delete-appointments',
            'view-performance',
            'clear-cache',
            'optimize-app',
            'view-page-seo',
            'create-page-seo',
            'edit-page-seo',
            'delete-page-seo',
            'view-image-compression',
            'create-image-compression',
            'edit-image-compression',
            'delete-image-compression',
            'view-image-compression-presets',
            'create-image-compression-presets',
            'edit-image-compression-presets',
            'delete-image-compression-presets',
            'view-seo-settings',
            'create-seo-settings',
            'edit-seo-settings',
            'delete-seo-settings',
            'view-file-upload',
            'create-file-upload',
            'edit-file-upload',
            'delete-file-upload',
        ];
        foreach ($permissions as $permission) {
              Permission::firstOrCreate(['name' => $permission]);
        }
    }
}
