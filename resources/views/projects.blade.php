@extends("layouts.standard-layout")

@section("content")
    <div class="container">
        <div class="row">
            @foreach($projects as $project)
                <div class="col m6">
                    <div class="card large">
                        <div class="card-image"><img src="/images/projects/{{ $project->image }}"><span class="card-title">{{ $project->title }}</span></div>
                        <div class="card-content">
                            <p>{{ $project->description }}</p>
                        </div>
                        <div class="card-action"><a href="#" class="modal-trigger waves-effect center-align teal-text lighten-2-text" data-target="modal{{ $project->id }}">Learn More</a></div>
                        <!-- Modal Structure-->
                        <div class="modal modal-fixed-footer" id="modal{{ $project->id }}">
                            <div class="modal-content project-content">{!! $project->body !!}</div>
                            <div class="modal-footer"><a class="modal-action modal-close waves-effect btn-flat" href="#!">Close</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection