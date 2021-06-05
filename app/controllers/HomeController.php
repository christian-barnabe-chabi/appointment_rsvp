<?php

namespace App\Controllers;

use App\Utils\View;
use App\Utils\BaseController;

class HomeController extends BaseController {


  public function index() {
    return View::present('home');
  }

}

?>