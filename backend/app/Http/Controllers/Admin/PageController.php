<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
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


    public function projects()
    {
        return view("admin.projects.index");
    }

    public function projectsNew()
    {
        return view("admin.projects.create");
    }

    public function contact()
    {
        return view("admin.contact");
    }
}
