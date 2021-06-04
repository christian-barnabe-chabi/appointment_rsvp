<?php

use App\Controllers\HomeController;
use App\Controllers\ServiceController;
use App\Controllers\UserController;
use App\Lib\Route;

Route::define('/user/{action}/{dest}', UserController::class, 'sayHello');
Route::define('/services', ServiceController::class, 'index');
Route::define('/', HomeController::class, 'index');

?>