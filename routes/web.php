<?php

use App\Livewire\Articles\IndexArticles;
use App\Livewire\Articles\ShowArticle;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('articles', IndexArticles::class)->name('articles.index');
Route::get('articles/{article}', ShowArticle::class)->name('articles.show');
