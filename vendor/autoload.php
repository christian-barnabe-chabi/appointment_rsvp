<?php

spl_autoload_register(function($class) {
    $file = '.php';
  
    if(is_file($file)) {
      require_once($file);
    } else {
      throw new Exception($file.' not found');
    }
});

?>