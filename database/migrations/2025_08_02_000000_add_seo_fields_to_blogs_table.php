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
            $table->string('heading_tag')->default('h1')->after('title');
            $table->string('font_size')->default('16px')->after('heading_tag');
            $table->string('line_height')->default('1.6')->after('font_size');
            $table->string('font_family')->default('Arial, sans-serif')->after('line_height');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['heading_tag', 'font_size', 'line_height', 'font_family']);
        });
    }
};
