<?php
include '../engine/order_controller.php';

$employes2 = selectOrders();

?>


<!DOCTYPE html>
<html lang="ru">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="css/style.css">
       <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/ajaxRequest.js"></script>
       <script>  </script>
       <title>Заказы</title>
</head>
<body>

    <br>
    <table class='card table ml-5' style="width: 40rem;">
        <h5 class="modal-title ml-5" >Не отработанные заказы</h5>
        <thead>
            <tr>
                <th style="width: 7rem;"scope="col">id</th>
                <th scope="col">User</th>
                <th style="width: 10rem;" scope="col">сумма</th>
                <th scope="col">Дата</th>
                <th scope="col">Статус</th>
            </tr>
        </thead>
        
        <tbody>
        <?php foreach ($employes2 as $order) : ?>
            <tr>
                <td style="width: 10rem;">
                    <a class="alert-dark" href="basket.php?order_id=<?=$order['id_order']?>" target="blank">    
                     В заказ <?=$order['id_order']?>
                    </a>
                </td>
                <td><?=$order['user_name']?></td>
                <td style="width: 10rem;" ><?=$order['summ'].' руб.'?></td>
                <td style="width: 15rem;"><?=$order['datetime_create']?></td>
                <td><?=$order['order_status']?></td>
                <td><input id="button<?=$order['id_order']?>" class="alert-success" type="button" name="submit" value="Выполнить" onClick = "getdetails(<?=$order['id_order']?>,'Выполнен', '', 'orderDone', '../engine/order_controller.php')" /></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <br>
    <a class="alert alert-dark m-5" href="../index.php">На страницу каталога</a>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>
</html>

