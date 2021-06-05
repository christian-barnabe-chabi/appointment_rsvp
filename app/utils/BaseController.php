<?php

namespace App\Utils;

use App\Utils\Request;

abstract class BaseController {
  protected $request;
  function __construct()
  {
    $this->request = Request::request();
  }
}

?>