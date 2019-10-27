<?php
error_reporting(1);
const DS = DIRECTORY_SEPARATOR;

include '../../engine/autoload.php';
autoload('../../config');

$id=$_GET['id'];
$name = $_GET['name'];
$comment = $_GET['comment'];
if ($name || $comment) {
       $query = sprintf("INSERT INTO test.comments (id, name, text) VALUES (\"%s\", \"%s\", \"%s\");", $id, $name, $comment);
       mysqli_query(myDbConnect(), $query);
}

$query = "SELECT * FROM test.comments WHERE id = $id;"; //
$result = mysqli_query(myDbConnect(), $query);

$employes = [];  
while ($row = mysqli_fetch_assoc($result)) {  
       $employes[] = $row;
}

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
       <title>Комментарии</title>
</head>
<body>
       
<table class='table'>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Комментарий</th>
        </tr>
    </thead>

    <tbody>
      <?php foreach ($employes as $commentss) : ?>
        <tr>
            <th><?=$commentss['id']?></td>
            <td><?=$commentss['name']?></td>
            <td><?=$commentss['text']?></td>
        </tr>
    <?php endforeach ?>
    </tbody>

</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>