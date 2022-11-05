<?php

namespace app\controllers;

use src\components\Controller;
use src\components\view\View;

class NewsController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $data = ['title' => 'News', 'content' => 'News'];

        return $this->view('news', $data);
    }
}