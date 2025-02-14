<?php

use App\Livewire\Articles\IndexArticles;
use App\Livewire\Articles\ShowArticle;
use App\Livewire\Pages\About;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::get('/', function () {

    dd(LaravelLocalization::getLocalizedURL('en'));
    return response()->redirectTo('/en');
});

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localize']], function () {

    Route::get('/', function () {
        if (config('app.env') == 'production') {
            return view('home');
        }
        return view('welcome');
    })->name('welcome');

    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('about', About::class)->name('pages.about');
    #Route::get('da/om', About::class)->name('pages.about');

    Route::get(LaravelLocalization::transRoute('routes.articles'), IndexArticles::class)->name('articles.index');
    Route::get(LaravelLocalization::transRoute('routes.article'), ShowArticle::class)->name('articles.show');
});
