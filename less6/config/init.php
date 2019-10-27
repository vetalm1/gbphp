<?php

function myDbConnect () {
    $defaultConfig = require CONFIG_DIR.'db_config/config.default.php';
    // если такой файл есть то работаем с ним 
    if (!file_exists(ROOT_DIR.'config/db_config/config.php')) {
        echo 'Создайте файл конфигурации';
        $localConfig = [];
    } else {
        $localConfig = require ROOT_DIR.'config/db_config/config.php';
    }
 $config = array_merge($defaultConfig, $localConfig);

 if (!$mysqli = mysqli_connect(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_neame']
    )) die ('Ошибка базы данных');; 
    
    return $mysqli;

    //if (!$mysqli = mysqli_connect('localhost', 'root', '', 'test')) die('Ошибка базы данных');;
}