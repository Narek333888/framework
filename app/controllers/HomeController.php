<?php

namespace app\controllers;

use src\components\Controller;
use src\components\validator\src\Rules\Classes\Alphabetical;
use src\components\validator\src\Rules\Classes\Required;
use src\components\validator\Validator;
use src\components\view\View;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $data = ['title' => 'Home', 'content' => 'Home'];

        return $this->view('home', $data);
    }
}