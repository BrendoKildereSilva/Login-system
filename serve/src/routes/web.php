<?php

use App\Controllers\HomeController;
use App\Controllers\userController;


return [
  '/' => [HomeController::class, 'index'],
  '/users' => [userController::class, 'index']
];
