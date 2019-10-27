<?php
include '../engine/autoload.php';
autoload('../config');
include '../engine/basket_controller.php';

delFromBasket($_GET['id']);
$employes2 = selectByUser();

?>


<!DOCTYPE html>
<html lang="ru">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="../css/style.css">
       <title>Корзина</title>
</head>
<body>

    <br>
    <table class='card table ml-5' style="width: 35rem;">
        <h5 class="modal-title ml-5" >Корзина</h5>
        <thead>
            <tr>
                <th scope="col">User</th>
                <th scope="col">#</th>
                <th style="width: 15rem;" scope="col">Наименование</th>
                <th scope="col">Цена</th>
            </tr>
        </thead>
        
        <tbody>
        <?php foreach ($employes2 as $good) : ?>
            <tr>
                <td><?=$good['user_name']?></td>
                <td><?=$good['id_good']?></td>
                <td style="width: 15rem;"><?=$good['good_name']?></td>
                <td><?=$good['price'].' руб.'?></td>
                <td><a class="alert alert-warning" href="basket.php?id=<?=$good['id_good']?>"> Удалить</a></td>
            </tr>
            <?php $summ += $good['price'] ?>
        <?php endforeach ?>
        </tbody>
    </table>
    <div class="ml-5">Итого сумма:  <?=$summ.' руб.'?></div>
    <br>
    <a class="alert alert-dark m-5" href="../index.php">На страницу каталога</a>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>