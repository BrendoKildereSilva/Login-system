<?php

use App\Controllers\HomeController;
use App\Controllers\userController;
use App\Controllers\RegisterController;


return [
  '/' => [HomeController::class, 'index'],
  '/users' => [userController::class, 'index'],
  '/check-email' => [RegisterController::class, 'EmailExists']
];
