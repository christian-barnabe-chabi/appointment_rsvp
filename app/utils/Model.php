<?php

namespace App\Utils;

use App\Utils\Interfaces\Database;
use ErrorException;

class Model {
  protected string $table;
  protected Database $database;

  public function __construct(Database $database)
  {
    $this->database = $database;
    $database->connect();
  }

  public function findAll(array $where = null, array $fields = []) {
    $selectFields = "*";

    if(!empty($fields)) {
      $selectFields = implode(", ", $fields);
    }

    if($where) {
      $_where = [];
      foreach($where as $key => $val) {
        $_where[] = "{$key} = ".addcslashes("\"{$val}\"", '\'');
      }
      $where = "WHERE ". implode(", ", $_where);
    }

    return $this->database->query("SELECT {$selectFields} FROM {$this->table} {$where}")->fetchAll();
  }

  public function findOne($where = null, array $fields = []) {
    $selectFields = "*";
    if(!empty($fields)) {
      $selectFields = implode(", ", $fields);
    }

    if($where) {
      $_where = [];

      foreach($where as $key => $val) {
        $_where[] = "{$key} = ".addcslashes("\"{$val}\"", '\'');
      }
      $where = "WHERE ". implode(", ", $_where);
    }
    return $this->database->query("SELECT {$selectFields} FROM {$this->table} {$where} LIMIT 1")->fetch();
  }

  public function update(array $where, array $obj) {

    $_where = [];

    foreach($where as $key => $val) {
      $_where[] = "{$key} = {$val}";
    }
    
    $where = "WHERE ". implode(", ", $_where);

    $_values = [];

    foreach($obj as $key => $val) {
      $_values[] = "{$key} = ". addcslashes("\"{$val}\"", '\'');
    }

    $values = implode(", ", $_values);

    return $this->database->query("UPDATE {$this->table} SET {$values} {$where}");
  }

  public function create(array $obj) {

    $fields = array_keys($obj);
    $values = array_values($obj);

    $_values = [];
    foreach($values as $value) {
      $_values[] = addcslashes("\"{$value}\"", '\'');
    }

    $fields = implode(", ", $fields);
    $values = implode(", ", $_values);

    return $this->database->query("INSERT INTO {$this->table} ({$fields}) VALUES({$values})");
  }

  public function delete(array $where) {

    $_where = [];

    foreach($where as $key => $val) {
      $_where[] = "{$key} = {$val}";
    }

    $where = "WHERE ". implode(", ", $_where);

    return $this->database->query("DELETE FROM {$this->table} {$where}");
  }

  public function query($statement) {
    return $this->database->query($statement);
  }

  protected function validate() {
    return null;
  }

  public function error() {
    return $this->database->getError();
  }
}

?>