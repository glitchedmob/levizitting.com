@extends("admin.layouts.master")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <h1 class="center-align">Manage Projects</h1><a class="btn waves-effect" id="new-post" href="/admin/projects/new">New Project</a>
                    <table class="display" id="projects-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Tags</th>
                            <th>Published</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>First Post</td>
                            <td>
                                <div class="chip">Frontend						</div>
                                <div class="chip">Backend	</div>
                            </td>
                            <td>06-16-2017</td>
                            <td><a class="btn waves-effect" href="edit-post.html">Edit</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection