<?php

session_start(); // Старт сесии

//setcookie('name', 'Vasia', time()+20); //кука будет жить 20 секунд
//setcookie('name', 'Vasia', time()+3600*24*14); //кука будет жить 20 секунд
//setcookie('name', 'Vasia', time()-1); // Отрицательное время убивает куку

//print_r($_COOKIE).'<br>';

//$_SESSION['name'] = 'Foma';

//print_r($_SESSION);


//session_destroy(); // Закрытие сессии
// session_write_close();  //Закрытие сесии

//$password = 'admin';
//$passwordHesh = password_hash($password, PASSWORD_BCRYPT); // Хеширование пароля
//$passwordHesh ='$2y$12$/mq2ic7mQ4GP4bGWkIrQRejbkUaSyp6E1Fhwy/DozM1vm5Q2O.AEe';
//$isAuth = password_verify($password, $passwordHesh);
//Проверяем соответствует ли введенный пароль тому 
//что в захешированном виде лежит у нас в базе
//bcrypt-generator.com

// if ($isAuth) {
//     echo 'Пароль верный';
//     $_SESSION['isAuth'] = true;
// }
// else {
//     echo 'Пароль не верный';
//     $_SESSION['isAuth'] = false;
// }