<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Download;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class DownloadController extends Controller
{
    public function downloadFile(Request $request)
    {
        $file = $request->file('file');
        return response()->download($file);
    }

    public function index()
    {
        $downloads = Download::all();
        return view('downloads.index', compact('downloads'));
    }

    public function show($slug)
    {
        $download = Download::where('slug->' . LaravelLocalization::getCurrentLocale(), $slug)->firstOrFail();
        return view('downloads.show', compact('download'));
    }
}
