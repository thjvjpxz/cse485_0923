<?php
    require_once ('../core/config.php');

    $controller = isset($_GET['c']) ? $_GET['c'] : 'classroom';
    $action = isset($_GET['a']) ? $_GET['a'] : 'index';

//    Process first letter of $controller
    $controller = ucfirst($controller) . 'Controller';
    $pathController = APP_ROOT . '/app/controllers/' . $controller . '.php';
//    echo $pathController;

//   Check existence of file
    if (!file_exists($pathController)) {
        die ('File not exist');
    }

//    File exists
    require_once ($pathController);

//    Object init
    $call = new $controller();
    $call->$action();