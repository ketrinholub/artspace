@extends('layout')

@section('content')
    <section class="title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <div class="header-title">
                        <h1 style="font-size: 66px;"> лучшие художники различных направлений </h1>
                        <h7 style="font-size: 25px;">
                            Найдите для себя идеального учителя и создавайте искусство!
                        </h7>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-img">
                        <img src="/img/art-header.png" style="margin-top: -100px;" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="header-img img-second">
                        <img style="margin-top: 120px;" class="f-right" src="/img/art-header3.png" alt="">
                    </div>
                </div>

            </div>
        </div>

    </section>
    <style>
        .card {
            width: 80% !important;
        }
    </style>
    <section class="content">
        <div class="container">
            <div class="row">
                @foreach ($artists as $artist)
                    <div class="col-lg-4">
                        <div class="card top">
                            <img src="/storage/{{ $artist->avatar }}" alt="" class="photo">
                            <h7 style="text-align: center; margin-top: 15px;">
                                <a href="{{ route('getArtist', [$artist->id]) }}">
                                    {{$artist->name}}
                                </a>
                            </h7>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Pagination -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navi center-block">
                    {{ $artists->render() }}
                </div>
            </div>
        </div>
    </div>
@endsection