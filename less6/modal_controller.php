<?php
include 'engine/autoload.php';
autoload('config');

if ($_POST['age'] && $_POST['name'] && $_POST['lang']) {

$name =$_POST['name'];
$age =$_POST['age'];
$lang =$_POST['lang'];

$insert_query = sprintf("INSERT INTO test.test1 (name, age, leng) VALUES (\"%s\", \"%s\", \"%s\");", $name, $age, $lang); //способ склейки строк

 mysqli_query(myDbConnect(), $insert_query);

}


header("location: index.php"); //будет работать только если небыло ни какого вывод
//ето чтобы вернуться на первую страницу
die;