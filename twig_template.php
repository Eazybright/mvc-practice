<?php

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/views');
$twig = new Environment($loader);

echo $twig->render('posts.html.twig', ['name' => 'John Doe',
    'occupation' => 'gardener']);
