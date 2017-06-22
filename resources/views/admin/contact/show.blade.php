@extends("admin.layouts.master")

@section("content")
    <div class="container" id="show-contact-submission">
        <div class="row card">

            <h1 class="center-align">Contact Submissions</h1>
            <p><strong>Name: </strong>{{ $contact->name }}</p>
            <p><strong>Sent: </strong>{{ $contact->created_at }}</p>
            <p><strong>Email: </strong>{{ $contact->email }}</p>
            <p><strong>Subject: </strong>{{ $contact->subject }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $contact->message }}</p>
        </div>
    </div>
@endsection