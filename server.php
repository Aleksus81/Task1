

<?php

/* Подключение к серверу MySQL */
$link = mysqli_connect(
            'localhost',  /* Хост, к которому мы подключаемся */
            'root',       /* Имя пользователя */
            'ubuntu',   /* Используемый пароль */
            'task1');     /* База данных для запросов по умолчанию */

if (!$link) {
   printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
   exit;
}

/* Посылаем запрос серверу */
/*if ($result = mysqli_query($link, 'SELECT Name, Population FROM City ORDER BY Population DESC LIMIT 5')) {

    print("Очень крупные города:\n");

    
    while( $row = mysqli_fetch_assoc($result) ){
        printf("%s (%s)\n", $row['Name'], $row['Population']);
    }

    
    mysqli_free_result($result);
}


mysqli_close($link);*/



?> 