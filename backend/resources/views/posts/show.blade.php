@extends("layouts.blog-layout")

@section("content")
    <div class="col s12 m8 posts">
        <div class="card post">
            <div class="card-image"><img src="/images/blog/{{ $post->image }}"></div>
            <div class="card-content"><span class="card-title">{{ $post->title }}</span>
                <p class="post-meta"><span class="published">Published: </span>May 21, 2017</p>
                <p class="post-body flow-text">{{ $post->body }}</p>
            </div>
        </div>
    </div>
@endsection