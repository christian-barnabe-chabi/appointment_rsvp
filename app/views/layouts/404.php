<?php

use App\Utils\View;

?>
<?= View::load('layouts/header', ["pageTitle" => "New Service Form - RSVP Medical App"]) ?>

<div class="container mt-5 text-center" style="height: 60%;">

  <h1 class="text-danger">404 Page Not Found</h1>
  <p class="lead"><span class="text-danger">Oups</span>. It looks like the page you are looking for doesn't exist or has moved!</p>

  <div>
    <img src="<?= assets('images/404.jpg') ?>" alt="" srcset="" width="300px">
  </div>

</div>