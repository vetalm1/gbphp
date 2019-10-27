<?php
$val1 = $_GET['value1'];
$val2 = $_GET['value2'];
$result ='';
(!empty($_GET['operation'])) ? $operation = $_GET['operation'] : $operation = $_GET['button'];
switch($operation) {
    case 'summ':
        $result = $val1+$val2;
        break;
    case 'minus':
        $result = $val1-$val2;
        break;
    case 'mult':
        $result = $val1*$val2;
        break;
    case 'div':
        $result = ($val2 != 0) ? $val1/$val2 : 'деление на ноль';
    break;

}
(!empty($_GET['operation'])) ? $result1 = $result : $result2 = $result;

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Calculator</title>
</head>
<body>
    <h1 class="alert alert-info">Калькулятор 1</h1>
    <form class="form-inline my-2 my-lg-0" method="get">
            <input name = "value1" class="form-control mr-sm-2 ml-3" type="text" placeholder="Первое число" aria-label="Search">
            <input name = "value2" class="form-control mr-sm-2 ml-3" type="text" placeholder="Второе число" aria-label="Search">
            <select name="operation" class="m-3 form-control" >
                <option value="summ">Сложение</option>
                <option value="minus">Разность</option>
                <option value="mult">Произведение</option>
                <option value="div">Деление</option>
            </select>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Посчитать</button>
    </form>
    <div class="ml-4">Результат = <?= $result1 ?></div>

    <h1 class="alert alert-primary">Калькулятор 2</h1>
    <form class="form-inline my-2 my-lg-0" method="get">
            <input name = "value1" class="form-control mr-sm-2 ml-3" type="text" placeholder="Первое число" aria-label="Search">
            <input name = "value2" class="form-control mr-sm-2 ml-3" type="text" placeholder="Второе число" aria-label="Search">
            <br>
            <button name="button" value="summ" class="btn btn-outline-success my-2 my-sm-0" type="submit">Сложить</button>
            <button name="button" value="minus" class="btn btn-outline-success my-2 my-sm-0" type="submit">Вычесть</button>
            <button name="button" value="mult" class="btn btn-outline-success my-2 my-sm-0" type="submit">Умножить</button>
            <button name="button" value="div" class="btn btn-outline-success my-2 my-sm-0" type="submit">Разделить</button>
    </form>
    <div class="ml-4">Результат = <?= $result2 ?></div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>