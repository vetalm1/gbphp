<?php

const DS = DIRECTORY_SEPARATOR;

include '../../engine/autoload.php';
autoload('../../config');

// $id=$_GET['id'];

// $id = 1;

function selectById ($id, $table='goods') {
    $table = 'test.'.$table;
    $query = "SELECT * FROM $table WHERE id = $id;";
    $result = mysqli_query(myDbConnect(), $query);
    $employes = [];  
    while ($row = mysqli_fetch_assoc($result)) {  
        $employes[] = $row;
    }
    return $employes;
}
//print_r(selectById(1, 'goods'));


function insertComment ($id, $name, $comment) {
    if ($name && $comment) {
        $query = sprintf("INSERT INTO test.comments (id, name, text) VALUES (\"%s\", \"%s\", \"%s\");", $id, $name, $comment);
        mysqli_query(myDbConnect(), $query);
    }
}

function insertGood ($id, $name, $comment) {}
function updateComment ($id, $name, $comment) {}
function updateGood ($id, $name, $comment) {}
function delAll ($id, $name, $comment, $table) {}


// mysqli_close(myDbConnect()); 
?>