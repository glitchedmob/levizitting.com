<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function projects()
    {
        $projects = Project::latest()
            ->get();
        return view('projects', compact("projects"));
    }

    public function about()
    {
        return view('about');
    }
}
