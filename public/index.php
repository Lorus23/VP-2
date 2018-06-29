<?php
session_start();
define('APPLICATION_PATH', realpath(__DIR__ . '/..') . '/app');

require_once APPLICATION_PATH . "/../vendor/autoload.php";

$routes = explode('/', $_SERVER['REQUEST_URI']);

$controllerName = "User";
$actionName = "index";
$parameter = NULL;


if (sizeof($routes) > 2) {
    list(, $controllerName, $actionName,$parameter) = $routes;
}

try {
    $className = '\App\controllers\\' . ucfirst($controllerName).'Controller';// \App\Posts
    $controller = new $className();
    if (method_exists($controller, $actionName)) {
        $controller->$actionName($parameter);
    } else {
        throw new Exception('Method not found');
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}