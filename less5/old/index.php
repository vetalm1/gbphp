<?php

// Подключение к ресурсам БД
// Обычный способ --- if (!$mysqli = mysqli_connect('localhost', 'root', '', 'test')) die('Ошибка базы данных');;

// Способ подключения через инит.пхп
include 'engine/autoload.php';
autoload('config'); // Подключатся все файлв из папки конфиг см. файл автолоад

//include ENGINE_DIR.'less5.php';

include ENGINE_DIR.'less5_HW.php';

include PUBLIC_DIR.'header.php';
//include PUBLIC_DIR.'less5.php';

include PUBLIC_DIR.'less5_HW.php';

include PUBLIC_DIR.'footer.php';
//mysqli_close(myDbConnect());


//Таблица такая см. ниже
/*
CREATE TABLE `test`. ( `id` INT NOT NULL AUTO_INCREMENT , `path` TEXT NOT NULL , 
`size` INT NOT NULL , `name` TEXT NOT NULL , `views` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
*/


// INSERT INTO `gallery` (`id`, `path`, `size`, `name`, `views`) VALUES (NULL, 'img', '10', 'img1.jpg', '3')
// INSERT INTO `gallery` (`id`, `path`, `size`, `name`, `views`) VALUES (NULL, 'img', '5', 'img2.jpg', '4')
// INSERT INTO `gallery` (`id`, `path`, `size`, `name`, `views`) VALUES (NULL, 'img', '8', 'img3.jpg', '6')
// INSERT INTO `gallery` (`id`, `path`, `size`, `name`, `views`) VALUES (NULL, 'img', '10', 'img4.jpg', '1')
// INSERT INTO `gallery` (`id`, `path`, `size`, `name`, `views`) VALUES (NULL, 'img', '6', 'img5.jpg', '12')
// INSERT INTO `gallery` (`id`, `path`, `size`, `name`, `views`) VALUES (NULL, 'img', '5', 'img6.jpg', '7')