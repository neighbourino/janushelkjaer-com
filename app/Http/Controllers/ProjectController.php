<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    public function show($slug)
    {
        $project = Project::where('slug->' . LaravelLocalization::getCurrentLocale(), $slug)->firstOrFail();
        return view('projects.show', [
            'project' => $project
        ]);
    }
}
