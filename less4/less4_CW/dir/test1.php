<?php

function myScan ($dir) {
    $list = scandir($dir); // Создает массив из имен файлов в дирректории
    if (!$list) {
        return false;
    }
    unset($list[0], $list[1]); //удаляет . и .. из списка, чтобы небыло ошибок
    return $list;
}