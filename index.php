<?php

$routes = explode('/', $_SERVER['REQUEST_URI']);
echo '<pre>';
echo print_r($routes);
die;
$controllerName = "Main";
$actionName = "index";

if (!empty($routes[1])){
    $controllerName = $routes[1];
}

if (!empty($routes[2])){
    $actionName = $routes[2];
}
$fileName = "controllers/".strtolower($controllerName).".php";
try{
    if (file_exists($fileName)){
        require_once $fileName;
    } else {
        throw new Exception('File not found');
    }
    $className = '\App\\'.ucfirst($controller_name);// \App\Posts

    if (class_exists($classname)){
        $controller = new $className();
    }else {
        throw new Exception('File found bit class not found');
    }

    if (method_exists($controller, $actionName)){
        $controller->$actionName;
    }else{
        throw new Exception('Method not found');
    }
} catch (new Exception('Error 404'));