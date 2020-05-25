@extends('layout')

@section('content')
<style>
    .testcard {
        margin-bottom: 10px;
    }
</style>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="col-lg-3"></div>
        <div class="header-title">
            <h2>
                Повысьте свой уровень с помощью тестов
                на знание художественных терминов</h2>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="header-img">
            <img style="margin-top: 130px;" src="/img/monster.png" width="490" height="490" alt="">
        </div>
    </div>

    <div class="col-lg-6">
        <div class="header-img img-second">
            <img class="f-right" style="margin-top: -80px;" src="/img/monster22.png" width="570" height="690" alt="">
        </div>
    </div>

</div>
</div>
<div class="container" style="margin-top: -118px;">
    <div class="row">
        @foreach ($tests as $test)
            <div class="col-lg-4">
                <div class="testcard">
                    <img style="width: 370px; height: 304px" src="/storage/{{ $test->image }}" alt="">
                    <div class="desc">
                        <p style="margin-top: 18px;">
                            <h4>{{ $test->title }}</h4>
                        </p>
                        <a type="button" class="btntest" href="{{ route('getTest', [$test->id]) }}">Начать</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="navi center-block">
                {{ $tests->render() }}
            </div>
        </div>
    </div>
</div>
@endsection