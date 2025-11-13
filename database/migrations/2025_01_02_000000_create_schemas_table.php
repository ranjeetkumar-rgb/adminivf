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
        Schema::create('schemas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('type', 100); // article, product, organization, faq, etc.
            $table->text('description')->nullable();
            $table->json('schema_data');
            $table->boolean('is_active')->default(true);
            $table->string('content_type', 50)->nullable(); // blog, testimonial, faq, etc.
            $table->integer('content_id')->nullable(); // specific content ID if applicable
            $table->timestamps();
            
            $table->index(['type', 'content_type', 'content_id'], 'schemas_type_content_index');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schemas');
    }
}; 