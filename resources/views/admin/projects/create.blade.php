@extends("admin.layouts.master")

@section("content")
    <div class="container">
        <div class="row card">
            <h1 class="center-align">Create Project</h1>
            <form class="col s12" method="POST" action="/admin/projects/create" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="input-field col s12">
                    <input class="validate" id="title" type="text" name="title">
                    <label for="title">Title</label>
                </div>
                <div class="file-field input-field col s12">
                    <div class="btn"><span>Image</span>
                        <input type="file" name="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload one or more images" name="image">
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