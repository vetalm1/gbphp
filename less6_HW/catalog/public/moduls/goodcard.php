<?php
    error_reporting(1);
    const DS = DIRECTORY_SEPARATOR;

    // include '../../engine/autoload.php';
    // autoload('../../config');
    include 'crud.php';

    $id=$_GET['id'];

    $employes = selectById($id, 'goods');

    insertComment($_GET['id'], $_GET['name'], $_GET['comment']);

    $employes2 = selectById($id, 'comments');

    mysqli_close(myDbConnect()); 
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

    <div class="card ml-5 text-center" style="width: 18rem;">
        <img src="<?='..'.'/'.'img1'.'/'.'img'.$employes[0]['id'].'.jpg'?>" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><?=$employes[0]['good_name'] ?></h5>
            <p class="card-text"><?=$employes[0]['good_description'] ?></p>
        </div>

        <div class="card-body">
        <h5 class="card-title"><?=$employes[0]['good_price'].' руб.' ?></h5>
        </div>
    </div>

    <br>
    <table class='card table ml-5' style="width: 18rem;">
        <h5 class="modal-title ml-5" >Отзывы</h5>
        <tbody>
        <?php foreach ($employes2 as $commentss) : ?>
            <tr>
                <td><?=$commentss['name']?></td>
                <td><?=$commentss['text']?></td>
            </tr>
        <?php endforeach ?>
        </tbody>

    </table>


    <form action="goodcard.php" method="get">
        <h5 class="modal-title ml-5" >Добавить отзыв</h5>
        <br>
        <div class="row1">
            <input name = "name"  type="text" class="form-control ml-5" placeholder="Имя">
            <br> 
            <input name = "comment" type="text" class="form-control ml-5 " placeholder="Комментарий">
            <br>
            <button name = "id" value="<?=$id?>" type="submit" class="btn btn-primary ml-5">Добавить/обновить</button>
        </div>
    </form>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>