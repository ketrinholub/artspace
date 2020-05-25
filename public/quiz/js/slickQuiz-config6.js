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
         
         { // Question 2 - 
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
       { // Question 3
            "q": "К какой картине относится этот фрагмент? <br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/фрагмент.png'</div>",
            "a": [
                {"option": "Американская готика",      "correct": false},
                {"option": "Полуночники",     "correct": true},
                {"option": "Мир Кристины",      "correct": false},
                {"option": "Крик",   "correct": false} 
            ],
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Полуночники!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Полуночники<h6/></p>" 
        },
          { // Question 3 - 
            "q": "Как называется эта работа Густава Климта?<br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/поцелуй.jpg'</div>",
            "a": [
                {"option": "Обьятия",                   "correct": false},
                {"option": "Поцелуй",                  "correct": true},
                {"option": "Слиение",                "correct": false},
                {"option": "Любовь",                "correct": false}  
            ],
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Поцелуй!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Поцелуй<h6/></p>" 
        },
         { // Question 3 - 
            "q": "Кто автор полотна? <br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/боттичелли.png'</div>",
            "a": [
                {"option": "Рембрандт",                   "correct": false},
                {"option": "Сандро Боттичелли",                  "correct": true},
                {"option": "Леонардо Да Винчи",                "correct": false},
                {"option": "Рафаэль Санти",                "correct": false}  
            ],
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Сандро Боттичелли!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Сандро Боттичелли<h6/></p>" 
        }
    ]
};
