<?php
include('config/views.php');

$page = $_GET['page'] ?? null;
if (!empty($page)) {

    $data = [
        'about' => [
            'model' => 'About',
            'view' => 'AboutView',
            'controller' => 'AboutController'
        ],
        'portfolio' => [
            'model' => 'Portfolio',
            'view' => 'PortfolioView',
            'controller' => 'PortfolioController'
        ]
    ];

    foreach($data as $key => $components){
        if ($page == $key) {
            $model = $components['model'];
            $view = $components['view'];
            $controller = $components['controller'];
            break;
        }
    }


    if (isset($model) && isset($controller) && isset($view)) {
        $m = new $model();
        $c = new $controller($m);
        $v = new $view($c, $m);
        echo $v->output();
    }
}