<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()
            ->get();

        return view("admin.projects.index", compact("projects"));
    }

    public function create()
    {
        return view("admin.projects.create");
    }

    public function store()
    {
        $this->validate(\request(), [
            "title" => "required",
            "description" => "required",
            "body" => "required",
            "image" => "required",
            "file" => "required"
        ]);

        $file = \request()->file("file");
        if( !empty($file)) {
            $file->storeAs("projects", \request("image"), ["disk" => "public"]);
        }

        $project = new Project(\request(["title", "description", "image", "body"]));

        $project->save();

        return redirect("/admin/projects/" . $project->id . "/edit");
    }

    public function edit(Project $project)
    {
        return view("admin.projects.edit", compact("project"));
    }

    public function update(Project $project)
    {
        $this->validate(\request(), [
            "title" => "required",
            "description" => "required",
            "body" => "required",
            "image" => "required"
        ]);

        $file = \request()->file("file");
        if( !empty($file)) {
            $file->storeAs("projects", \request("image"), ["disk" => "public"]);
        }

        $project->update(\request(["title", "description", "image", "body"]));

        return redirect("/admin/projects/" . $project->id . "/edit");
    }

    public function delete(Project $project)
    {
        if(Auth::check()) {
            $project->delete();
        }

        return redirect("/admin/projects/");
    }
}
