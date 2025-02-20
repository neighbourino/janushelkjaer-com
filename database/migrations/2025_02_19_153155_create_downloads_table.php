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
        Schema::create('downloads', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable();
            $table->json('slug')->nullable();
            $table->json('content')->nullable();
            $table->json('short_description')->nullable();
            $table->json('seo')->nullable();
            $table->json('meta')->nullable();
            $table->json('link_to_product_page')->nullable();
            $table->json('category')->nullable();
            $table->json('file_path')->nullable();
            $table->json('file_type')->nullable();
            $table->json('file_size')->nullable();
            $table->json('file_name')->nullable();
            $table->json('file_extension')->nullable();
            $table->json('file_url')->nullable();
            $table->json('file_description')->nullable();
            $table->json('file_keywords')->nullable();
            $table->json('file_tags')->nullable();
            $table->json('file_category')->nullable();
            $table->json('file_subcategory')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('downloads');
    }
};
