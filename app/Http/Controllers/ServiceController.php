<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', [
            'services' => $services
        ]);
    }

    public function show($slug)
    {
        $service = Service::where('slug->' . LaravelLocalization::getCurrentLocale(), $slug)->firstOrFail();
        return view('services.show', [
            'service' => $service
        ]);
    }
}
