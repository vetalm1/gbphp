<?php 

// foreach (myScan('dir') as $file) { //Вывод списка файлов 
//     echo $file.'<br>';
//     include "./dir/$file";
// }

include 'dir/test2.php';
echo summ(2,3);

include 'dir/index.php';

echo "<br>";

$file = fopen('file.txt', 'r') or die('Ошибка открытия файла');
//Записываем сразу вес содержимое файла
$buffer = fread($file, filesize('file.txt'));
echo '<per>';
echo $buffer;
echo '<pre>';
fclose($file); //Закрываем файл

echo file_get_contents('file.txt'); 
//Вывод содержимого одной строкой
file_put_contents('file_put.txt', 'Некоторый текст');
// Запись(перезапись) текста в файл
// если добавить через запятую FILE_APPEND -
//то добавляет текст