<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::published()
            ->latest()
            ->paginate(5);

        $latest = Post::recent(5);
        $popular = Post::popular(5);

        return view("posts.index", compact("posts", "latest", "popular"));
    }

    public function show(Post $post)
    {
        $latest = Post::recent(5);
        $popular = Post::popular(5);

        $post->increment("view_count");

        return view("posts.show", compact("post", "latest", "popular"));
    }


}
