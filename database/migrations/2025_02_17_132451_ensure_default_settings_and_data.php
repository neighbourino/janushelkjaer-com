<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('pages')->insert([
            [
                'title' => '{"en": "Home", "da": "Home"}',
                'slug' => '{"en": "home", "da": "home"}',
                // 'content' => file_get_contents(base_path('data/home.json')),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '{"en": "Blog", "da": "Blog"}',
                'slug' => '{"en": "blog", "da": "blog"}',
                // 'content' => file_get_contents(base_path('data/blog.json')),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        DB::table('posts')->insert([
            [
                'title' => '{"en": "Hello World!", "da": "Hej Verden!"}',
                'slug' => '{"en": "hello-world", "da": "hej-verden"}',
                'published_at' => now()->startOfDay()->startOfYear(),
                'short_description' => '{"en": "This is an example article", "da": "Dette er et eksempel på en artikel"}',
                // 'content' => file_get_contents(base_path('data/helloworld.json')),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        \App\Models\Setting::all()->each->delete();
        \App\Models\Page::all()->each->delete();
    }
};
