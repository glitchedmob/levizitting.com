@extends("admin.layouts.master")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <h1 class="center-align">Contact Submissions</h1>
                    <table class="display" id="posts-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ $contact->created_at }}</td>
                                <td><a class="btn waves-effect" href="/admin/contacts/{{ $contact->id }}">View</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection