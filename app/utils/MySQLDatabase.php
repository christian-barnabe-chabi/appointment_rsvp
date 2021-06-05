<?php

namespace App\Utils;

use App\Utils\Interfaces\Database;
use PDO;
use PDOException;

class MySQLDatabase implements Database {

  private $connection = null;

  public function connect() {
    $host = DATABASE_HOST;
    $name = DATABASE_NAME;
    try {
      $this->connection = new PDO("mysql:host={$host};dbname={$name}", DATABASE_USER, DATABASE_PASS);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      print_r($e->getMessage());
      exit();
    }
  }

  public function query(string $query) {
    return $this->connection->query($query);
  }

  public function execute() {

  }

  public function getError()
  {
    return $this->connection->errorInfo();
  }
}

?>