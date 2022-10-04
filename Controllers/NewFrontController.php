<?php

class NewFrontController {

    public function __construct($router, $dispatcher) {
        $this->router = $router;
        $this->dispatcher = $dispatcher;
    }

    public function run($request, $response) {
        $route = $this->router->route($request, $response);
        $this->dispatcher->dispatch($route, $request, $response);
  }
}
