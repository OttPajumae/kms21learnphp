<?php


// include 'src/Cat.php';  // on ka include_once
// require 'src/Cat.php'; // on ka require_once
use App\Controllers\PublicController;
use App\Router;

spl_autoload_register(function($class){
//     //var_dump($class)
    $class = substr($class, strlen('App\\'));
    require_once "src/$class.php";
});
require 'helpers.php';
require 'routes.php';

$routes = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $routes->match();
    if($match){
        if(is_callable($match['action'])){
            call_user_func($match['action']);
        }
        if(is_array($match['action'])){
            $class = $match['action'][0];
            $method = $match['action'][1];
            $controller = new $class();
            $controller->$method();
        }
    }
    else{
        http_response_code(404);
        echo '404';
    }

// $cat = new Cat(); // Kui on namespace ka siis peab olema: new App\Cat();
// var_dump(Router::$routes); 
// die;  


// switch($_SERVER['REQUEST_URI']){
//     case '/':
//         include 'views/index.php';
//         break;
//     case '/page1': // Case on nimi
//         include 'views/page1.php'; // Include on fail
//         break;
//     case '/page2':
//         include 'views/page2.php';
//         break;
//     default:
//         echo '404';
//         break;


// }
