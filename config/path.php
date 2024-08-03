<?php
define('BASE_PATH', __DIR__);
define('PUBLIC_PATH', BASE_PATH . '/public');

function base_path($path = '') {
    return BASE_PATH . ($path ? DIRECTORY_SEPARATOR . $path : $path);
}

function public_path($path = '') {
    return PUBLIC_PATH . ($path ? DIRECTORY_SEPARATOR . $path : $path);
}

?>