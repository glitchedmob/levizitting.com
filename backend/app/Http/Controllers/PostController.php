<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()
            ->paginate(5);

        return view("posts.index", compact("posts"));
    }

    public function show(Post $post)
    {
        return view("posts.show", compact("post"));
    }
}
