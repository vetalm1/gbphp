<?php

include 'engine/autoload.php';
autoload('config'); 

include ENGINE_DIR.'less6_HW.php';
//include ENGINE_DIR.'basket_controller.php';
include ENGINE_DIR.'session_destroy.php';

include PUBLIC_DIR.'header.php';
include PUBLIC_DIR.'auth_check.php'; //Если не авторизовалось то не загружать все остальное дальше

include PUBLIC_DIR.'less6_HW.php';
include PUBLIC_DIR.'footer.php';



