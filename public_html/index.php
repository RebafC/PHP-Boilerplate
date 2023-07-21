<?php

use Tracy\Debugger;

require_once __DIR__ . '/../vendor/autoload.php';

Debugger::enable();

$router = new AltoRouter();
/*
    Sometimes the following line needs to be active to ensure the routes are found.
    $router->setBasePath('/phpBoilerplate/public_html');
*/
$router->addRoutes(
    [
        ['GET',  '/', 'App\Controllers\Home#render', 'home'],
        ['GET',  '/example', 'App\Controllers\Example#render', 'example'],
    ]
);

/* Find the matching router */
$match = $router->match();

if (!$match) {
    /* no route was matched */
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    header('Location: ' . $router->generate('notfound') . '/');
}

list($controller, $action) = explode('#', $match['target']);
if (!is_callable([$controller, $action])) {
    die('Error: Cannot call ' . $controller . '#' . $action);
    /* possibly throw a 404 error */
}
$obj = new $controller($router);

echo call_user_func_array([$obj, $action], [$match['params']]);
