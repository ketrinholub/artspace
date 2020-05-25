var quizJSON = {
    "info": {
        
        "results": "",
        "level1":  "Эксперт",
        "level2":  "Ботан",
        "level3":  "Знаток",
        "level4":  "Новичек",
        "level5":  "Делетант"
       
    },
    "questions": [
        { // Question 1 - 
            "q": " Какого из этих направлений в искусстве НЕ существует? <br> <div class='col-lg-4'style='margin-left: 0px; margin-top: 25px;'><img class='card-test f-right'  src='img/кисти.png'</div> ",
            "a": [
                {"option": "Стакизм",      "correct": false},
                {"option": "Футуризм",     "correct": false},
                {"option": "Постреализм",      "correct": true},
                {"option": "Сюрреализм",     "correct": false}  
            ],
             "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Постреализм!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6> Правильный ответ: Постреализм<h6/></p>"  
        },
        { // Question 2 - 
            "q": "В каком жанре написана эта картина? <br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/пуантилизм.png'</div>",
            "a":  [ 
                {"option": "Импрессионизм","correct": false},
                {"option": "Пуантилизм",   "correct": true},
                {"option": "Поп-арт",               "correct": false},
                {"option": "Экспрессионизм", "correct": false} 
            ],
            "select_any": true,
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Пуантилизм!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Пуантилизм<h6/></p>"  
        },
        { // Question 3 - 
            "q": "В каком жанре написана эта картина?<br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/девицы.png'</div>",
            "a": [
                {"option": "Поп-арт",                   "correct": false},
                {"option": "Кубизм",                  "correct": true},
                {"option": "Футуризм",                "correct": false},
                {"option": "Сюрреализм",                "correct": false}  
            ],
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Кубизм!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Кубизм<h6/></p>" 
        },
        { // Question 4
            "q": "Представителем какого течения является Эдвард Мунк? <br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/крик.jpg'</div>",
            "a": [
                {"option": "Романтизм",      "correct": false},
                {"option": "Экспрессионизм",     "correct": true},
                {"option": "Реализм",      "correct": false},
                {"option": "Кубизм",   "correct": false} 
            ],
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Экспрессионизм!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Экспрессионизм<h6/></p>" 
        },
        { // Question 5
            "q": "Какой стиль картины? <br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/конь.png'</div>",
            "a": [
                {"option": "Романтизм",    "correct": false},
                {"option": "Реализм",     "correct": true}, 
                {"option": "Имрессионизм",     "correct": false},
                {"option": "Модернизм",     "correct": false}  
            ],
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Реализм!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Реализм<h6/></p>"  
        } 
    ]
};
