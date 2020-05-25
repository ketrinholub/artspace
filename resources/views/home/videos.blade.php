<section id="videos" class="videos blog">
    <div class="col-12" style="text-align: center;margin-top: 75px;">
        <h2>Новые видео - уроки</h2>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        @php
                            $firstItem = array_slice($videos, 0, 2)
                        @endphp
                        @foreach ($firstItem as $video)
                            <div class="col-lg-5 col-md-5">
                                <div class="card videos">
                                    <iframe height="360" src="{{ $video["video_url"] }}" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="d-flex">
                                        <p style="margin-top: 8px;">{{ $video["description"] }}</p> <img style="height: 25px;
                                        margin-top: 10px;    margin-left: 50px;" src="/img/like.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        @php
                            $secondItem = array_slice($videos, 2, 2)
                        @endphp
                        @foreach ($secondItem as $video)
                            <div class="col-lg-5 col-md-5">
                                <div class="card videos">
                                    <iframe height="360" src="{{ $video["video_url"] }}" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="d-flex">
                                        <p style="margin-top: 8px;">{{ $video["description"] }}</p> <img style="height: 25px;
                                        margin-top: 10px;    margin-left: 50px;" src="/img/like.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        @php
                            $thirdItem = array_slice($videos, 4, 2)
                        @endphp
                        @foreach ($thirdItem as $video)
                            <div class="col-lg-5 col-md-5">
                                <div class="card videos">
                                    <iframe height="360" src="{{ $video["video_url"] }}" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="d-flex">
                                        <p style="margin-top: 8px;">{{ $video["description"] }}</p> <img style="height: 25px;
                                        margin-top: 10px;    margin-left: 50px;" src="/img/like.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>


        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12"> <a href="{{ route('getVideos') }}" class="readmore">Показать все</a></div>
        </div>
    </div>

    <div class="container">
        <div style="margin-bottom: 129px;" class="row">
            <div class="col-12" style="text-align: center;margin-top: 75px;">
                <h2>Блог</h2>
            </div>
            @foreach ($blogs as $blog)
                <div class="col-lg-6">
                    <div class="postcard">
                        <img href="{{ route('getBlog', $blog->id) }}" src="/storage/{{ $blog->image }}" alt="" class="news">
                        <div class="news-title">
                            <a href="{{ route('getBlog', $blog->id) }}">{{ $blog->title }}</a>
                            <a class="readmore" href="{{ route('getBlog', $blog->id) }}">читать</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>