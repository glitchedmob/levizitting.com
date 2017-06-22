@extends("layouts.standard-layout")

@section("content")
    <div class="valign-wrapper" id="contact">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l8 offset-l2 card">
                    <div class="center-align">
                        <h1>
                            Contact Me<i class="medium material-icons" id="email-icon">email</i></h1>
                        <p class="flow-text">
                            Whether you are trying to get a hold of me for feedback, an employment opportunity, or just to chat, I appriciate it all.
                            Except spam. I hate that stuff.
                        </p>
                        <hr>
                    </div>
                    <form method="POST" action="/contact">
                        {{ csrf_field() }}
                        <div class="input-field col s6">
                            <input class="validate" id="name" type="text" name="name">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input class="validate" id="email" type="email" name="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <input class="validate" id="subject" type="text" name="subject">
                            <label for="subject">Subject</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea class="materialize-textarea validate" id="message" type="email" name="message"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <input class="btn waves-effect right" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection