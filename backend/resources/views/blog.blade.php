@extends("layouts.blog-layout")

@section("content")
    <div class="col s12 m8 posts">
        <div class="card post">
            <div class="card-image"><img src="images/atlanta.jpg"></div>
            <div class="card-content"><span class="card-title">Blog Title</span>
                <p class="post-meta"><span class="published">Published: </span>May 21, 2017</p>
                <p class="post-body flow-text">
                    I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.
                </p>
                <div class="read-more"><a class="btn waves-effect" href="post.html">Read More...</a></div>
                <div class="post-tags">
                    <p>Tags:</p>
                    <div class="chip">Tag 1</div>
                    <div class="chip">Tag 2</div>
                    <div class="chip">Tag 3</div>
                    <div class="chip">Tag 4</div>
                    <div class="chip">Tag 5</div>
                </div>
            </div>
        </div>
        <div class="card post">
            <div class="card-image"><img src="images/atlanta.jpg"></div>
            <div class="card-content"><span class="card-title">Blog Title</span>
                <p class="post-meta"><span class="published">Published: </span>May 21, 2017</p>
                <p class="post-body flow-text">
                    I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.
                </p>
                <div class="read-more"><a class="btn waves-effect" href="post.html">Read More...</a></div>
                <div class="post-tags">
                    <p>Tags:</p>
                    <div class="chip">Tag 1</div>
                    <div class="chip">Tag 2</div>
                    <div class="chip">Tag 3</div>
                    <div class="chip">Tag 4</div>
                    <div class="chip">Tag 5</div>
                </div>
            </div>
        </div>
        <div class="card post">
            <div class="card-image"><img src="images/atlanta.jpg"></div>
            <div class="card-content"><span class="card-title">Blog Title</span>
                <p class="post-meta"><span class="published">Published: </span>May 21, 2017</p>
                <p class="post-body flow-text">
                    I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.
                </p>
                <div class="read-more"><a class="btn waves-effect" href="post.html">Read More...</a></div>
                <div class="post-tags">
                    <p>Tags:</p>
                    <div class="chip">Tag 1</div>
                    <div class="chip">Tag 2</div>
                    <div class="chip">Tag 3</div>
                    <div class="chip">Tag 4</div>
                    <div class="chip">Tag 5</div>
                </div>
            </div>
        </div>
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