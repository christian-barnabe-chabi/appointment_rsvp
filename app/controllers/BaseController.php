<?php

namespace App\Controllers;

use App\Lib\Request;

abstract class BaseController {
  protected $request;
  function __construct()
  {
    $this->request = Request::request();
  }
}

?>