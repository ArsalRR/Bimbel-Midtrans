<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Bimbel Rangking</title>
  <!-- bootstrap core css -->
 
  <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.css') ?>" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="<?= base_url('css/css-circular-prog-bar.css ') ?>">
  <!-- fonts style -->
  <link href="  <?= base_url('https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap') ?>" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="<?= base_url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css ') ?>">
  <!-- Custom styles for this template -->
  <link href=" <?= base_url('css/style.css ') ?>" rel="stylesheet" />
  <!-- responsive style -->
  <link href=" <?= base_url('css/responsive.css') ?>" rel="stylesheet" />




  <link rel="stylesheet" href="<?= base_url('css/css-circular-prog-bar.css ') ?>">


</head>

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="#">
            <img src="<?= base_url('images/logo.png') ?>" alt="">
            <span>
              Bimbingan Belajar Rangking
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/TaskControll/about"> About </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="/TaskControll/mentor"> Mentor</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/User/daftar">Daftar Sekarang</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/rangking">Login</a>
                </li>

              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
        </nav>
      </div>
    </header>
    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h3>
            Welcome to <br>
            Bimbel Terbaik
          </h3>
          <h1>
            Rangking
          </h1>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
            some form, by injected humour, or randomised
          </p>
          <div class="hero_btn-continer">
            <a href="" class="call_to-btn btn_white-border">
              <span>
                Contact
              </span>
              <img src="images/right-arrow.png" alt="">
            </a>
          </div>
        </div>
        <div class="hero_img-container">
          <div>
            <img src="images/hero.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
  </div>
  
    <div class="container">
  <?= $this->renderSection('about') ?>
  </div>

 
  <?= $this->renderSection('mentor') ?>
  
  
  <?= $this->renderSection('testi') ?>
  


 
  <?= $this->renderSection('daftar') ?>

  

</body>

</html>