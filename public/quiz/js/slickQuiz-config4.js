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
            "q": " Как называется картина Сальвадора Дали? <br> <div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/часы.png'</div> ",
            "a": [
                {"option": " Течение времени",      "correct": false},
                {"option": "Мягкие часы",     "correct": false},
                {"option": "Постоянство памяти",      "correct": true},
                {"option": "Твердость Памяти",     "correct": false}  
            ],
             "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Постоянство памяти!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6> Правильный ответ: Постоянство памяти<h6/></p>"  
        },
        { // Question 2 - 
            "q": "Как правильно называется этот шедевр? <br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/иван.png'</div>",
            "a":  [ 
                {"option": "Иван Грозный и сын его Иван 16 ноября 1581 года","correct": true},
                {"option": "Иван Грозный убивает своего сына",   "correct":false},
                {"option": "Убийство сына Иванв Грозного",               "correct": false},
                {"option": "Иван Грозный", "correct": false} 
            ],
            "select_any": true,
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Иван Грозный и сын его Иван 16 ноября 1581 года!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Иван Грозный и сын его Иван 16 ноября 1581 года<h6/></p>"  
        },
        { // Question 3 - 
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
        { // Question 4
            "q": "Какое название у картины Марка Шагала? <br><div class='col-lg-4'style='margin-left: 1px; margin-top: 25px;'><img class='card-test f-right'  src='img/полет.png'</div>",
            "a": [
                {"option": "Полет влюбленных",      "correct": false},
                {"option": "Над городом",     "correct": true},
                {"option": "Прогулка",      "correct": false},
                {"option": "Полет",   "correct": false} 
            ],
            "correct": "<p><span><h5>Все верно!<h5/></span> <h6>Над городом!<h6/></p>",
            "incorrect": "<p><span><h4>Ты ошибся!<h4/></span> <h6>Правильный ответ:Над городом<h6/></p>" 
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
