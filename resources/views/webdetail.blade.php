@extends('layouts.main')
@section('body')
    <div class="container-fluid bg-light">
        <div class="container mt-5">
            <div class="row min-vh-100">
                <div class="col-md-12 p-3">
                    <h2>{{ $web->nama }}</h2>
                    <h6>
                        <small class="text-muted">{{ $web->build }} - </small>
                        <a class="text-decoration-none" href="/portfolio/{{ $web->job->slug }}">
                            <small>{{ $web->job->nama }}</small>
                        </a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
@endsection
