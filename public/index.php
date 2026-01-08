<?php
function dump(...$vars)
{
    echo '<pre>';
    var_dump($_SERVER);
    echo '</pre>';
}

switch($_SERVER['REQUEST_URI']){
    case '/':
        $title = 'World News';
        include '../views/page.php';
        break;
     case '/us':
        $title = 'U.S News';
        include '../views/page.php';
        break;
    case '/tech':
        $title = 'Tech News';
        include '../views/page.php';
        break;
    default:
        echo '404- page not found';
    };