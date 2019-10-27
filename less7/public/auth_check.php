<?php
if ($_SESSION['isAuth']): ?>
<h5 class=" m-3 alert alert-success">Капитан <?=$_SESSION['user_name']?>, добро пожаловать!
</h5>

<?else:?>

<h5 class=" m-3 alert alert-danger">Доступ ограничен, авторизуйтесь чтобы продолжить 
    <a href="login.php">Login</a>
</h5>
<?die?>
<?endif?>