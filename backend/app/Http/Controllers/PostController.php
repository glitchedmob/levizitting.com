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

        $latest = $this->latest(5);
        $popular = $this->popular(5);

        return view("posts.index", compact("posts", "latest", "popular"));
    }

    public function show(Post $post)
    {
        $latest = $this->latest(5);
        $popular = $this->popular(5);

        $post->increment("view_count");

        return view("posts.show", compact("post", "latest", "popular"));
    }

    private function latest($limit)
    {
        return Post::latest()
            ->limit($limit)
            ->get();
    }

    private function popular($limit)
    {
        return Post::orderBy('view_count', 'desc')
            ->limit($limit)
            ->get();
    }

}
