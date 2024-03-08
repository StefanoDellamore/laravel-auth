<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
//Helpers
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index ()
    {
        $project = Project::all();

        $stringHello = null;
        if(Auth::check()) {
            $user = Auth::user();
            $stringHello = 'Ciao '.$user->name. '!';
        }


        return view('projects.index',compact('project', 'stringHello'));
    }

    public function show (string $slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        //dd(Str::slug('hello'));
        return view('projects.show', compact('project'));
    }
}
