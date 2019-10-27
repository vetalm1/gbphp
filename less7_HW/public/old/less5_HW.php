<?php
const DS = DIRECTORY_SEPARATOR;
?>

<div class="galery">
    <?php foreach ($employes as $image) : ?>
      <a href="public/moduls/fullscreen.php?id=<?=$image['id'].'&amp;'.'views='.$image['views']?>" target="_blank">
         <img src="<?='public'.DS.$image['path'].DS.$image['name']?>" class="small-pic" >
         <p><img class="img-ico" src="public/img/ve.png"> <?=$image['views']?></p> 
      </a>

    <?php endforeach ?>

</div>

<!-- href="" target="_blank" -->
