<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SDT PROJECTS | <?= $data['judul']; ?></title>
  <!-- link css -->

  <!-- link css library -->
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">

  <!-- link favicon -->
  <link rel="shortcut icon" href="<?= BASEURL; ?>/img/SDT.png" type="images/x-icon">

  <style>
    .nav-link {
      color: white;
    }

    .head {
      height: 500px;
      align-items: center;
      background-color: black;
      background-repeat: no-repeat;
      background-position: center;
      background-image: url('<?= BASEURL; ?>/img/bg-gif.gif');
    }

    .nav-link:hover {
      color: grey;
    }

    .dropdown-item {
      color: white;
    }

    .dropdown-item:hover {
      background-color: grey;
    }

    .mobile {
      display: none;
    }

    .wadah-mengetik {
      font-size: 24px;
      width: 400px;
      white-space: nowrap;
      overflow: hidden;
      -webkit-animation: ketik 5s steps(50, end);
      animation: ketik 5s steps(50, end);
    }

    @keyframes ketik {
      from {
        width: 0;
      }
    }

    @-webkit-keyframes ketik {
      from {
        width: 0;
      }
    }


    @media screen and (max-width:990px) {
      .mobile {
        display: block;
      }

      .desktop {
        display: none;
      }

      .wadah-mengetik {
        width: 320px;
      }

    }
  </style>
</head>

<body style="background-color: black;">

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container-fluid">
      <a class="navbar-brand text-primary" href="#">SDT <span class="text-secondary">PROJECTS</span><span style="font-size: 8px;">MVC</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Version
            </a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Native</a></li>
              <li><a class="dropdown-item" href="#">MVC</a></li>
              <li><a class="dropdown-item" href="#">CI4</a></li>
            </ul>
          </li>
        </ul>
        <div class="d-flex">
          <a class="btn btn-outline-primary" aria-current="page" href="#">SIGN IN</a>
          <a class="btn btn-light text-dark" style="margin-left: 10px;" href="#">SIGN UP</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- end navbar -->