<?php
    // front-controller
    require_once "autoload.php";

    // controller/action
    $router = new router();
    $defineController = $router->path();

    $controllerName   = $defineController["controller"] . "Controller";
    $controllerAction = "action" . $defineController["action"];
    $controllerParam  = $defineController["param"];


    $controller = new $controllerName;

    if(!empty($controllerParam)) {
        $controller->$controllerAction($controllerParam);
    }
    else {
        $controller->$controllerAction();
    }

//    }
//    else {
//        $error = new error();
//        $error->view404();
//    }
//



