<?php

include '../engine/goods_controller.php';

//addToBasket($_GET['id'], $_GET['good_name'], $_GET['price']);
addToGoodsList($_POST['good_name'], $_POST['description'], $_POST['price']);
delFromGoodsList ($_GET['id']);
$employes = selectGoods();


?>

<html lang="ru">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="css/style.css">
       <title>Редактор каталога</title>
</head>
<body>

<div class="galery">
    
    <table class='table'>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Наименование</th>
                <th scope="col">Цена</th>
            </tr>
        </thead>
        
        <tbody>
        <?php foreach ($employes as $good) : ?>
            <tr class="text-success">
                <th>0000<?=$good['id']?></td>             
                <td><?=$good['good_name']?></td>
                <td><?=$good['good_price'].' руб.'?></td>
                <td><a class="alert alert-warning" href="goods_control.php?id=<?=$good['id']?>"> Удалить</a></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
<br>

<h5 class="alert alert-primary m-5">Добавление товара</h5>
<form method="post" style="width: 300px;" class="ml-5">
  <div class="form-group">
    <input name = "good_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Наименование товара">
  </div>
  <div class="form-group">
    <input name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="Описание товара">
  </div>
  <div class="form-group">
    <input name="price" type="text" class="form-control" id="exampleInputPassword1" placeholder="Цена">
  </div>
  <button type="submit" class="btn btn-primary">Добавить</button>
</form>

</body>
</html>
