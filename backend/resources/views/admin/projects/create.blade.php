@extends("admin.layouts.master")

@section("content")
    <div class="container">
        <div class="row card">
            <h1 class="center-align">Create Project</h1>
            <form class="col s12">
                {{ csrf_field() }}
                <div class="input-field col s12">
                    <input class="validate" id="title" type="text">
                    <label for="title">Title</label>
                </div>
                <div class="file-field input-field col s12">
                    <div class="btn"><span>Images</span>
                        <input type="file" multiple>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload one or more images">
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="chips chips-placeholder validate" id="tags" type="text"></div>
                </div>
                <div class="input-field col s12">
                    <textarea class="materialize-textarea validate" id="body" type="email"></textarea>
                    <label for="body">Body</label>
                </div>
                <input class="btn waves-effect right" type="submit" value="Create">
            </form>
        </div>
    </div>
@endsection