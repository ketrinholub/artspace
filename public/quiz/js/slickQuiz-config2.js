
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
            "q": " Какой художник изображён на этом автопортрете? <br> <div class='col-lg-4'style='margin-left: 0px; margin-top: 25px;'><img class='card-test f-right'  src='img/портрет.jpeg'</div> ",
            "a": [
                {"option": "Эдвард Мунк",      "correct": false},
                {"option": "Рембрандт",     "correct": false},
                {"option": "Винсент Ван Гог",      "correct": true},
                {"option": "Уильям Тёрнер",     "correct": false}  
            ],
             "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Винсент Ван Гог!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6> Правильный ответ: Винсент Ван Гог<h6/></p>"  
        },
        { // Question 2 - 
            "q": "Какой фрукт изображён на картине Рене Магритта «Сын человеческий»? <br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/человек.png'</div>",
            "a":  [ 
                {"option": "Груша","correct": false},
                {"option": "Яблоко",   "correct": true},
                {"option": "Апельсин",               "correct": false},
                {"option": "Лимон", "correct": false} 
            ],
            "select_any": true,
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Яблоко!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Яблоко<h6/></p>"  
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
        { // Question 4
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
        { // Question 5
            "q": "Чего не хватает на этой знаменитой картине Клода Моне? <br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/моне.png'</div>",
            "a": [
                {"option": "Чайки",    "correct": false},
                {"option": "Лодки",     "correct": true}, 
                {"option": "Человека",     "correct": false},
                {"option": "Коряги",     "correct": false}  
            ],
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Лодки!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Лодки<h6/></p>"  
        } 
    ]
};
