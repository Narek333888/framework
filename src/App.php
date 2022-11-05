<?php

namespace src;

use src\components\Request;
use src\components\Router;

class App
{
    protected Router $router;
    public static Request $request;

    public function __construct()
    {
        self::$request = new Request();
        $this->router = new Router();
    }

    /**
     * @return mixed
     */
    public function handle(): mixed
    {
        $controllerNamespace = $this->router->getControllerName();
        $controller = new $controllerNamespace;

        return $controller->{$this->router->getMethodName()}();
    }
}
