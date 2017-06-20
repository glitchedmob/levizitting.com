<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index(Post $posts)
    {
        // Retrieve latest posts using the Post eloquent model
        $posts = Post::latest()
            ->get();

        return view("admin.posts.index", compact("posts"));
    }

    public function create()
    {
        return view("admin.posts.create");
    }

    public function edit(Post $post)
    {
        return view("admin.posts.edit", compact("post"));
    }

}
