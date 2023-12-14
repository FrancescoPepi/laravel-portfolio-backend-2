@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row row-cols-3">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">create</a>

            @foreach ($projects as $project)
                <div class="col">
                    <div class="card ">
                        <div class="card-header  position-relative">
                            <strong>#</strong>
                            {{ $project->label }}
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill"
                                style="backgroundcolor:{{ $project->type->color }} ">
                                99+
                                <span class="visually-hidden">unread messages</span>
                        </div>
                        <div class="card-body ">
                            {{ $project->type_id }}
                            =

                            <hr>
                            {{ $project->description }}
                            <hr>
                            {{ $project->url }}
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
        </div>
    </div>
    @endforeach
    </div>
@endsection
