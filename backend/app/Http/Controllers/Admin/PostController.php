<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Post;
use App\Log;

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

        $file = \request()->file("file");
        if( !empty($file)) {
            $file->storeAs("blog", \request("image"), ["disk" => "public"]);
        }

        $post = new Post(\request(['title', 'image' ,'body']));

        $post->slug = $this->generateSlug(\request('title'));

        $post->save();

        return redirect("/admin/posts/" . $post->slug . "/edit");
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

        $file = \request()->file("file");
        if( !empty($file)) {
            $file->storeAs("blog", \request("image"), ["disk" => "public"]);
        }

        $post->slug = $this->generateSlug(\request('title'));

        $post->update(\request(['title', 'image' ,'body']));

        return redirect("/admin/posts/" . $post->slug . "/edit");
    }

    public function delete(Post $post)
    {
        if(Auth::check()) {
            $post->delete();
        }

        return redirect("/admin/posts/");
    }

    // Takes the title of a post, lower cases it, and replaces spaces with dashes
    private function generateSlug($title)
    {
        $slug = strtolower($title);
        return  str_replace(" ","-", $slug);
    }

}
