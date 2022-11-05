<?php

use src\App;

require_once '../vendor/autoload.php';

const ROOT = __DIR__ . DIRECTORY_SEPARATOR . '..';

$app = new App;
$response = $app->handle();

echo $response;