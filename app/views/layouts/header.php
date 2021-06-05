<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?? 'RSVP Medical App' ?></title>
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
  <link rel="stylesheet" href="<?= assets('css/styles.css') ?>">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
    <a class="navbar-brand" href="/">RSVP Medical App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="/">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/services">Services</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <span class="nav-item dropdown  mr-sm-2">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="https://ui-avatars.com/api/?name=Christian+Barnabe&background=random" class="rounded-circle" width="40" height="40">
          Christian</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Mes rendez-vous</a>
          <a class="dropdown-item" href="#">Mon compte</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Déconnexion</a>
        </div>
      </span>
    </div>
  </nav>