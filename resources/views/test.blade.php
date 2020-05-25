@extends('layout')

@section('head')
    <link href="/quiz/css/reset.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/quiz/css/slickQuiz.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/quiz/css/master.css" media="screen" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <a href="{{ route('getTests') }}">
            <img class="pointer" src="/img/arrow.svg" alt="">
        </a>
    </div>
    <div id="slickQuiz" class="container" style="margin-top: 20px;">
        <div class="quizArea">
        </div>
        <div class="quizResults">
            <h9 class="quizScore">Your Score: <span></span></h9><br>
            <h9 class="quizLevel">Ranking: <span></span></h9>
            <div class="quizResultsCopy">
            </div>
        </div>
        <div class="container" style="margin-top: 300px;">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contacts">
                        <li class="cotscts-label">контакты</li>
                        <li class="cotscts-label">+38 (066) 6094512</li>
                        <li class="cotscts-label">ArtSpace@gmail.com</li>
                    </div>
                </div>
                <div class="col-lg-2">
                    <img src="img/logo.svg" alt="" class="logo">
                    <div style="margin-top: 20px" class="d-flex f-right">
                        <img style="margin:5px;" src="img/facebook.svg" alt="">
                        <img style="margin:5px;" src="img/instagram.svg" alt="">
                        <img style="margin:5px;" src="img/Vector.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- {{ dd($test->questions) }} --}}
@endsection
{{-- /storage/tests/question/ --}}
@section('footer')
    <script src="/quiz/js/jquery.js"></script>
    <script type="text/javascript">
        const questions = JSON.parse(`{{ $test->questions }}`.replace(/&quot;/g, '"'));

        var quizJSON = {
            info: {
                results: "",
                level1: "Эксперт",
                level2: "Ботан",
                level3: "Знаток",
                level4: "Новичек",
                level5: "Делетант",
            },
            questions: questions.map(question => ({
                q: `${question.title}<br>
                    <div class='col-lg-4' style='margin-left: 1px; margin-top: 25px;'>
                        <img class='card-test f-right' src='/storage/tests/question/${question.imageName}' />
                    </div>`,
                a: question.options,
                correct: `<p><span><h5>Все верно!<h5/></span> <h6>${question.correct}!<h6/></p>`,
                incorrect: `<p><span><h4>Ты ошибся!<h4/></span> <h6> Правильный ответ: ${question.correct}<h6/></p>`,
            })),
        };
    </script>
    <script src="/quiz/js/slickQuiz.js"></script>
    <script src="/quiz/js/master.js"></script>
@endsection
