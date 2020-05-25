@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <a href="{{ route('getBlogs') }}">
            <img class="pointer" src="/img/arrow.svg" alt="">
        </a>
        <div class="col-lg-12">
            <div class="newsfull">
                <h3>{{ $blog->title }}</h3>
                <div class="col-lg-12"> <img class="postimg" src="/storage/{{$blog->image}}" alt=""></div>
                {!! $blog->body !!}
            </div>
        </div>
    </div>
</div>
@endsection