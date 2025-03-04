<?php

namespace App\config;

use PDO;
use PDOException;


class Database {
  private $host = "127.0.0.1";
  private $port = "5432";
  private $dbname = "systemlogin";
  private $user = "postgres";
  private $password = "root";
  public $conn;


  public function __construct(){
    try{
      $this->conn = new PDO("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname", $this->user, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
    }
  }

  public function getConnection(){
    return $this->conn;
  }
}
