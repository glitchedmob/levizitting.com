<div class="col s12 m4">
    <div class="card sidebar">
        <div class="card-content">
            <h5>Recent Posts</h5>
            <ul>
                @foreach($latest as $post)
                    <li>
                        <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                    </li>
                @endforeach
            </ul><br>
            <h5>Popular Posts</h5>
            <ul>
                @foreach($popular as $post)
                    <li>
                        <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                    </li>
                @endforeach
            </ul><br>
        </div>
    </div>
</div>