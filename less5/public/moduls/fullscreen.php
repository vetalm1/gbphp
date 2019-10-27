<?php
error_reporting(1);
const DS = DIRECTORY_SEPARATOR;


$id=$_GET['id'];
$views = $_GET['views']+1;

include '../../engine/autoload.php';
autoload('../../config');

$query = "UPDATE test.gallery SET `views` = $views WHERE id = $id;";
$result = mysqli_query(myDbConnect(), $query);

$query = "SELECT * FROM test.gallery WHERE id = $id ORDER BY views DESC;";
$result = mysqli_query(myDbConnect(), $query);

$employes = [];  
while ($row = mysqli_fetch_assoc($result)) {  
       $employes[] = $row;
}
mysqli_close(myDbConnect()); 

//print_r($employes);
?>

<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>
</head>
<body>
       <div>
       <img src="<?='..'.DS.$employes[0]['path'].DS.$employes[0]['name']?>" >
       <p>Количество просмотров - <?=$employes[0]['views']?></p> 
       </div>
</body>
</html>