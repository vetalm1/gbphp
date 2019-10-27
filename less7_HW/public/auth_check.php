<?php
if ($_SESSION['isAuth']): ?>
        <form method="post">
            <p class=" m-3 alert alert-success">Вы авторизованы как <?=$_SESSION['user_name']?> 
                <input type="submit" name="logout" value="Выход" class="btn btn-warning ml-3">
            </p> 
        </form>
<?else:?>

<h5 class=" m-3 alert alert-danger">Доступ ограничен, авторизуйтесь чтобы продолжить 
    <a href="login.php">Login</a>
</h5>
<?die?>
<?endif?>