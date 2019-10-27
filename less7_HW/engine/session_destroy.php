<?php
//Первый вариант
//session_start();
//session_destroy();
//header('location: index.php'); //обычный вариант
//header('location: '.$_SERVER['REQUEST_URI']); //чтобы вернуться туда откуда пришел


//второй вариант дестроя
//запускать кнопкой логаут, тоже открыть файлик и передать в него запрос со значением логаут,  и тогда тоже что и сверху.
// а то что сверху запускается просто ссылкой

if (isset($_POST['logout'])) {
    session_start();
    session_destroy();
    //header('location: index.php');
    header('location: '.$_SERVER['REQUEST_URI']); //чтобы вернуться туда откуда пришел
    die;
}