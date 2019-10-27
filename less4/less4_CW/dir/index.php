<?php

define ('SITE_ROOT', __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR); //Констатнта пути 
// DIRECTORY_SEPARATOR  - это слеш только служебным словом чтобы небыло \n


include SITE_ROOT.'dir/test1.php';
print_r(myScan('dir'));