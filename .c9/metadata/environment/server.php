{"filter":false,"title":"server.php","tooltip":"/server.php","undoManager":{"mark":16,"position":16,"stack":[[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"],"id":1},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["?"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["p"]},{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["h"]},{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["p"]}],[{"start":{"row":0,"column":5},"end":{"row":0,"column":6},"action":"insert","lines":[" "],"id":2},{"start":{"row":0,"column":6},"end":{"row":1,"column":0},"action":"insert","lines":["",""]},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":2,"column":0},"end":{"row":32,"column":3},"action":"insert","lines":["<?php","","/* Подключение к серверу MySQL */","$link = mysqli_connect(","            'localhost',  /* Хост, к которому мы подключаемся */","            'user',       /* Имя пользователя */","            'password',   /* Используемый пароль */","            'world');     /* База данных для запросов по умолчанию */","","if (!$link) {","   printf(\"Невозможно подключиться к базе данных. Код ошибки: %s\\n\", mysqli_connect_error());","   exit;","}","","/* Посылаем запрос серверу */","if ($result = mysqli_query($link, 'SELECT Name, Population FROM City ORDER BY Population DESC LIMIT 5')) {","","    print(\"Очень крупные города:\\n\");","","    /* Выборка результатов запроса */","    while( $row = mysqli_fetch_assoc($result) ){","        printf(\"%s (%s)\\n\", $row['Name'], $row['Population']);","    }","","    /* Освобождаем используемую память */","    mysqli_free_result($result);","}","","/* Закрываем соединение */","mysqli_close($link);","?> "],"id":3}],[{"start":{"row":0,"column":5},"end":{"row":0,"column":6},"action":"remove","lines":[" "],"id":4},{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"remove","lines":["p"]},{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"remove","lines":["h"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"remove","lines":["p"]},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"remove","lines":["?"]},{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["<"]},{"start":{"row":7,"column":13},"end":{"row":7,"column":17},"action":"remove","lines":["user"]},{"start":{"row":7,"column":13},"end":{"row":7,"column":14},"action":"insert","lines":["r"]},{"start":{"row":7,"column":14},"end":{"row":7,"column":15},"action":"insert","lines":["o"]},{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"insert","lines":["o"]},{"start":{"row":7,"column":16},"end":{"row":7,"column":17},"action":"insert","lines":["t"]}],[{"start":{"row":8,"column":13},"end":{"row":8,"column":21},"action":"remove","lines":["password"],"id":5},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["u"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["b"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["u"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["n"]},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["t"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["u"]}],[{"start":{"row":9,"column":13},"end":{"row":9,"column":18},"action":"remove","lines":["world"],"id":6},{"start":{"row":9,"column":13},"end":{"row":9,"column":14},"action":"insert","lines":["t"]},{"start":{"row":9,"column":14},"end":{"row":9,"column":15},"action":"insert","lines":["a"]},{"start":{"row":9,"column":15},"end":{"row":9,"column":16},"action":"insert","lines":["s"]},{"start":{"row":9,"column":16},"end":{"row":9,"column":17},"action":"insert","lines":["k"]}],[{"start":{"row":9,"column":17},"end":{"row":9,"column":18},"action":"insert","lines":["1"],"id":7}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":1},"action":"insert","lines":["/"],"id":8},{"start":{"row":17,"column":1},"end":{"row":17,"column":2},"action":"insert","lines":["*"]}],[{"start":{"row":17,"column":1},"end":{"row":17,"column":2},"action":"remove","lines":["*"],"id":9},{"start":{"row":17,"column":0},"end":{"row":17,"column":1},"action":"remove","lines":["/"]}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":1},"action":"insert","lines":["/"],"id":10},{"start":{"row":17,"column":1},"end":{"row":17,"column":2},"action":"insert","lines":["*"]}],[{"start":{"row":31,"column":20},"end":{"row":31,"column":21},"action":"insert","lines":["/"],"id":11},{"start":{"row":31,"column":21},"end":{"row":31,"column":22},"action":"insert","lines":["*"]}],[{"start":{"row":31,"column":21},"end":{"row":31,"column":22},"action":"remove","lines":["*"],"id":12},{"start":{"row":31,"column":20},"end":{"row":31,"column":21},"action":"remove","lines":["/"]}],[{"start":{"row":31,"column":20},"end":{"row":31,"column":21},"action":"insert","lines":["*"],"id":13},{"start":{"row":31,"column":21},"end":{"row":31,"column":22},"action":"insert","lines":["/"]}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":26},"action":"remove","lines":["/* Закрываем соединение */"],"id":14}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":41},"action":"remove","lines":["/* Освобождаем используемую память */"],"id":15}],[{"start":{"row":21,"column":4},"end":{"row":21,"column":37},"action":"remove","lines":["/* Выборка результатов запроса */"],"id":16}],[{"start":{"row":31,"column":22},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":32,"column":0},"end":{"row":33,"column":0},"action":"insert","lines":["",""]},{"start":{"row":33,"column":0},"end":{"row":34,"column":0},"action":"insert","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":0},"end":{"row":15,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1551384647779,"hash":"010e912d254a306f6e3662fceeec6b34d2cef2a4"}