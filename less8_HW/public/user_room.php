<?php
session_start();
include '../engine/session_destroy.php';
include 'header.php';

if ($_SESSION['isAuth']): ?>
        <form method="post">
            <h5 class=" m-3 alert alert-success">Приветствуем вас <?=$_SESSION['user_name']?> !
            <h4 class=" m-3 alert alert-success">добро пожаловать в личный кабинет! </h4> 
                <input type="submit" name="logout" value="Выход" class="btn btn-warning m-3">
            </h5> 
            <br>
        </form>
<?else:?>

<h5 class=" m-3 alert alert-danger">Доступ ограничен, авторизуйтесь чтобы продолжить 
    <a href="../login.php">Login</a>
</h5>
<?die?>
<?endif?>

<br>
<?php 
    if ($_SESSION['user_name']=='admin'): ?>
    <a class="alert alert-dark m-3" href="order_room.php" target="blank">Обработать заказы</a>
    <a class="alert alert-dark m-3" href="goods_control.php" target="blank">Редактор товаров</a>
    <?endif?>

<a class="alert alert-dark m-3" href="../index.php">На страницу каталога</a>