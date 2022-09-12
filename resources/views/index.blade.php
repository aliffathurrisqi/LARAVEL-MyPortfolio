@extends('layouts.main')
@section('body')
    <div class="container-fluid bg-light">
        <div class="container mt-3">
            <div class="row align-items-center min-vh-100">
                @foreach ($profiles as $profile)
                    <div class="col-md-7 p-3">
                        <div class="home">
                            <div class="mt-5">
                                <a class="btn btn-github me-2" href={{ $profile['github'] }} target="_blank"><i
                                        class="bi bi-github fs-6"></i></a>
                                <a class="btn btn-linkedin me-2" href={{ $profile['linkedin'] }} target="_blank"><i
                                        class="bi bi-linkedin fs-6"></i></a>
                                <a class="btn btn-instagram me-2" href={{ $profile['instagram'] }} target="_blank"><i
                                        class="bi bi-instagram fs-6"></i></a>
                                <a class="btn btn-whatsapp me-2" href={{ $profile['whatsapp'] }} target="_blank"><i
                                        class="bi bi-whatsapp fs-6"></i></a>
                            </div>
                            <h1 class="mt-2">{{ $profile['name'] }}</h1>
                            <h4>{{ $profile['job'] }}</h4>
                            <p class="text-secondary">
                                {{ $profile['summary'] }}
                            </p>

                        </div>
                    </div>
                    <div class="col-md-5 p-0 text-center p-3">
                        <img src="img/website/{{ $profile['foto'] }}" class="img-profile w-100 rounded-circle mb-3">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white">
        <div class="container">
            <h2 class="mt-5 mb-5 text-center">Keterampilan</h2>
            <div class="row">
                <div class="col-md-6 p-3 d-flex justify-content-center">
                    {{-- <h3 class="mb-3"> <i class="alfari-head-blue bi bi-gear fs-3"></i> Bahasa Pemrograman</h3> --}}
                    <div class="container">
                        <div class="row row-cols-4 row-cols-md-4 g-4 mt-2 d-flex justify-content-center">
                            @foreach ($skill_languages as $skill_language)
                                <div class="col d-flex justify-content-center">
                                    <div
                                        class="skill-language rounded-circle d-flex justify-content-center align-items-center">
                                        <h6>{{ $skill_language['name'] }}</h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-3 d-flex justify-content-center">
                    {{-- <h3 class="mb-3"> <i class="alfari-head-red bi bi-card-heading fs-3"></i> Desain Grafis</h3> --}}
                    <div class="container">
                        <div class="row row-cols-4 row-cols-md-4 g-4 mt-2 d-flex justify-content-center">
                            @foreach ($skill_apps as $skill_app)
                                <div class="col d-flex justify-content-center">
                                    <div class="skill-app rounded-circle d-flex justify-content-center align-items-center">
                                        <img class="app-logo" src="img/website/icons/{{ $skill_app['icon'] }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 p-3">
                    {{-- <h3 class="mb-3"> <i class="alfari-head-blue bi bi-gear fs-3"></i> Bahasa Pemrograman</h3> --}}
                    <div class="container">
                        <div class="row row-cols-4 row-cols-md-4 g-4 mt-2 d-flex justify-content-center">
                            @foreach ($skill_tools as $skill_tool)
                                <div class="col d-flex justify-content-center">
                                    <div class="skill-tool rounded-circle d-flex justify-content-center align-items-center">
                                        <img class="app-logo" src="img/website/icons/{{ $skill_tool['icon'] }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row min-vh-100">
                <div class="col-md-12 p-3 mt-5">
                    <h2 class="mt-5 text-center">Apa Yang Saya Lakukan ?</h2>
                    <div class="container">
                        <div class="row row-cols-1 row-cols-md-2 g-2 mt-2">
                            @foreach ($portofolios as $portofolio)
                                <div class="col mt-5 align-self-center d-flex justify-content-center">
                                    <div class="card text-center p-3 w-75 border-1">
                                        <i class="icon-work {{ $portofolio['icon'] }} fs-1"></i>
                                        <div class="card-body" id="card-body">
                                            <h5 class="card-title">{{ $portofolio['name'] }}</h5>
                                            <p class="card-text text-secondary">
                                                {{ $portofolio['summary'] }}
                                            </p>
                                        </div>
                                        <div class="card-footer border-0 bg-white">
                                            <a class="btn btn-outline-primary"
                                                href="/portfolio/{{ $portofolio['slug'] }}">Portofolio</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
