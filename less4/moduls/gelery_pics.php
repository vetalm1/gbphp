<?php
const DS = DIRECTORY_SEPARATOR;

function geleryPics ($path) {
    $list = scandir($path);
    unset($list[0], $list[1]);
	// $img = array_slice(scandir('img'), 2) //вся эта фигня одной строкой и без ансет    

    foreach ($list as $filename) {
    //     echo '<a href="'.$path.DS.$filename.'" target="_blank">'.
    //         '<img class="small-pic" src="'.$path.DS.$filename.'">'.'</a>';

            echo '<a onclick="modalwindow(\''.$filename.'\')">'.
            '<img class="small-pic" src="'.$path.DS.$filename.'">'.'</a>'.PHP_EOL;
    }
    
}
