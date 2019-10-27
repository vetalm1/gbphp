<?php

include 'engine/autoload.php';
autoload('config'); 

include ENGINE_DIR.'less6_HW.php';
include PUBLIC_DIR.'header.php';
include PUBLIC_DIR.'less6_HW.php';
include PUBLIC_DIR.'footer.php';



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