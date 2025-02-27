<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Translatable\Facades\Translatable;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Translatable::fallback(
            fallbackLocale: 'da',
        );

        $locale = $this->getDomainTldLocale();

        LaravelLocalization::setLocale($locale);
    }

    public function getDomainTldLocale()
    {
        $urlHost = request()->getHttpHost();
        $tld = pathinfo(request()->getHost(), PATHINFO_EXTENSION);

        $parsedUrl = parse_url($urlHost);

        $host = explode('.', $parsedUrl['path']);

        $subdomain = $host[0];

        $locale = 'en';

        if (
            $tld == 'dk' || $subdomain == 'dk'
        ) {
            $locale = 'da';
        }
        if (
            $tld == 'com' || $subdomain == 'en'
        ) {
            $locale = 'en';
        }

        return $locale;
    }
}
