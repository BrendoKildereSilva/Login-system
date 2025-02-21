<?php

namespace App\Controllers;
use App\Models\UserModel;

class userController{
  
  public function index(){
    $userModel = new UserModel();
    $users = $userModel->getAllUser();

    header('Content-Type: application/json');
    echo json_encode($users);
  }
}