<?php

namespace App\Controllers;
use App\Models\UserModel;

class userController{
  
  public function index(){
    header("Access-Control-Allow-Origin: *");
    header('Content-Type: application/json');

    $userModel = new UserModel();
    $users = $userModel->getAllUser();

    echo json_encode($users);
  } 
}