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
        Schema::create('page_seo', function (Blueprint $table) {
            $table->id();
            $table->string('page_name', 100)->unique(); // home, services, treatments, centres, training, about, more
            $table->string('page_title', 255);
            $table->text('meta_description');
            $table->string('meta_keywords', 500)->nullable();
            $table->string('focus_keyword', 100)->nullable();
            $table->string('canonical_url')->nullable();
            $table->boolean('index_follow')->default(true);
            
            // Open Graph
            $table->string('og_title', 255)->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_type', 50)->default('website');
            
            // Twitter Card
            $table->string('twitter_title', 255)->nullable();
            $table->text('twitter_description')->nullable();
            $table->string('twitter_image')->nullable();
            $table->string('twitter_card', 50)->default('summary_large_image');
            $table->string('twitter_site', 100)->nullable();
            $table->string('twitter_creator', 100)->nullable();
            
            // Additional SEO
            $table->string('author', 100)->nullable();
            $table->string('robots', 100)->default('index, follow');
            $table->json('schema_data')->nullable(); // For structured data
            
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->index(['page_name', 'is_active']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_seo');
    }
}; 