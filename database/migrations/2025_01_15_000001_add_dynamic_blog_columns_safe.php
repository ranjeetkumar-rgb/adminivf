<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Add columns to blogs table if they don't exist
        Schema::table('blogs', function (Blueprint $table) {
            // Content fields
            if (!Schema::hasColumn('blogs', 'content')) {
                $table->text('content')->nullable()->after('description');
            }
            if (!Schema::hasColumn('blogs', 'excerpt')) {
                $table->text('excerpt')->nullable()->after('content');
            }
            if (!Schema::hasColumn('blogs', 'slug')) {
                $table->string('slug')->nullable()->after('excerpt');
            }
            
            // Publishing fields
            if (!Schema::hasColumn('blogs', 'published')) {
                $table->boolean('published')->default(false)->after('slug');
            }
            if (!Schema::hasColumn('blogs', 'featured')) {
                $table->boolean('featured')->default(false)->after('published');
            }
            if (!Schema::hasColumn('blogs', 'published_at')) {
                $table->timestamp('published_at')->nullable()->after('featured');
            }
            
            // Author fields
            if (!Schema::hasColumn('blogs', 'author_title')) {
                $table->string('author_title')->nullable()->after('author_name');
            }
            if (!Schema::hasColumn('blogs', 'author_bio')) {
                $table->text('author_bio')->nullable()->after('author_title');
            }
            if (!Schema::hasColumn('blogs', 'author_image')) {
                $table->string('author_image')->nullable()->after('author_bio');
            }
            
            // Media fields
            if (!Schema::hasColumn('blogs', 'featured_image')) {
                $table->string('featured_image')->nullable()->after('author_image');
            }
            if (!Schema::hasColumn('blogs', 'video_url')) {
                $table->string('video_url')->nullable()->after('featured_image');
            }
            if (!Schema::hasColumn('blogs', 'video_duration')) {
                $table->string('video_duration')->nullable()->after('video_url');
            }
            if (!Schema::hasColumn('blogs', 'video_description')) {
                $table->text('video_description')->nullable()->after('video_duration');
            }
            if (!Schema::hasColumn('blogs', 'image_caption')) {
                $table->text('image_caption')->nullable()->after('video_description');
            }
            
            // Engagement fields
            if (!Schema::hasColumn('blogs', 'views')) {
                $table->integer('views')->default(0)->after('image_caption');
            }
            if (!Schema::hasColumn('blogs', 'likes')) {
                $table->integer('likes')->default(0)->after('views');
            }
            if (!Schema::hasColumn('blogs', 'comments_count')) {
                $table->integer('comments_count')->default(0)->after('likes');
            }
            if (!Schema::hasColumn('blogs', 'shares')) {
                $table->integer('shares')->default(0)->after('comments_count');
            }
            if (!Schema::hasColumn('blogs', 'rating')) {
                $table->decimal('rating', 3, 2)->nullable()->after('shares');
            }
            
            // Additional fields
            if (!Schema::hasColumn('blogs', 'tags')) {
                $table->text('tags')->nullable()->after('rating');
            }
            if (!Schema::hasColumn('blogs', 'meta_tags')) {
                $table->json('meta_tags')->nullable()->after('tags');
            }
        });
        
        // Add columns to blog_categories table if they don't exist
        Schema::table('blog_categories', function (Blueprint $table) {
            if (!Schema::hasColumn('blog_categories', 'slug')) {
                $table->string('slug')->nullable()->after('name');
            }
            if (!Schema::hasColumn('blog_categories', 'description')) {
                $table->text('description')->nullable()->after('slug');
            }
            if (!Schema::hasColumn('blog_categories', 'color')) {
                $table->string('color')->default('primary-blue')->after('description');
            }
            if (!Schema::hasColumn('blog_categories', 'icon')) {
                $table->string('icon')->nullable()->after('color');
            }
            if (!Schema::hasColumn('blog_categories', 'sort_order')) {
                $table->integer('sort_order')->default(0)->after('icon');
            }
            if (!Schema::hasColumn('blog_categories', 'is_active')) {
                $table->boolean('is_active')->default(true)->after('sort_order');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn([
                'content', 'excerpt', 'slug', 'published', 'featured', 'published_at',
                'author_title', 'author_bio', 'author_image', 'featured_image',
                'video_url', 'video_duration', 'video_description', 'image_caption',
                'views', 'likes', 'comments_count', 'shares', 'rating', 'tags', 'meta_tags'
            ]);
        });
        
        Schema::table('blog_categories', function (Blueprint $table) {
            $table->dropColumn([
                'slug', 'description', 'color', 'icon', 'sort_order', 'is_active'
            ]);
        });
    }
};
