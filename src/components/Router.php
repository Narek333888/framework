<?php

namespace src\components;

use src\App;
use src\exceptions\RouterException;

class Router
{
    private array $routes = [];
    private array $current = [];

    /**
     * @throws RouterException
     */
    public function __construct()
    {
        $this->routes = require_once ROOT.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'routes'.DIRECTORY_SEPARATOR.'web.php';
        $this->defineCurrentRoute();
    }

    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $this->current[0];
    }

    /**
     * @return string
     */
    public function getMethodName(): string
    {
        return $this->current[1];
    }

    /**
     * @return void
     * @throws RouterException
     */
    private function defineCurrentRoute(): void
    {
        $current = $this->routes[App::$request->getUri()] ?? null;

        if (! $current)
        {
            throw new RouterException('Route is not defined! Did you registered your route correctly?');
        }

        $this->current = $current;
    }
}