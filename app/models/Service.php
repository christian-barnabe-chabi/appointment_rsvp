<?php

namespace App\Models;

use App\Utils\Model;
use App\Utils\MySQLDatabase;

class Service extends Model {

  protected string $table = "services";

  public function __construct()
  {
    parent::__construct(new MySQLDatabase());
  }

}

?>