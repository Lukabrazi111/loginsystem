<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {

    $path = 'assets/classes/';
    $pathExt = '.class.php';
    $fileName = $path . $className . $pathExt;

    if (!file_exists($fileName)) {
        return false;
    }

    include_once $path . $className. $pathExt;

}