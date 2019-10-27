<?php

include 'engine/basket_controller.php';

addToBasket($_GET['id'], $_GET['good_name'], $_GET['price']);

?>

<div class="galery">
    
    <table class='table'>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Наименование</th>
                <th scope="col">Цена</th>
            </tr>
        </thead>
        
        <tbody>
        <?php foreach ($employes as $good) : ?>
            <tr class="text-success">
                <th>0000<?=$good['id']?></td>             
                <td>
                    <a class="text-success" href="public/moduls/goodcard.php?id=<?=$good['id']?>" target="blank">    
                        <?=$good['good_name']?>
                    </a>
                </td>
                <td><?=$good['good_price'].' руб.'?></td>
                <td><a class="alert alert-success" href="index.php?id=<?=$good['id'].'&'.'price='.$good['good_price'].'&'.'good_name='.$good['good_name']?>"> В корзину</a></td>

            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <a class="alert alert-dark " href="public/basket.php">Корзина</a>

</div>

