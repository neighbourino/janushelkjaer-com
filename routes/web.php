<?php

use App\Livewire\Articles\IndexArticles;
use App\Livewire\Articles\ShowArticle;
use App\Livewire\Pages\About;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('welcome');

Route::get('about', About::class)->name('pages.about');

Route::get('articles', IndexArticles::class)->name('articles.index');
Route::get('articles/{article}', ShowArticle::class)->name('articles.show');
