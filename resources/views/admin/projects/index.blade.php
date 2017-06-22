@extends("admin.layouts.master")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <h1 class="center-align">Manage Projects</h1><a class="btn waves-effect" id="new-post" href="/admin/projects/create">New Project</a>
                    <table class="display" id="projects-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Published</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->created_at }}</td>
                                <td><a class="btn waves-effect" href="/admin/projects/{{ $project->id }}/edit">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection