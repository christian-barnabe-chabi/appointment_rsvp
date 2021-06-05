<?php

namespace App\Models;

use App\Utils\Model;
use App\Utils\MySQLDatabase;

class User extends Model{
  protected $table = "users";

  public function __construct()
  {
    parent::__construct(new MySQLDatabase());
  }
}

?>