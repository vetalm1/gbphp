<?php

//$query = "SELECT * FROM test.test1 WHERE age > 30 ORDER BY age DESC ;"; //делаем запрос
$query = "SELECT * FROM test.test1;";
$result = mysqli_query(myDbConnect(), $query); // получаем результат - объект

//переводим объект с помощью цикла в массив
$employes = [];  //построчно перегоняем массивы из оъекта в массив
while ($row = mysqli_fetch_assoc($result)) {  
       $employes[] = $row;
}

//print_r($employes);

mysqli_close(myDbConnect()); //отсоединяем подключение



//INSERT INTO `test.gallery` (`id`, `path`, `size`, `name`, `views`) VALUES ('', '', '', '','')