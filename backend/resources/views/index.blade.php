@extends("layouts.standard-layout")

@section("content")
    <div class="valign-wrapper" id="home-header">
        <div class="container">
            <div class="row">
                <div class="col s10 offset-s1">
                    <div class="card white center-align" id="home-profile-card"><img id="home-profile-img" src="images/profile.jpg">
                        <h1>Levi Zitting</h1>
                        <p>I am a programmer, creator, and life long learner</p>
                        <p class="flow-text">Welcome to my website.<br>While you're here check out some of the stuff I've been working on</p>
                        <div class="row align-center cta-buttons">
                            <div class="col s12 m6 l3 offset-l3"><a class="btn waves-effect" href="blog.html">Blog</a></div>
                            <div class="col s12 m6 l3"><a class="btn waves-effect" href="projects.html">Projects</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection