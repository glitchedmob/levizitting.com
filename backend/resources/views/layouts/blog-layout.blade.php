@extends("layouts.master")

@section("main")
    <div class="container">
        <div class="row blog-move-down">
            @yield("content")

            @include("layouts.sidebar")
        </div>
    </div>
@endsection