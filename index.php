
<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/admin' :
        require __DIR__ . '/admin/index.php';
        break;
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    default: 
        require __DIR__ . '/views/404.php';
        break;
}