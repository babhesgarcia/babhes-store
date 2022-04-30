<?php

//  .. helper function
include __DIR__ . '/helper_functions.php';

//   ..load classes
spl_autoload_register('classes_loader');


function classes_loader($className)
{
    $dir = __DIR__ . '/classes';
    $extension = '.php';
    // include full path
    $path = "$dir/$className$extension";
    if (file_exists($path)) {
        require $path;
    }
}
