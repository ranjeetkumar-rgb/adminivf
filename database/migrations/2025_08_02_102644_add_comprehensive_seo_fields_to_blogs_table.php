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
        Schema::table('blogs', function (Blueprint $table) {
            // Essential SEO Fields
            $table->string('og_title')->nullable()->after('meta_keywords');
            $table->text('og_description')->nullable()->after('og_title');
            $table->string('og_image')->nullable()->after('og_description');
            $table->string('canonical_url')->nullable()->after('og_image');
            $table->string('focus_keyword')->nullable()->after('canonical_url');
            $table->string('author_name')->nullable()->after('focus_keyword');
            $table->boolean('index_follow')->default(true)->after('author_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn([
                'og_title', 'og_description', 'og_image', 'canonical_url', 
                'focus_keyword', 'author_name', 'index_follow'
            ]);
        });
    }
};
