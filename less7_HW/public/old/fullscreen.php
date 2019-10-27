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

// $id=$_GET['id'];
// $name = $_GET['name'];
// $comment = $_GET['comment'];
// if ($name || $comment) {
//        $query = sprintf("INSERT INTO test.comments (id, name, text) VALUES (\"%s\", \"%s\", \"%s\");", $id, $name, $comment);
//        $result = mysqli_query(myDbConnect(), $query);
//        echo $result;
// }

mysqli_close(myDbConnect()); 

//print_r($employes);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="../css/style.css">
       <title>Product</title>
</head>
<body>
       <div class="ml-5">
       <img src="<?='..'.DS.$employes[0]['path'].DS.$employes[0]['name']?>" >
       <p>Количество просмотров - <?=$employes[0]['views']?></p> 
       </div>

        
       <form action="comments.php" method="get">
              <h5 class="modal-title ml-5" >Добавить отзыв(просмотр отзывов)</h5>
              <br>
              <div class="row1">
                     <input name = "name"  type="text" class="form-control ml-5" placeholder="Имя">
                     <br> 
                     <input name = "comment" type="text" class="form-control ml-5 " placeholder="Комментарий">
                     <br>
                     <button name = "id" value="<?=$id?>" type="submit" class="btn btn-primary ml-5">Добавить</button>
              </div>
       </form>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>