<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BooksHaven</title>

  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!-- OWL CAROUSEL CDN -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" />

  <!-- FONT AWESOME ICONS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

  <!-- CUSTOM CSS FILE -->

  <link rel="stylesheet" href="style.css">

  <?php
  //REQUIRE FUNCTIONS.PHP
  require('functions.php');

   ?>

</head>

<body>

  <!-- START HEADER -->
  <header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
      <p class="font-raleway font-size-12 text-black-50 m-0">Anonas, Sta. Mesa, Maynila, Kalakhang Maynila</p>

      <div class="font-raleway font-size-14">
        <a href="#" class="px-3 border-right border-left text-dark">Login</a>
      </div>
    </div>


    <!-- PRIMARY NAVIGATION - BOOTSTRAP -->
    <nav class="navbar navbar-expand-lg navbar-dark color-primary-button">
      <div class="container-fluid">
        <a class="navbar-brand font-raleway font-size-22" href="index.php">BooksHaven PH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="navbar-nav m-auto">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="index.php#products">Books</a>
            <!-- <a class="nav-link " href="cart.php">My Cart</a> -->
          </div>
          <form action="#" class="font-size-14 font-raleway">
            <a href="cart.php" class="py-2 rounded-pill color-primary-">
            <span class="font-size-20 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
            <span class="font-size-20 px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData(table:'cart'));?></span>
            </a>
          </form>
        </div>
      </div>
    </nav>
    <!-- !PRIMARY NAVIGATION - BOOTSTRAP -->
  </header>
  <!-- !START HEADER -->


  <!-- START MAIN SITE -->
  <main id="main-site">
