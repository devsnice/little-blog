<?php
    // front-controller
    require_once "autoload.php";

    $controller = new articleController();
    $controller->actionAll();

