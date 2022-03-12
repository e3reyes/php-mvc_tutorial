<?php

namespace app\core;
class APPlication
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;

    public function __construct(Router $router, $rootPath)
    {
        $this->router = $router;
        $this->request = $router->request;
        APPlication::$ROOT_DIR = $rootPath;
    }

    public function run(){
        echo $this->router->resolve();
    }
}