<?php

namespace App\Routes;

class Router{
  private $routes;

  public function __construct(){
    $this->routes = require __DIR__  . '/web.php';
  }

  public function handle($uri){
    $uri = explode("?", $uri)[0];
    
    
    if(isset($this->routes[$uri])){
      [$controller, $method] = $this->routes[$uri];
      $controllerInstance = new $controller();
      $controllerInstance->$method();

    }
    else
    {
      http_response_code(404);
      echo "Página não encontrada!";
    }

  }

}