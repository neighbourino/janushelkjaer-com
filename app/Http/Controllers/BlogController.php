<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class BlogController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', [
            'posts' => PostResource::collection($posts)
        ]);
    }
    public function show($slug)
    {
        $post = Post::where('slug->' . LaravelLocalization::getCurrentLocale(), $slug)->firstOrFail();
        return view('posts.show', [
            'post' => PostResource::make($post)
        ]);
    }
}
