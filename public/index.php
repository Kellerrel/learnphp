<?php
function dump(...$vars)
{
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

spl_autoload_register(function ($class) {
    dump($class);
    $class = str_replace('App\\', '', $class);
    require_once "../src/$class.php";
});

use App\Controllers\PublicController;
use App\Router;

$router = new Router();
dump($router);

$db = new App\DB();
dump($db);

$controller = new PublicController();
dump($controller);

// switch($_SERVER['REQUEST_URI']){
//     case '/':
//         $title = 'World News';
//         include '../views/page.php';
//         break;
//      case '/us':
//         $title = 'U.S News';
//         include '../views/page.php';
//         break;
//     case '/tech':
//         $title = 'Tech News';
//         include '../views/page.php';
//         break;
//     default:
//         echo '404- page not found';
//     };