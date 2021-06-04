<?php

namespace App\Controllers;

use App\Lib\View;

class HomeController extends BaseController {


  public function index() {
    return View::present('home');
  }

}

?>