<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

    public function logout()
    {
        auth()->logout();

        return redirect("/admin/login");
    }

    public function posts()
    {
        return view("admin.posts");
    }

    public function postsNew()
    {
        return view("admin.new-post");
    }

    public function projects()
    {
        return view("admin.projects");
    }

    public function projectsNew()
    {
        return view("admin.new-project");
    }
}
