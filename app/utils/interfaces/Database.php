<?php

namespace App\Utils\Interfaces;

interface Database {
  public function connect();
  public function query(string $query);
  public function execute();
  public function getError();
}

?>