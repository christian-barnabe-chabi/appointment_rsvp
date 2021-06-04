<?php

namespace App\Controllers;

class UserController extends BaseController {


  public function sayHello($name, $copy) {
    print_r($name);
    print_r($copy);
  }

}

?>