<?php

$query = "SELECT * FROM test.gallery ORDER BY views DESC;";
$result = mysqli_query(myDbConnect(), $query);

$employes = [];  
while ($row = mysqli_fetch_assoc($result)) {  
       $employes[] = $row;
}

//print_r($employes);

mysqli_close(myDbConnect()); 