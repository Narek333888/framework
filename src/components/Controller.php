<?php

namespace src\components;

use src\components\view\View;

class Controller
{
    /**
     * @param string $path
     * @param array $data
     * @return View
     */
    public function view(string $path, array $data = []): View
    {
        return (new View($path, $data))->render();
    }
}