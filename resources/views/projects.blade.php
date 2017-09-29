@extends("layouts.standard-layout")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col m10 offset-m1 s12 offset-s0">
                @foreach($projects->chunk(2) as $chuckedProjects)
                    <div class="row">
                        @foreach($chuckedProjects as $project)
                            <div class="col m6 s12">
                                <div class="project" style="background-image: url('/images/projects/{{ $project->image }}');">
                                    <div class="dark-panel" tabindex="0">
                                        <div class="title">
                                            <h4>{{ $project->title }}</h4>
                                        </div>
                                        <div class="body">
                                            {!! $project->body !!}
                                        </div>
                                    </div>
                                    <i class="material-icons arrow-icon" aria-hidden="true">arrow_upward</i>
                                    <div class="un-focuser" tabindex="0"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection