<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <title>PHP-GB</title>
</head>
<body>
<br>
    <header> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">--GB-PHP-GB--</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Домой <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ссылки</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Список
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Выбрано</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="get">
            <input name = "search" class="form-control mr-sm-2" type="text" placeholder="<?=$search?>" aria-label="Search">
            <select name="searchBy[]" class="m-3 form-control">
                <option value="name">Name</option>
                <option value="leng">Lang</option>
            </select>
            <select name="sort" class="m-3 form-control">
                <option value="1">Id UP</option>
                <option value="2">Id DOWN</option>
            </select>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    </header>
    <br> <br>

    <?php if (!$_SESSION['isAuth']): ?>
        <a href="login.php" class="btn btn-success" role="button" aria-pressed="true">Авторизация</a>
    <?else: ?>
        <form method="post">
            <span class="navbar-brand">Вы авторизированы как <?=$_SESSION['user_name']?> </span>
            <input type="submit" name="logout" value="exit" class="btn btn-danger">
        </form>
    <?endif;?>

