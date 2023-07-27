<?php

//print_r($_SERVER);
$page='index.php';
if(isset($_SERVER['SCRIPT_NAME'])){
$page=$_SERVER['SCRIPT_NAME'];
}

?><!DOCTYPE html>
<html lang="en">
<head>
  <title>CU Render</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="images/CU_Black.png" rel="shortcut icon"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
</head>
<body>
<div class="preloader">
<div class="preloader_content">
<div class="preloader_content__container">
<p class="preloader_content__container__text">CuRender</p>
<ul class="preloader_content__container__list count_5">
<li class="preloader_content__container__list__item">Portfolio</li><li class="preloader_content__container__list__item">Gallery</li><li class="preloader_content__container__list__item">About</li><li class="preloader_content__container__list__item">Contact</li><li class="preloader_content__container__list__item">Service</li>               </ul>
</div>
</div>
</div>
<header>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
  <a class="navbar-brand" href="index.php"><img src="images/White-01.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php echo (strpos( $page,'index.php')) ? 'active' : ''  ?>">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item <?php echo (strpos( $page,'gallery.php')) ? 'active' : ''  ?>">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item <?php echo (strpos( $page,'about-us.php')) ? 'active' : ''  ?>">
        <a class="nav-link" href="about-us.php">About us</a>
      </li>
      <li class="nav-item <?php echo (strpos( $page,'contact.php')) ? 'active' : ''  ?>">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link btn-orange schedule-demo" href="#">Get Started</a>
      </li>
    </ul>
  </div>
</nav>
</header>
<div class="clearfix"></div>