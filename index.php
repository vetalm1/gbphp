<?php
// echo '<h1>Я люблю гусей</h1>'.'Очь сильно'.'<br>';
// //print '<h1>Я люблю гусей</h1>'; 
// $name = 'Jon';
// echo $name.' Smit <br>';
// var_dump($name.'<br>');
// define('MY_CONST', 'Ivan');
 const BR = '<br>';

 $a = 5;
 $b = 6;
// $c=$a+$b;
// echo $c.BR; // 11
// echo ($c+1).BR; // 12
// echo $c++.BR; // 11
// echo ++$c.BR; // 13

// echo ($a + '5').BR;
// echo $a.'7'.BR;

echo 'У нас всего животных '.('12 гусей' + '1 Жираф').BR;
echo 'У нас всего животных '.('12 гусей' + '1 Жираф' + 'и 2 слона').BR;

$today = getdate();
// print_r($today);

$day = $today['mday'];
$month = $today['mon'];
$year = $today['year'];

$a=10;
$b=26;
echo $a.BR;
echo $b.BR;
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo $a.BR;
echo $b.BR;

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Текущее время: число <?php echo $day ?>, месяц <?=$month ?> ,  год <?=$year ?>
</body>
</html>