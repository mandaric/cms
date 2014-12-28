<?php

// check request uri and load files
switch($_SERVER['REQUEST_URI'])
{
    case '/users':
        require __DIR__ . '/users.php';
        break;

    default:
        echo 'route not found';
        break;
}