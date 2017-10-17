
@extends("layouts.blog-layout")

@section('title', $post->title)
@section('share-title', $post->title)
@section('share-image', "https://levizitting.com/images/blog/{$post->image}")

@section("content")
    <div class="col s12 m8 posts">
        <div class="card post">
            <div class="card-image"><img src="/images/blog/{{ $post->image }}"></div>
            <div class="card-content"><span class="card-title">{{ $post->title }}</span>
                <p class="post-meta"><span class="published">Published: </span>{{ $post->created_at->toFormattedDateString() }}</p>
                <p class="post-body flow-text">{!! $post->body !!}</p>
            </div>
        </div>
    </div>
@endsection