<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tech_education</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/280cb748a7.js" crossorigin="anonymous"></script>
  
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div class="cantainer top-fixed">
    <header class="navcss">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="header-top-info  color">
                <span class="text-light text-center mx-2">Open hours: 8.00-18.00 Mon-Sat</span>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="social-links mt-2">
                <a href="#"><i class="fa fa-facebook text-light pe-3"></i></a>
                <a href="#"><i class="fa fa-google-plus text-light pe-3"></i></a>
                <a href="#"><i class="fa fa-twitter text-light pe-3"></i></a>
                <a href="#"><i class="fa fa-pinterest-p text-light pe-3"></i></a>
                <a href="#"><i class="fa fa-instagram text-light pe-3"></i></a>
              </div>
            </div>
          </div>
        </div>
    </header>
  </div>
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1><a href="index.html">Home</a></h1> -->
        <img src="assets/img/slide/logo.png" alt="logo" width="300">

      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="">Home</a></li>
          <li><a href="<?php include 'about us.php';?>">About Us</a></li>
          <li class="dropdown"><a href="#"><span>Classes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Deep Drop Down 1</a></li>
              <li><a href="#">Deep Drop Down 2</a></li>
            </ul>
          </li>
          <li><a href="">Teachers Page</a></li>
          <li><a href="">Gallery</a></li>
          <li><a href="">Blog Page</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <?php
  include 'footer.php';
  ?>
  
</body>

</html>