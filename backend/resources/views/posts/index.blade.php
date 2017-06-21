@extends("layouts.blog-layout")

@section("content")
    <div class="col s12 m8 posts">
        @foreach($posts as $post)
            <div class="card post">
                <div class="card-image"><img src="/images/atlanta.jpg"></div>
                <div class="card-content"><span class="card-title">{{ $post->title }}</span>
                    <p class="post-meta"><span class="published">Published: </span>May 21, 2017</p>
                    <p class="post-body flow-text">{{ $post->body }}</p>
                    <div class="read-more"><a class="btn waves-effect" href="/blog/{{ $post->id  }}">Read More...</a></div>
                </div>
            </div>
        @endforeach
        <ul class="pagination center-align">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active teal lighten-2"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
@endsection