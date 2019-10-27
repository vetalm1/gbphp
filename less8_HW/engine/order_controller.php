<?php

include '../engine/autoload.php';
autoload('../config');

session_start();
$id = $_POST['sendId'];
$name = $_POST['sendName'];
$price = $_POST['sendPrice'];
$action = $_POST['action'];

switch($action) {
    case 'orderDone':
        orderDone($id, $name);
        break;
    default:
        break;
}

function orderDone($id, $name) {

    $query = "UPDATE `test`.`orders1` SET `orders1`.`order_status` = '$name' WHERE `orders1`.`id_order` = '$id';";
    mysqli_query(myDbConnect(), $query);
}


function selectOrders() {
    $user_name = $_SESSION['user_name'];
    $query = "SELECT * FROM test.orders1 WHERE orders1.order_status = '';";
    $result = mysqli_query(myDbConnect(), $query);
    $employes = [];  
    while ($row = mysqli_fetch_assoc($result)) {  
        $employes[] = $row;
    }
    return $employes;
}
