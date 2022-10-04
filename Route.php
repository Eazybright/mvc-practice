<?php

class Route {

    public function __construct($path, $controllerClass) {
        $this->path = $path;
        $this->controllerClass = $controllerClass;
    }

    public function match($request) {
        return $this->path === $request->getUri();
    }

    public function createController() {
        return new $this->controllerClass;
    }
}
