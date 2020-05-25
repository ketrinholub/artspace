@extends('layout')

@section('content')
<script>
    (function ($) {
      $(function () {

        $('ul.tabs__caption').on('click', 'li:not(.activeee)', function () {
          $(this)
            .addClass('activeee').siblings().removeClass('activeee')
            .closest('div.tabs').find('div.tabs__content').removeClass('activeee').eq($(this).index()).addClass('activeee');
        });

      });
    })(jQuery);
</script>

<style>
    .tabs__content {
        display: none;
        /* по умолчанию прячем все блоки */
    }

    .tabs__content.activeee {
        display: block;
        /* по умолчанию показываем нужный блок */
    }

    .my-work {
        width: 370px;
        height: 279px;
    }

    .col-lg-4.my-work-container {
        max-width: unset !important;
    }
</style>
<div class="container">
    <div style="margin-top: 50px;" class="row">
        <div class="col-lg-3"><img class="avatar" src="/storage/{{ $user->avatar }}" alt="">
        </div>
        <div class="col-lg-6">
            <h4>{{ $user->name }}</h4>
            <p>{{ $user->description }}</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</div>
<div class="container">
    <div class="row">
        <div class="tabs">
            <ul class="tabs__caption container">
                <li style="margin-right: -9px; height: 47px;" class="activeee  btn">Портфолио</li>
                <li class="btn">Избранное<img style="float: right;" src="img/like.svg" alt=""></li>
            </ul>

            <div style="background: none!important;color:#000!important;" class="tabs__content activeee">
                <div id="tabs-1" class="works">
                    <div id="works" class="container">
                        <div style="margin-top: 15px;margin-bottom: 15px;" class="row">
                            <div class="add-work"><img src="img/add.svg" alt=""></div>
                            <p style="margin-left: 15px; font-size: 25px; line-height: 30px;">
                                Добавить работу
                            </p>
                        </div>
                        <div class="row">
                            @foreach ($userPaintings as $userPainting)
                                <div class="col-lg-4 my-work-container"><img class="my-work" src="/storage/{{ $userPainting->image }}" alt=""></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div style="background: none!important;color:#000!important;" class="tabs__content">
                <div class="container" id="tabs-2">
                    <div class="row">
                        @foreach ($favVideos as $video)
                            <div class="col-lg-4">
                                <div class="card videos">
                                    <iframe height="360" src="{{ $video->video_url }}" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="d-flex">
                                        <p style="margin: 8px;">{{ $video->video_description }}</p>
                                    </div>
                                    <div class="like-videos">
                                        <a href="{{ route('getVideo', [$video->video_id, 'like' => '1']) }}">
                                            <img
                                                style="background-color: #fff;float: right;margin:7px;"
                                                src="/img/liked.svg"
                                                alt=""
                                            >
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div><!-- .tabs-->
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
@endsection