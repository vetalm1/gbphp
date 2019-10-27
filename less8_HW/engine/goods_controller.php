<?php
 include '../engine/autoload.php';
 autoload('../config');

session_start();


function addToGoodsList($good_name, $description, $price) {
    $user_name = $_SESSION['user_name'];
    if ($good_name!='' && $user_name=='admin') {
        $query = sprintf("INSERT INTO test.goods (`good_name`, `good_description`, `good_price`, `is_active`) VALUES (\"%s\", \"%s\", \"%s\", \"%s\");", $good_name, $description, $price, '1');
        mysqli_query(myDbConnect(), $query);
    }
}

function delFromGoodsList ($id) {
    $user_name = $_SESSION['user_name'];
    if ($id && $user_name=='admin') {
        $query = "DELETE FROM test.goods WHERE goods.id = '$id';";
        mysqli_query(myDbConnect(), $query);
    }
}


function selectGoods() {
    $user_name = $_SESSION['user_name'];
    $query = "SELECT * FROM test.goods;";
    $result = mysqli_query(myDbConnect(), $query);
    $employes = [];  
    while ($row = mysqli_fetch_assoc($result)) {  
        $employes[] = $row;
    }
    return $employes;
}
