@extends('layouts.main')
@section('body')
    <div class="container-fluid bg-light">
        <div class="container mt-5">
            <div class="row min-vh-100">
                <div class="col-md-12 p-3">
                    <table class="table table-bordered table-striped">
                        <thead class="bg-white">
                            <tr>
                                <th scope="col">Proyek</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Build With</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($webs as $web)
                                <tr>
                                    <td class="w-25"> {{ $web->nama }} </td>
                                    <td class="w-25"> {{ $web->keterangan }} </td>
                                    <td> {{ $web['build'] }} </td>
                                    <td> <a href="/portfolio/web-programming/{{ $web->slug }}">Detail</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
