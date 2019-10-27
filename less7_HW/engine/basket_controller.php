<?php

// include 'autoload.php';
// autoload('config');

session_start();

function addToBasket($id, $good_name, $price) {
    $user_name = $_SESSION['user_name'];
    if ($id && $user_name) {
        $query = sprintf("INSERT INTO test.basket (`user_name`, `id_good`, `good_name`, `price`) VALUES (\"%s\", \"%s\", \"%s\", \"%s\");", $user_name, $id, $good_name, $price);
        mysqli_query(myDbConnect(), $query);
    }
}

function selectByUser() {
    $user_name = $_SESSION['user_name'];
    $query = "SELECT * FROM test.basket WHERE user_name = '$user_name';";
    $result = mysqli_query(myDbConnect(), $query);
    $employes = [];  
    while ($row = mysqli_fetch_assoc($result)) {  
        $employes[] = $row;
    }
    return $employes;
}

function delFromBasket ($id) {
    $user_name = $_SESSION['user_name'];
    if ($id && $user_name) {
        $user_name = $_SESSION['user_name'];
        $query = "DELETE FROM test.basket WHERE basket.id_good = '$id' AND basket.user_name = '$user_name';";
        mysqli_query(myDbConnect(), $query);
    }
}