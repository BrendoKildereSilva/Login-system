<?php

namespace App\Models;
use App\Config\Database;
use PDO;

class UserModel{
  private $conn;

  public function __construct(){
    $db = new Database();
    $this->conn = $db->getConnection();
  }

  public function getAllUser(){
    $sql = "SELECT * FROM users";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}