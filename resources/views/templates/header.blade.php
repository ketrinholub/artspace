<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Art Space</title>
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Exo+2&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('head')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
    @endif

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="    max-width: 900px!important;">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-11">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><p style="margin: 10px;font-size: 45px;">&times;<p></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">
                            <h8>ВХОД</h8>
                            <form method="POST" action="{{ route('login')}}">
                                @csrf
                                <p style="margin-top: 30px;">Имя пользователя или email *</p>
                                <input class="inputreg" maxlength="25" size="40" name="email">
                                <p style="margin-top: 30px;">Пароль</p>
                                <input type="password" maxlength="25" size="40" name="password">
                                <button class="regbutton">ВОЙТИ</button>
                            </form>
                        </div>

                        <div class="col-lg-5">
                            <h8>Регистрация</h8>
                            <form method="POST" action="{{ route('signup')}}">
                                @csrf
                                <p style="margin-top: 30px;"> Email адрес *</p>
                                <input maxlength="25" size="40" name="email" required>
                                    <p style="margin-top: 30px;"> Имя пользователя *</p>
                                <input maxlength="25" size="40" name="name" required>
                                <p style="margin-top: 30px;">Пароль *</p>
                                <input type="password" maxlength="25" size="40" name="password" required>
                                <button class="regbutton" type="submit">Зарегистрироваться</button>
                            </form>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header id="header" class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-2 ">
                    <a href="/"><img src="/img/logo.svg" alt="" class="logo"></a>
                </div>
                <div class="col-lg-9 ">
                    <div style="margin-top: 23px;" class="d-flex f-right column">
                        @auth
                            <a href="{{ route('getProfile') }}">
                                <img src="/storage/{{ Auth::user()->avatar }}" class="avatar-small" alt="{{ Auth::user()->name }} avatar">
                            </a>
                        @endauth
                        @guest
                            <button
                                type="button"
                                data-toggle="modal"
                                data-target=".bd-example-modal-lg"
                                class="login item"
                            >
                                ВХОД
                            </button>
                        @endguest
                        <a href="#menu" id="toggle">
                            <span></span>
                        </a>
                        <div id="menu">
                            <ul>
                                <li><a href="/">ГЛАВНАЯ</a></li>
                                <li><a href="/videos">ВИДЕО-УРОКИ</a></li>
                                <li><a href="/tests">ТЕСТЫ</a></li>
                                <li><a href="/blogs">БЛОГ</a></li>
                                <li><a href="/artists">ХУДОЖНИКИ</a></li>
                                <li><a href="/profile">ПРОФИЛЬ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
