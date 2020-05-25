

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
            "q": " Кто автор полотна? <br> <div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/айв.png'</div> ",
            "a": [
                {"option": " Сандро Боттичелли",      "correct": false},
                {"option": "Рембрандт",     "correct": false},
                {"option": "Айвазовский",      "correct": true},
                {"option": "Уильям Тёрнер",     "correct": false}  
            ],
             "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Айвазовский!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6> Правильный ответ: Айвазовский<h6/></p>"  
        },
        { // Question 2 - 
            "q": "Кто автор полотна? <br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/клод.png'</div>",
            "a":  [ 
                {"option": "Паскаль Моне","correct": false},
                {"option": "Клод Моне",   "correct": true},
                {"option": "Ван Гог",               "correct": false},
                {"option": "Сандро Боттичелли", "correct": false} 
            ],
            "select_any": true,
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Клод Моне!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Клод Моне<h6/></p>"  
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
        },
        { // Question 4
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
        { // Question 5
            "q": "Кто автор полотна? <br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/вангог.png'</div>",
            "a": [
                {"option": "Клод Моне",    "correct": false},
                {"option": "Ван Гог",     "correct": true}, 
                {"option": "Анри Матисс",     "correct": false},
                {"option": "Фрида Кало",     "correct": false}  
            ],
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Винсент Ван Гог!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Ван Гог<h6/></p>"  
        } 
    ]
};
