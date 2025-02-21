<?php

namespace App\config;

use PDO;
use PDOException;


class Database {
  private $host = "localhost";
  private $dbname = "sistema";
  private $user = "root";
  private $password = "";
  public $conn;

  public function __contruction(){
    try{
      $this->conn = new PDO("pgsql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
    }
  }

  public function getConnection(){
    return $this->conn;
  }
}