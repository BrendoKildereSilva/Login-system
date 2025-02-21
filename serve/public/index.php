<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Routes\Router;
use App\Controllers\HomeController;


$router = new Router();
$router->handle($_SERVER['REQUEST_URI']);