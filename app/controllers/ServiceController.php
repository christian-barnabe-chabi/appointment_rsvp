<?php

namespace App\Controllers;

use App\Lib\View;

class ServiceController extends BaseController {

  public function index() {
    return View::present('service');
  }

}

?>