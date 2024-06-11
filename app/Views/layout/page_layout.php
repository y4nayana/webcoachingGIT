<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css')?>">
    <script src="<?= base_url('js/jquery.min.js')?>"></script>
    <script src="<?= base_url('js/bootsrap.min.js')?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <style>
      .navbar-brand img {
    max-width: 50px; /* Atur lebar maksimum logo */
    height: auto; /* Biarkan tinggi mengikuti proporsi aslinya */
  }

    </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg" style="background-color: #0F1923;">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?=base_url('guides')?>">
    <img src="/image/GG_Logo.png" alt="Logo">
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
        Guides
        </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" href="<?=base_url('guides') ?>">
            <li><a class="dropdown-item" href="<?=base_url('agents') ?>">Agents</a></li>
            <li><a class="dropdown-item" href="<?=base_url('maps') ?>">Maps</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
        Coaching
        </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" href="<?=base_url('coaching') ?>">
            <li><a class="dropdown-item" href="<?=base_url('coaching') ?>">Coaching</a></li>
            <li><a class="dropdown-item" href="<?=base_url('payment') ?>">Payment</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <?php if(logged_in()) : ?>
      <a class="btn btn-outline-success" href="/logout">Logout</a>
        <?php else : ?>
      <a class="btn btn-outline-success" href="/login">Login</a>
      <?php endif ; ?>
      </form>
    </div>
  </div>
</nav>

<header class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?=$this->renderSection('header')?>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
          <?=$this->renderSection('content')?>
        </div>
    </div>
</div>


<script>
    function showDetails(name, imgSrc) {
        document.getElementById('details-img').src = imgSrc;
    }
</script>

</body>
</html>