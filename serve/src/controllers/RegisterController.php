<?php

namespace App\Controllers;
use App\Models\UserModel;

class RegisterController{
  
  public function index(){
    $userModel = new UserModel();
    $users = $userModel->getAllUser();
    header('Content-Type: application/json');
    echo json_encode($users);
  }


  public function EmailExists(){
    header("Access-Control-Allow-Origin: *");
    header('Content-Type: application/json');

    $EMAIL =  htmlentities($_REQUEST['email']);    
    $userModel = new userModel();
    $resultado = $userModel->checkEmail($EMAIL);

    if(!empty($resultado)){
      echo 'email is in use';
    }
    else
    {
      echo 'email not is in use';
    }
  }
}