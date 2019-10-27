<?php
function getUser($login) {
    $query_auth = sprintf('SELECT * FROM test.logins WHERE login ="%s" LIMIT 1;', $login);
    $mysql_auth = mysqli_query(myDBconnect(), $query_auth);
    $user = mysqli_fetch_assoc($mysql_auth);
    
    if (isset($user)) 
        return $user;
    return false;
}