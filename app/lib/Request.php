<?php
namespace App\Lib;

class Request {

  public function post($key) {
    if(isset($_GET[$key])) {
      return $_GET[$key];
    }
    return null;
  }
  
  public function get($key) {
    if(isset($_POST[$key])) {
      return $_POST[$key];
    }
    return null;
  }

  public static function request() {
    return (object)$_REQUEST;
  }

  public static function uri() {
    return $_SERVER['REQUEST_URI'];
  }

}

?>