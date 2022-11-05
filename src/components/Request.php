<?php

namespace src\components;

class Request
{
    /**
     * @return string
     */
    public function getUri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }
}