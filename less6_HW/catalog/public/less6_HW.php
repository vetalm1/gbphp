<?php
const DS = DIRECTORY_SEPARATOR;
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
                    <a class="text-success" href="public/moduls/goodcard.php?id=<?=$good['id']?>" target="_blank">    
                        <?=$good['good_name']?>
                    </a>
                </td>
                <td><?=$good['good_price'].' руб.'?></td>
            </tr>
        <?php endforeach ?>
        </tbody>

    </table>
 
</div>

