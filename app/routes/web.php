<?php

use app\controllers\HomeController;
use app\controllers\NewsController;

return [
    '/' => [HomeController::class, 'index'],
    '/news' => [NewsController::class, 'index']
];