@extends("admin.layouts.master")

@section("content")
    <div class="container">
        <div class="row card">
            <h1 class="center-align">Create Post</h1>
            <form method="POST" action="/admin/posts/create" class="col s12" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="input-field col s12 m9">
                    <input class="validate" id="title" type="text" name="title">
                    <label for="title">Title</label>
                </div>
                <div class="input-field col s12 m3">
                    <input class="filled-in" id="published" type="checkbox" name="published">
                    <label for="published">Published</label>
                </div>
                <div class="file-field input-field col s12">
                    <div class="btn"><span>Featured Image</span>
                        <input type="file" name="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" name="image">
                    </div>
                </div>
                <div class="input-field col s12">
                    <textarea class="materialize-textarea validate" id="body" name="body"></textarea>
                    <label for="body">Body</label>
                </div>
                <input class="btn waves-effect right" type="submit" value="Create">
            </form>
        </div>
    </div>
@endsection