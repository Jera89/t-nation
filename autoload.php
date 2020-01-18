<?php

spl_autoload_register(function ($class){
    $file = __DIR__ . '\\' . $class . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
            include $file;
    }
});

