@extends('layout')

@section('content')
<section class="title">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="header-title">
                    <h1 style="font-size: 66px;"> Пробуди в себе гения </h1>
                    <h7 style="font-size: 20px;">
                        Обучайтесь создавать потрясающие рисунки, живопись, калиграфию и многое другое в удобное для вас время
                    </h7>
                </div>
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="header-img">
                    <img style="margin-top: 100px;margin-left:-60px;" src="/img/videoback.png" alt="">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="header-img">
                    <img class="f-right" style="margin-top: -90px; margin-right:-30px;" src="/img/monster21.png"
                        width="570" height="662" alt="">
                </div>
            </div>

        </div>
        <style>
            .buttons {
                padding: 3px 24px !important;
            }

            .card {
                background-color: #F9EBEF !important;
            }
        </style>
        <div class="container" style="margin-top: -70px;">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="text-align: center;">Собрание лучших видео-уроков </h2>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 ml-auto but">
                    <a href="{{ route('getVideos') }}">
                        <button class="buttons {{ is_null($currentCategory) ? 'activee' : '' }}">Все уроки</button>
                    </a>
                </div>
                @foreach ($categories as $category)
                    <div class="col-lg-2 col-md-4 col-sm-6 ml-auto but">
                        <a href="{{ route('getVideos', ['category' => $category->id]) }}">
                            <button class="buttons {{ $currentCategory == $category->id ? 'activee' : ''}}">
                                {{ $category->name }}
                            </button>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <style>
        .card {
            background-color: #F9EBEF !important;
            height: 326px !important;
        }

        .videos {
            padding: 0 !important;
            width: 370px !important;
        }
    </style>
    <div class="container" style="margin-top:40px;">
        <div class="row">
            {{-- {{dd($videos)}} --}}
            @foreach ($videos as $video)
                <div class="col-lg-4">
                    <div class="card videos">
                        <iframe height="360" src="{{ $video["video_url"] }}" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <div class="d-flex">
                            <p style="margin: 8px;">{{ $video["video_description"] }}</p>
                        </div>
                        <div class="like-videos">
                            @php
                                $liked = in_array($video["video_id"], $favVideos)
                            @endphp
                            <a href="{{ route('getVideo', [$video["video_id"], 'like' => $liked]) }}">
                                <img
                                    style="background-color: #fff;float: right;margin:7px;"
                                    src="{{ $liked ? '/img/liked.svg': '/img/like.svg' }}"
                                    alt=""
                                >
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="navi center-block">
                {{ $rawVideos->render() }}
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="/script.js"></script>
@endsection
