<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\Models\Project;

//Helpers
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index ()
    {
        $project = Project::all();
        return view('projects.index',compact('project'));
    }

    public function show (string $slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        //dd(Str::slug('hello'));
        return view('projects.show', compact('project'));
    }
}
