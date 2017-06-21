@extends("admin.layouts.master")

@section("content")
    <div class="container">
        <div class="row card">
            <h1 class="center-align">Edit Post</h1>
            <form class="col s12" method="POST" action="/admin/posts/{{ $post->id }}/edit">
                {{ csrf_field() }}
                <div class="input-field col s12">
                    <input class="validate" id="title" type="text" value="{{ $post->title }}" name="title">
                    <label for="title">Title</label>
                </div>
                <div class="file-field input-field col s12">
                    <div class="btn"><span>Featured Image</span>
                        <input type="file" name="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" value="{{ $post->image }}" name="image">
                    </div>
                </div>
                <div class="input-field col s12">
                    <textarea class="materialize-textarea validate" id="body" name="body">{{ $post->body }}</textarea>
                    <label for="body">Body</label>
                </div>
                <input class="btn waves-effect right" type="submit" value="Update">
                <a class="btn waves-effect red right" href="/admin/posts/{{ $post->id }}/delete"> Delete</a>
            </form>
        </div>
    </div>
@endsection