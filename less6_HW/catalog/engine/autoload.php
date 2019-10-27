<?php

function autoload($dir, $excludeFiles =[]) {
       $files = scandir($dir);
       $excludeFiles = array_merge(['.', '..'], $excludeFiles);

       foreach ($files as $file) {
              if (!in_array($file, $excludeFiles)) {
                     if (is_dir($dir.DIRECTORY_SEPARATOR.$file)) {
                            //рекурсивный вызо
                            autoload($dir.DIRECTORY_SEPARATOR.$file, $excludeFiles);
                     }

                     if ("text/x-php" == mime_content_type($dir.DIRECTORY_SEPARATOR.$file)) {//Возвращает/фильтрует тип нашего файла
                            require_once($dir.DIRECTORY_SEPARATOR.$file);
                     }

              }
       }
}



