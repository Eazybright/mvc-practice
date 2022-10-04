<?php

//use LibraryLoaderAutoloader,
//    LibraryControllerFrontController;
require ('controllers/FrontController.php');

require_once __DIR__ . "/vendor/autoload.php";
//$autoloader = new Autoloader;
//$autoloader->register();
echo $_SERVER['REQUEST_URI'];

//$frontController = new FrontController();
$frontController = new FrontController(array(
    "controller" => "about",
    "action"     => "show",
    "params"     => array(1)
));
$frontController->run();
