@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-lg-6">
                <div class="postcard">
                    <img href="{{$blog->id}}" src="/storage/{{$blog->image}}" alt="" class="news">
                    <div class="news-title">
                        <a href="{{ route('getBlog', [$blog->id]) }}">{{$blog->title}}</a>
                        <a class="readmore" href="{{$blog->id}}">читать</a>
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
                {{ $blogs->render() }}
            </div>
        </div>
    </div>
</div>
@endsection
