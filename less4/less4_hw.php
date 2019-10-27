<?php
    include 'moduls/gelery_pics.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP-Galery</title>
</head>
<body>
    <div class="galery">
        <?php 
            geleryPics('img');
        ?>
    </div>
    <div class="modal-wind"></div>

    <script src="js/script.js"></script>
</body>
</html>