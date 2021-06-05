<?php

use App\Utils\View;

require_once('vendor/autoload.php');
require_once('app/configs/config.php');
require_once('app/routes/routes.php');


// return header("HTTP/1.0 404 Not Found");
View::present('layouts/404');

?>