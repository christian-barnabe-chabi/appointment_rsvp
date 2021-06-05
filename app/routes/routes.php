<?php

use App\Controllers\HomeController;
use App\Controllers\ServiceController;
use App\Controllers\UserController;
use App\Utils\Route;

Route::define('/user/{action}/{dest}', UserController::class, 'sayHello');
Route::define('/services', ServiceController::class, 'index');
Route::define('/services/new', ServiceController::class, 'newService');
Route::define('/services/delete/{id}', ServiceController::class, 'deleteService');
Route::define('/', HomeController::class, 'index');

?>