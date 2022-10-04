<?php
require_once('Request.php');
require_once ('Route.php');
require_once ('Router.php');
require_once ('Dispatcher.php');
require_once ('Response.php');
require_once ('./Controllers/NewFrontController.php');

$request = new Request("http://mvc.practice/", '');

$response = new Response('1.0');

$route1 = new Route("http://mvc.practice/about/", "Controllers\\AboutController");

$route2 = new Route("http://mvc.practice/post/", "Controllers\\PostController");

$router = new Router(array($route1, $route2));

$dispatcher = new Dispatcher;

$frontController = new NewFrontController($router, $dispatcher);

$frontController->run($request, $response);
