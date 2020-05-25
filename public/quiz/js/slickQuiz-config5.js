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
           "q": "Кто автор полотна? <br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/дали.png'</div>",
            "a": [
                {"option": "Сальвадор Дали",      "correct": true},
                {"option": "Пабло Пикассо",     "correct": false},
                {"option": "Едвард Мунк",      "correct": false},
                {"option": "Поль Гоген",   "correct": false} 
            ],
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Сальвадор Дали!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Сальвадор Дали<h6/></p>" 
            },
         { // Question 2 - 
            "q": "Какое название у картины? <br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/утро.png'</div>",
            "a": [
                {"option": "Мишка косолапый",                   "correct": false},
                {"option": "Утро в сосновом лесу",                  "correct": true},
                {"option": "Три ведмедя",                "correct": false},
                {"option": "Утро в лесу",                "correct": false}  
            ],
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Утро в сосновом лесу!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Утро в сосновом лесу<h6/></p>" 
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
            "q": "Какое название у картины? <br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/богатыри.png'</div>",
            "a": [
                {"option": "Богатыри",    "correct": true},
                {"option": "Три богатыря",     "correct":false}, 
                {"option": "Защитники Руси",     "correct": false},
                {"option": "Всадники",     "correct": false}  
            ],
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Богатыри!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Богатыри<h6/></p>"  
        } 
    ]
};
