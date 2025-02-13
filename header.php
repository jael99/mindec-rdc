<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Ministère de décentralisation et réformes institutionnelles</title>
  <meta content="" name="description">
  <meta content="" name="author">
  <meta content="" name="keywords">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <!-- favicon -->
  <link href="favicon.ico" rel="icon" sizes="32x32" type="image/ico">
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- font themify CSS -->
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- font awesome CSS -->
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
  <!-- revolution slider css -->
  <link rel="stylesheet" type="text/css" href="css/fullscreen.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
  <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
  <!-- on3step CSS -->
  <link href="css/animated-on3step.css" rel="stylesheet">
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.css" rel="stylesheet">
  <link href="css/owl.transitions.css" rel="stylesheet">
  <link href="css/on3step-style.css" rel="stylesheet">
  <link href="css/queries-on3step.css" media="all" rel="stylesheet" type="text/css">
  <link href="css/custom.css" media="all" rel="stylesheet" type="text/css">
</head>

<style>
  .navbar-brand {
    display: flex;
    flex-direction: row;
    font-size: 13px;
    line-height: 1.3;
    align-items: center;
    color: white !important;
  }

  .navbar-brand .logo {
    width: 70px !important;
    margin-right: 8px;
  }

  img {
    max-width: 100%;
  }

  .underline {
    text-decoration: underline !important;
  }

  .yellowpage {
    padding: 2px !important;
  }
</style>

<body>

  <!-- preloader -->
  <div class="bg-preloader"></div>
  <div class="preloader">
    <div class="mainpreloader">
      <span></span>
    </div>
  </div>
  <!-- preloader end -->

  <!-- content wraper -->
  <div class="content-wrapper">

    <div class="flag-bars">
      <div></div>
      <div></div>
      <div></div>
    </div>

    <!-- subnav -->
    <!-- <div class="subnav">
      <div class="container">
          <div class="row">

          <div class="col-md-8">
            <div class="social-icons-subnav">
              <a href="#"><span class="ti-location-pin"></span>129 Park street, New York City, NY 10903</a>
              <a href="#"><span class="ti-mobile"></span>+02151 7778 009</a>
              <a href="#"><span class="ti-time"></span>Monday - Friday 08:00am ~ 05:00pm</a>
            </div>
          </div>
          
          <div class="col-md-4">
              <div class="right">
                  <div class="social-icons-subnav">
                      <a href="#"><span class="ti-facebook"></span></a>
                      <a href="#"><span class="ti-dribbble"></span></a>
                      <a href="#"><span class="ti-twitter"></span></a>
                      <a href="#"><span class="ti-linkedin"></span></a>
                  </div>
              </div>
          </div>
          
          </div>
      </div>
    </div> -->
    <!-- subnav end -->

    <!-- nav -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="row">

          <!-- menu mobile display -->
          <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span></button>

          <!-- logo -->
          <a class="navbar-brand" href="index.php">
            <img alt="logo" class="logo" src="img/logo.png">

          </a>


          <!-- mainmenu start -->
          <div class="menu-init" id="main-menu">
            <nav id="menu-center">
              <ul>
                <li>
                  <a href="index.php">Accueil</a>
                  <!--<ul>
                    <li><a href="index-rev-slider.html">Index Rev Slider</a></li>
                    <li><a href="index-slider.html">Index Slider</a></li>
                    <li><a href="index.html">Slider Text</a></li>
                    <li><a href="index-white.html">Index White</a></li>
                    <li><a href="intro/index.html">INTRO</a></li>
                  </ul>-->
                </li>
                <?php
                if ($page == 'presentation') {
                  echo " <li><a class='actived'  href='presentation.php'>Presentation</a>
                
                </li>";
                } else {
                  echo "<li><a href='presentation.php'>Presentation</a>
                
                </li>";
                } ?>
                <?php
                if ($page == 'juridique') {
                  echo "<li><a class='actived' href='cadre_juri.php'>Cadre Juridique</a>
                
                </li>";
                } else {
                  echo "<li><a href='cadre_juri.php'>Cadre Juridique</a>
                 
                </li>";
                } ?>

                <?php
                if ($page == 'historique') {
                  echo "<li><a class='actived' href='historique.php'>Contexte Historique</a>
                
                </li>";
                } else {
                  echo "<li><a href='historique.php'>Contexte Historique</a>
                 
                </li>";
                } ?>

                <?php
                if ($page == 'Carto') {
                  echo "<li><a class='actived' href='carto.php'>Cartographie</a> 
                    </li>";
                } else {
                  echo "<li><a href='carto.php'>Cartographie</a> </li>";
                } ?>

                <?php
                if ($page == 'actions') {
                  echo "<li><a class='actived' href='actions.php'>Activités</a>
                        
                    </li>";
                } else {
                  echo "<li class='nav-item dropdown'><a href='actions.php'>Activités</a>
                      </li>";
                } ?>

                <?php
                /**if ($page == 'galeries') {
                  echo "<li><a class='actived' href='galerie.php'>Galleries</a>
                        
                    </li>";
                } else {
                  echo "<li class='nav-item dropdown'><a href='galerie.php'>Galleries</a>
                      </li>";
                } **/ ?>

                <?php if ($page == "Contact") {
                  echo "<li><a  class='actived' href='contact.php'>Contact</a>
                   </li>
                  ";
                } else {
                  echo "<li><a  href='contact.php'>Contact</a>
                   </li>";
                } ?>
              </ul>
            </nav>
          </div>
          <!-- mainmenu end -->

        </div>
      </div>
      <!-- container -->
    </div>
    <!-- nav end -->