<?php


// get pages dynamically
function get_pages($fileName, $default, $key)
{

    global $_PATHS;

    //  pages dir
    $dir = $_PATHS[$key] . '/';
    // php file extention 
    $extention = '.php';

    $path = $dir . $fileName . $extention;

    // check if the file exist in page dir and include it 
    if (file_exists($path)) {

        return $path;
    }

    //else return the default home destination
    return "{$dir}$default{$extention}";
}

// redirect page 

function redirect($location)
{
    header('Location: ' . $location);
    exit();
}
