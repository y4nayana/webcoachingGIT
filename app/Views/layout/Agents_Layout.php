<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Valorant Agents' ?></title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <style>
        .navbar-brand img {
            max-width: 50px;
            height: auto;
        }
        body {
            background-color: #0F1923;
            color: white;
            font-family: Arial, sans-serif;
        }
        .container-flex {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            width: 40%;
        }
        .grid img {
            width: 100%;
            cursor: pointer;
        }
        .details {
            width: 60%;
            padding: 20px;
            border-left: 1px solid #ccc;
            text-align: center;
        }
        .details img {
            width: 50%;
            height: auto;
        }
        .agent-role {
            font-size: 1.2em;
            margin-top: 10px;
        }
    </style>
    <?= $this->renderSection('header') ?>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg" style="background-color: #0F1923;">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?= base_url('guides') ?>">
    <img src="<?= base_url('image/GG_Logo.png') ?>" alt="Logo">
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
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= base_url() ?>">Basic</a></li>
            <li><a class="dropdown-item" href="<?= base_url('agents') ?>">Agents</a></li>
            <li><a class="dropdown-item" href="#">Maps</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('coaching') ?>" style="color: white;">Coaching</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <?php if (logged_in()) : ?>
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
                <?= $this->renderSection('header') ?>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
          <?= $this->renderSection('content') ?>
        </div>
    </div>
</div>

<footer>
    <div class="container text-center" style="color: white;">
        Copyright &copy; GameGuides
    </div>
</footer>

</body>
</html>
