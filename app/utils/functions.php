<?php

function assets($name) {
  $file = 'public'.DIRECTORY_SEPARATOR.$name;
  if(is_file($file)) {
    return '/'.$file;
  }
  return null;
}

?>