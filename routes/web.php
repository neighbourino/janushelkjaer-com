<?php

use App\Livewire\Articles\IndexArticles;
use App\Livewire\Articles\ShowArticle;
use App\Livewire\Pages\About;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DownloadController;
use App\Http\Middleware\SetLocale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Http\Middleware\CheckTLD;
use Illuminate\Support\Facades\Lang;


Route::group(
    [
        // 'prefix' => LaravelLocalization::setLocale(),
        //'middleware' => ['localize']
    ],
    function () {

        Route::get(LaravelLocalization::transRoute('routes.articles'), [BlogController::class, 'index'])->name('routes.articles');
        Route::get(LaravelLocalization::transRoute('routes.article'), [BlogController::class, 'show'])->name('routes.article');
        // projects
        Route::get(LaravelLocalization::transRoute('routes.projects'), [ProjectController::class, 'index'])->name('projects.index');
        Route::get(LaravelLocalization::transRoute('routes.project'), [ProjectController::class, 'show'])->name('projects.show');

        // services
        Route::get(LaravelLocalization::transRoute('routes.services'), [ServiceController::class, 'index'])->name('services.index');
        Route::get(LaravelLocalization::transRoute('routes.service'), [ServiceController::class, 'show'])->name('services.show');

        // downloads
        Route::get(LaravelLocalization::transRoute('routes.downloads'), [DownloadController::class, 'index'])->name('downloads.index');
        Route::get(LaravelLocalization::transRoute('routes.download'), [DownloadController::class, 'show'])->name('downloads.show');

        Route::get('/{any?}', [PageController::class, 'show'])->where('any', '.*')->name('pages.show');
    }
);
