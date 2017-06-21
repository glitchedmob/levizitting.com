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

    public function store()
    {
        $this->validate(\request(), [
            "title" => "required",
            "body" => "required",
            "image" => "required",
            "file" => "required"
        ]);

        \request()
            ->file("file")
            ->storeAs("images/blog", \request("image"), ["disk" => "public"]);


        $post = new Post(\request(['title', 'image' ,'body']));

        $post->save();

        return redirect("/admin/posts/" . $post->id . "/edit");
    }

    public function edit(Post $post)
    {
        return view("admin.posts.edit", compact("post"));
    }

    public function update(Post $post)
    {
        $this->validate(\request(), [
            "title" => "required",
            "body" => "required",
            "image" => "required"
        ]);

        \request()
            ->file("file")
            ->storeAs("images/blog", \request("image"), ["disk" => "public"]);

        $post->update(\request(['title', 'image' ,'body']));

        return redirect("/admin/posts/" . $post->id . "/edit");
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect("/admin/posts/");
    }

}
