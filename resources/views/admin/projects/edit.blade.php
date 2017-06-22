@extends("admin.layouts.master")

@section("content")
    <div class="container">
        <div class="row card">
            <h1 class="center-align">Edit Project</h1>
            <form class="col s12" method="POST" action="/admin/projects/{{ $project->id }}/edit" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="input-field col s12">
                    <input class="validate" id="title" type="text" value="{{ $project->title }}" name="title">
                    <label for="title">Title</label>
                </div>
                <div class="input-field col s12">
                    <input class="validate" id="description" type="text" name="description" value="{{ $project->description }}">
                    <label for="description">Description</label>
                </div>
                <div class="file-field input-field col s12">
                    <div class="btn"><span>Image</span>
                        <input type="file" name="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" value="{{ $project->image }}" name="image">
                    </div>
                </div>
                <div class="input-field col s12">
                    <textarea class="materialize-textarea validate" id="body" name="body">{{ $project->body }}</textarea>
                    <label for="body">Body</label>
                </div>
                <input class="btn waves-effect right" type="submit" value="Update">
            </form>
            <form id="delete-item" method="POST" action="/admin/projects/{{ $project->id }}/delete">
                {{ csrf_field() }}
                <input class="btn waves-effect red" type="submit" value="Delete" >
            </form>
        </div>
    </div>
@endsection