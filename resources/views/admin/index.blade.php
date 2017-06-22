@extends("admin.layouts.master")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col s12 card">
                <h1 class="center-align">Dashboard</h1>
                <h3 class="center-align">Posts</h3>
                <div class="row">
                    <a class="btn waves-effect col s4 offset-s1" href="/admin/posts/create">Create Post</a>
                    <a class="btn waves-effect col s4 offset-s2" href="/admin/posts">Manage Posts</a>
                </div>
                <h3 class="center-align">Projects</h3>
                <div class="row">
                    <a class="btn waves-effect col s4 offset-s1" href="/admin/projects/new">Create Project</a>
                    <a class="btn waves-effect col s4 offset-s2" href="/admin/projects">Manage Projects</a>
                </div>
            </div>
        </div>
    </div>
@endsection