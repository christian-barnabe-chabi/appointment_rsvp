<?php

namespace App\Controllers;

use App\Utils\BaseController;
use App\Utils\View;

class ServiceController extends BaseController {

  public function index() {
    return View::present('service');
  }

}

?>