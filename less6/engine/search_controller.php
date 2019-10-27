<?php
$search = $_GET['search'] ?? NULL; //это современный синтаксис для пхп 7
$sort = $_GET['sort'] ?? NULL; 
$searchBy = $_GET['searchBy'] ?? NULL; 
$order ="";

function getSearchBy ($searchBy, $search) {
    if (count($searchBy)==1) 
    return " $searchBy[0] LIKE \"%$search%\"";
    $getWhere = "";
    foreach ($searchBy as $key => $value) {
        if ($key == 0) {
            $getWhere .= " $value LIKE \"%$search%\"";
            continue;
        }
        $getWhere .= " OR $value LIKE \"%$search%\"";
    }
    return $getWhere;
}

switch($sort) {
    case 1:
        $order = order("id");
        break;
    case 2:
        $order = order("id", false);
        break;
    case 3:
        $order = order("name");
        break;
    case 4:
        $order = order("name", false);
        break;
    case 5:
        $order = order("age");
        break;
    case 6:
        $order = order("age", false);
        break;
    default:
        $order = order ("leng");
}

function order($name, $sort = true) {
    if ($sort) {
        return " ORDER BY {$name};";
    }
    return " ORDER BY {$name} DESC;";

}
// echo $search_query;


$search_query ="SELECT * FROM test.test1"; 
if ($search) {
    
    $search_query .= " WHERE".getSearchBy($searchBy, $search);
    
    //." LIKE \"%".$search."%\"";
}
$search_query .= $order; //" ORDER BY age DESC;";

