<?php

use App\Utils\View;
?>
<?= View::load('layouts/header') ?>

<div class="container mt-5">

  <h1>Our services</h1>

  <?php foreach ($services as $service) : ?>

    <div class="card mb-3">
      <div class="card-header">
        <?= $service['name'] ?>
      </div>
      <div class="card-body">
        <?= $service['description'] ?>
      </div>

      <div class="card-footer">
        <form action="/services/delete/<?= $service['id'] ?>" method="post">
          <button class="btn btn-danger" >Delete</button>
        </form>
      </div>
    </div>

  <?php endforeach; ?>

</div>

<?= View::load('layouts/footer') ?>