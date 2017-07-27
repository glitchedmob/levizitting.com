@extends("layouts.standard-layout")

@section("content")
    <div class="valign-wrapper" id="home-header">
        <div class="container">
            <div class="row">
                <div class="col l12">
                    <div class="card white center-align" id="home-profile-card">
                        <div class="row">
                            <div class="col s12 m6">
                                <img id="home-profile-img" src="images/profile.jpg">
                                <h1>Levi Zitting</h1></div>
                            <div class="col s12 m6">
                                <p>I am a programmer, creator, and life long learner</p>
                                <p>Welcome to my website.<br>While you're here check out some of the stuff I've been working on</p>
                                <div class="cta-buttons">
                                    <div class="row">
                                        <div class="col s12 m12 l6"><a class="btn waves-effect" href="/blog">Blog</a></div>
                                        <div class="col s12 m12 l6"><a class="btn waves-effect" href="/projects">Projects</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection