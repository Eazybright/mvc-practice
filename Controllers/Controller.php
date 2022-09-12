<?php

class Controller
{
    public function __construct(private $model) {
    }

    public function clicked()
    {
        $this->model->string = "Updated Data, thanks to MVC and PHP!";
    }
}