@extends('layout')

@section('content')
    <style>
        .card {
            width: 80% !important;
        }
    </style>
    <section style="margin-top: 90px;" class="content">
        <div class="container">
            <a href="{{ route('getArtists') }}">
                <img class="pointer" src="/img/arrow.svg" alt="">
            </a>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <img src="/storage/{{ $artist->avatar }}" alt="" class="photo">
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 style="margin-top: 25px;">{{ $artist->name }}</h2>
                    <p>Год рождения: {{ date('l jS \of F Y', strtotime($artist->birth_at)) }}</p>
                    <p>Дата смерти: {{ date('l jS \of F Y', strtotime($artist->death_at)) }}</p>
                    <p>Страна: {{ $artist->country }}</p>
                </div>
                <div class="col-lg-12">
                    {!! $artist->biography !!}
                </div>
                @if (count($paintings) !== 0)
                    <div class="col-lg-5">
                        <h2 style="margin-left: 80px;">Картины художника</h2>
                    </div>
                @endif
            </div>
            <div class="row">
                @foreach ($paintings as $painting)
                    <div class="col-lg-4"><img class="picture" src="/storage/{{ $painting->image }}" alt="">
                        <p style="text-align: center;">{{ $painting->title }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection