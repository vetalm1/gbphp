<?php
session_start();

$login ='';
$password ='';
$status = '';

function save($data) {
    return htmlspecialchars(strip_tags($data)); //Для предотвращения sql инъекций минимальная защита
}

if (isset($_POST['login']) && isset($_POST['password'])) {
    
  $login = save($_POST['login']);
  $password = save($_POST['password']);
  $user = getUser($login);

    if ($user) {
        if (password_verify($password, $user['pass'])) {
            $_SESSION['isAuth'] = true;
            $_SESSION['user_name'] = $user['login'];
            header('location: public/user_room.php');
            die;
        } 
        else {
            $status = 'Проверьте пароль';
        }
    } 
    else {
        $status = "Проверьте логин!";
        $_SESSION['isAuth'] = false;
    }

}

session_write_close();

