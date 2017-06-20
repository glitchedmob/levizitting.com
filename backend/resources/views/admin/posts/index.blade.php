@extends("admin.layouts.master")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <h1 class="center-align">Manage Posts</h1><a class="btn waves-effect" id="new-post" href="/admin/posts/new">New Post</a>
                    <table class="display" id="posts-table">
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
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <div class="chip">Frontend</div>
                                    <div class="chip">Backend</div>
                                </td>
                                <td>{{ $post->created_at }}</td>
                                <td><a class="btn waves-effect" href="/admin/posts/{{ $post->id }}/edit">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection