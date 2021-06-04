<?php

namespace App\Lib;

use Exception;

class Route {
  public static function define($route, $class, $action) {

    $routeToMatch = preg_replace('/(\{\w+\})/', '(.+)', $route);
    $routeToMatch = preg_replace('/\//', '\/', $routeToMatch);
    $routePattern = '/'.$routeToMatch.'/i';

    if(preg_match($routePattern, Request::uri(), $match)) {
      array_shift($match);
  
      if(class_exists($class)) {
        $classObject = new $class();
        if(method_exists($classObject, $action)) {
          $classObject->{$action}(...$match);
          exit();
        } else {
          throw new Exception("{$class} doesn't implement {$action} method");
        }
      } else {
        throw new Exception($class.' class not found');
      }
    }
  }
}
