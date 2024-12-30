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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('short_description')->nullable();
            $table->string('excerpt')->nullable();
            $table->json('outline')->nullable();

            $table->string('intro')->nullable();
            $table->string('essential_learning_points')->nullable();
            $table->text('body')->nullable();
            $table->json('content')->nullable();
            $table->string('key_takeaways')->nullable();
            $table->string('summary')->nullable();
            $table->string('conclusion')->nullable();
            $table->string('call_to_action')->nullable();

            $table->string('slug')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_image')->nullable();
            $table->string('seo_image_alt')->nullable();
            $table->string('seo_image_title')->nullable();
            $table->string('seo_canonical')->nullable();
            $table->string('seo_no_index')->nullable();
            $table->string('seo_no_follow')->nullable();
            $table->string('seo_no_archive')->nullable();
            $table->string('seo_keywords')->nullable();

            $table->bigInteger('user_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
