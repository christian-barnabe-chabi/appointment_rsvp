<?php

// spl_autoload_register(function ($class) {

//   $classPathArray = explode("\\", $class);
//   $className = $classPathArray[count($classPathArray) - 1];

//   array_splice($classPathArray, count($classPathArray) - 1, 1);
//   $classDirectory = strtolower(implode("\\", $classPathArray));
//   $file = $classDirectory . '\\' . $className . '.php';

//   if (is_file($file)) {
//     require_once($file);
//   } else {
//     throw new Exception($file . ' not found');
//   }
// });

spl_autoload_register();
require_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'app/utils/functions.php');
