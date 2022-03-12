<?php

define ('DS', DIRECTORY_SEPARATOR);
require_once __DIR__ . '/../vendor/autoload.php';


$request = new \app\core\Request();
$router = new \app\core\Router($request);

$app = new \app\core\APPlication($router, __DIR__.'/..');



$app->router->get('/', 'home');


$app->router->get('/contact', 'contact');

$app->run();