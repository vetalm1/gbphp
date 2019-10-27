<?php

// Подключение к ресурсам БД
// Обычный способ --- if (!$mysqli = mysqli_connect('localhost', 'root', '', 'test')) die('Ошибка базы данных');;

// Способ подключения через инит.пхп
include 'engine/autoload.php';
autoload('config'); // Подключатся все файлв из папки конфиг см. файл автолоад

//include ENGINE_DIR.'less5.php';

include ENGINE_DIR.'less7_controller.php';
include ENGINE_DIR.'less6_controller.php';
include ENGINE_DIR.'search_controller.php';
include ENGINE_DIR.'less5_engin.php';
include ENGINE_DIR.'session_destroy.php';

// include ENGINE_DIR.'modal_controller.php';


include PUBLIC_DIR.'header.php';

include PUBLIC_DIR.'auth_check.php'; //Если не авторизовалось то не загружать все остальное дальше

include PUBLIC_DIR.'less6.php';
include PUBLIC_DIR.'less5_public.php';
include PUBLIC_DIR.'modal.php';


include PUBLIC_DIR.'footer.php';
//mysqli_close(myDbConnect());

