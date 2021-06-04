<?php

namespace App\Lib;

use Exception;

class View {
  public static function present(string $view, array $data = []) {
    extract($data);
    $file = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'app/views/'.$view.'.php';

    if(is_file($file)) {
      require_once($file);
      exit();
    } else {
      throw new Exception("ViewNotFoundException: can\'t find {$file}");
    }
  }

  public static function load($view, array $data = []) {
    extract($data, EXTR_PREFIX_SAME, 'load');
    $file = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'app/views/'.$view.'.php';

    if(is_file($file)) {
      require_once($file);
    }

    return '';
  }
}

?>