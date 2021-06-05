<?php
namespace App\Utils;

class Request {

  public function get($key) {
    if(isset($_GET[$key])) {
      return $_GET[$key];
    }
    return null;
  }
  
  public function post($key) {
    if(isset($_POST[$key])) {
      return $_POST[$key];
    }
    return null;
  }

  public function request() {
    return (object)$_REQUEST;
  }

  public static function uri() {
    return $_SERVER['REQUEST_URI'];
  }

  public function method() {
    return $_SERVER['REQUEST_METHOD'];
  }

}

?>