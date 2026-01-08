<?php
function dump(...$vars)
{
    echo '<pre>';
    var_dump($_SERVER);
    echo '</pre>';
}

switch($_SERVER['REQUEST_URI']){
    case '/':
        include '../views/index.php';
        break;
     case '/us':
        include '../views/us.php';
        break;
    case '/tech':
        include '../views/tech.php';
        break;
    default:
        echo '404- page not found';
    };