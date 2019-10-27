<?php
function regUser($login, $password) {
    if ($login && $password) {
        $password = password_hash($password, PASSWORD_BCRYPT); // Хеширование пароля
        $query = sprintf("INSERT INTO test.logins (`login`, `pass`) VALUES (\"%s\", \"%s\");", $login, $password);
        $isInsert = mysqli_query(myDbConnect(), $query);
        ($isInsert) ? $success = "Регистрация пользователя $login, прошла успешно" : false; 
    }
    return $success;
}