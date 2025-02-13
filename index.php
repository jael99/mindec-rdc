<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Min Decen & Reform</title>
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
  <link href="css/custom.css" rel="stylesheet">
</head>
<style>
  .navbar {
    z-index: 99999 !important;
  }

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

  .profile {
    height: 80px;
    width: 80px;
    border-radius: 50%;
    margin-right: 8px;
    margin-bottom: 8px;
  }

  .profile img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
  }

  .profile-row {
    display: flex;
    flex-direction: row;
    align-items: center;
  }


  .imageportofolio {
    height: 205px !important;
    object-fit: cover !important;
  }


  .home--slogan {
    position: absolute;
    top: 0;
    left: 0;
    font-size: 48px;
    opacity: 0.6;
    text-align: left;
    color: black;
  }

  .main-text {
    font-weight: 500 !important;
    text-transform: uppercase;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, .5);
  }

  .mini-flag {
    width: 100%;
    max-width: 180px;
    margin: 0 auto;
    height: 3px;
    border-radius: 6px;
    display: flex;
  }

  .mini-flag div:nth-child(1) {
    flex: 1;
    height: 100%;
    background-color: #009fe3;
  }

  .mini-flag div:nth-child(2) {
    flex: 1;
    height: 100%;
    background-color: #e30613;
  }

  .mini-flag div:nth-child(3) {
    flex: 1;
    height: 100%;
    background-color: #f7e828;
  }

  .text-home {
    text-shadow: 1px 1px 3px rgba(0, 0, 0, .5);
    font-weight: 500;
  }

  .text-primary {
    color: #009fe3;
  }

  .card {
    border: .5px solid rgba(0, 0, 0, .048);
    border-radius: 5px;
  }

  .card-img-top {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    padding: 12px;
  }

  .card-footer {
    border-top: .5px solid rgba(0, 0, 0, .048);
    padding: 8px;
    text-align: center;
  }


  .header-overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 7%;
    width: 100%;
    background: linear-gradient(0deg, transparent, #111);
    opacity: .6;
    z-index: 100;
  }

  .home-figure {
    position: relative;
    width: 100%;
  }

  /* .home-figure::before {
    content: "";
    position: absolute;
    top: -20px;
    right: -20px;
    height: 360px;
    width: 100%;
    border-radius: 10px;
    background: linear-gradient(345deg, rgba(14, 0, 255, 1) 0%, rgba(0, 159, 227, 1) 50%, rgba(0, 212, 255, 1) 100%);
  } */

  .home-figure img {
    border-radius: 10px;
    position: relative;
    height: 100%;
    max-height: 360px;
  }

  .wrap-news.oneStep {
    text-align: center;
  }

  .home-slideout {
    position: absolute;
    top: 280px;
    left: 0;
    right: 0;
    z-index: 10000;
    margin: 0 auto;
  }

  .home-slideout h4 {

    text-shadow: 1px 1px 3px rgba(0, 0, 0, .7);
  }

  .marquee {
    max-width: 90%;
    overflow: hidden;
    margin: 0 auto;

  }

  .marquee .wrapper {
    display: flex;
    align-items: flex-end;
  }

  .marquee .wrapper h1 {
    margin: 0 80px;
  }

  @media screen and (min-width:768px) {
    .home-slideout h4 {

      font-size: 36px;
    }

    .main-text {
      font-size: 90px !important;
    }

    .grand-D {
      font-size: 110px;
      font-weight: 500;
    }

    .marquee {
      max-width: 800px;
    }
  }

  .footer-instagram a {
    float: left;
    margin: 3px 3px;
  }

  .footer-instagram a img {
    width: 84px;
    height: 84px;
  }

  .yellowpage {
    padding: 4px !important;
  }

  .widget .recent div {
    padding-bottom: 10px;
  }

  .widget .recent div img {
    width: 70px !important;
    object-fit: cover;
  }

  footer {
    padding: 10px 0 10px 0;
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
  <div class="content-wrapper" style="position:relative">
    <div class="flag-bars">
      <div></div>
      <div></div>
      <div></div>
    </div>

    <div class="header-overlay"></div>



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
                  <a class="actived" href="#">Accueil</a>

                </li>
                <li><a href="presentation.php">Presentation</a>

                </li>
                <li><a href="cadre_juri.php">Cadre Juridique</a></li>

                <li><a href="historique.php">Contexte Historique</a>
                </li>
                <li><a href="carto.php">Cartographie</a>
                </li>
                <li><a href="actions.php">Activités</a>
                </li>
                <!--<li><a href="galerie.php">Gallerie</a>
                </li>-->

                <li><a href="contact.php">Contact</a>

                </li>
                <!--<li class="btn"><a class="popup-form" href="#subwrap">Get a Quote</a></li>-->
              </ul>
            </nav>
          </div>
          <!-- mainmenu end -->

        </div>
      </div>
      <!-- container -->
    </div>
    <!-- nav end -->

    <!-- home -->
    <div class="bgslider-owl" id="home">
      <div class="col-md-10 col-xs-11 home-slideout">


        <h4 class="text-home" id="div1" style="visibility: visible;">MINISTÈRE DE LA DÉCENTRALISATION ET RÉFORMES INSTITUTIONNELLES</h4>
    
           <script type="text/javascript">
    function showDiv1() {
      document.getElementById("div1").style.visibility = "hidden";
    }
    setTimeout("showDiv1()", 10000); // aprés 10 sec
   
   </script>
        
       

        <div class="marquee">
          <div class="wrapper">
            <h1 class="main-text">LES 3D</h1>
            <h1 class="main-text"><span class="grand-D">D</span>émocratie</h1>
            <h1 class="main-text"><span class="grand-D">D</span>écentralisation</h1>
            <h1 class="main-text"><span class="grand-D">D</span>éveloppement</h1>

          </div>
        </div>
      
        <div class="mini-flag onStep" data-animation="fadeInRight" data-time="800">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <div id="owl-slider-home" class="owl-carousel">

        <div class="item imgbg" style="background-image:url(img/index/accueil.jpg)"></div>
        <div class="item imgbg" style="background-image:url(img/index/ftt.JPG)"></div>
        <div class="item imgbg" style="background-image:url(img/index/pm.JPG)"></div>
        <div class="item imgbg" style="background-image:url(img/index/03.JPG)"></div>
        <div class="item imgbg" style="background-image:url(img/index/prmin.JPG)"></div>
        <!-- intro end -->
      </div>


    </div>
    <!-- home end -->

    <!-- gallery-home -->

    <!-- gallery-home end -->


    <!-- services -->
    <section class="services whitepage text-justify">
      <div class="container">
        <div class="">
          <div class="onStep" data-animation="fadeInUp" data-time="500">


            <div class="row">
              <br><br>
              <div class="blog-text">
                <img src="img/index/carte.jpg">


              </div>
              <br>
              <div class="col-12 col-md-7">
                <h3 class="text-primary" style="margin-top:0;text-align:left;font-weight:500">Aperçu du Ministère</h3>
                <div class="mini-flag" style="max-width: 310px;margin:0;height:4px">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>

                <br>
                <p>La Constitution de la IIIème République promulguée le 18 février 2006, telle que modifiée par la loi n°11/002 du 20 Janvier 2011 portant révision de certains articles de la Constitution
                  de la République Démocratique du Congo du 18 Février 2006, a consacré la décentralisation comme mode de gestion et d’organisation des affaires publiques de l’Etat, à l’inverse de la centralisation excessive de tous les pouvoirs au gouvernement central et de la gestion déléguée qui ont caractérisé la IIème République. <br>

                  Cette décentralisation s’est mise en place de manière évolutive quoique butée à quelques résistances liées à la nostalgie de la gestion centralisatrice. <br>

                  L’organisation des élections provinciales en 2006, suivie de l’installation des institutions provinciales ainsi que le premier Forum National sur la Décentralisation tenu en 2007, ont lancé les premiers signaux forts de la mise en œuvre de la décentralisation.</p>

                <div class="wrap-news" style="padding-top:0;text-transform:uppercase">
                  <a class="link-class" href="presentation.php">
                    Voir plus
                    <span class="devider"></span>
                  </a>
                </div>

              </div>
              <div class="col-12 col-md-1"></div>
              <div class="col-12 col-md-4">


                <div class="widget">
                  <h3 class="text-primary" style="margin-top:0;text-align:left;font-weight:500">Actualités</h3>
                  <div class="mini-flag" style="max-width: 100px;margin:0;height:4px">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                  <br>

                  <!-- <div class="devider-widget">
                  </div> -->

                  <div class="recent">
                    <div>
                      <img alt="actions.php" class="pull-left" src="img/actions/women.jpeg">
                      <h6>
                        <a href="actions.php">La Journée Internationale des Droits de la Femme 2021</a>
                      </h6>

                    
                    </div>

                    <div>
                      <a href="actions.php"><img alt="#" class="pull-left" src="img/actions/pdu.png"></a>
                      <h6>
                        <a href="actions.php">La 10ème session du Comité de pilotage national du Projet de Développement Urbain (PDU)</a>
                      </h6>

                      
                    </div>

                    <div>
                      <a href="actions.php"><img alt="#" class="pull-left" src="img/actions/eth1.jpg"></a>
                      <h6>
                        <a href="actions.php">Formation en éthique des membres
du Cabinet de la Décentralisation et Réformes Institutionnelles</a>
                      </h6>

                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 onStep" data-animation="fadeInUp" data-time="600">
        




          </div>
        </div>

    </section>

    <section style="background-color:rgba(0, 0, 0, .9);padding-top:40px;padding-bottom:40px;">
      <div class="container">
        <div class="onStep" data-animation="fadeInUp" data-time="300">
          <div class="container">
            <div class="row">

              <div id="owl-gal" class="owl-carousel">

                <div class="item">
                  <div class="gal-home">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive imageportofolio" src="img/actions/1.jpg">

                    </div>
                    </a>
                  </div>
                </div>

                <div class="item">
                  <div class="gal-home big-img">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive imageportofolio" src="img/actions/00.jpg">

                    </div>
                    </a>
                  </div>
                </div>

                <div class="item">
                  <div class="gal-home">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive imageportofolio" src="img/actions/2.jpg">

                    </div>
                    </a>
                  </div>
                </div>

                <div class="item">
                  <div class="gal-home big-img">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive imageportofolio" src="img/actions/03.jpg">

                    </div>
                    </a>
                  </div>
                </div>

                <div class="item">
                  <div class="gal-home big-img">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive imageportofolio" src="img/actions/sg1.jpg">

                    </div>
                    </a>
                  </div>
                </div>


                <div class="item">
                  <div class="gal-home">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive imageportofolio" src="img/actions/16.jpg">

                    </div>
                    </a>
                  </div>
                </div>



                <div class="item">
                  <div class="gal-home">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive imageportofolio" src="img/actions/21.jpg">

                    </div>
                    </a>
                  </div>
                </div>

                <div class="item">
                  <div class="gal-home big-img">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive imageportofolio" src="img/actions/5.jpg">

                    </div>
                    </a>
                  </div>
                </div>

                <div class="item">
                  <div class="gal-home">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive imageportofolio" src="img/actions/11.jpg">

                    </div>
                    </a>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- services -->
    <section class="services whitepage text-justify">
      <div class="container">
        <div class="">
          <div class="onStep" data-animation="fadeInUp" data-time="500">


            <div class="text-justify">
              <br>
              <div style="max-width: 800px;margin:0 auto;text-align:left;">
                <h3 class="text-primary text-center" style="margin-top:0;font-weight:500;text-transform:uppercase">Historique</h3>
                <div class="mini-flag" style="max-width: 200px;margin:0 auto;height:4px;">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>

                <br>
                <p>
                  La décentralisation n’est pas un phénomène nouveau en République Démocratique du Congo. En dehors de certaines tentatives de la décentralisation datant de l’époque coloniale, la réforme de la territoriale aboutit, en 1982, à la promulgation d'une loi organique portant décentralisation administrative. La région (province) et la zone (territoire ou commune) sont devenues des entités administratives décentralisées, avec des assemblées régionales et des conseils de zone comme organes délibérants. Mais, en 1997, à la chute du Président Mobutu, cette loi était pratiquement restée lettre morte.</p>

                <p>En 1998, une réforme fut mise en place, au terme du décret-loi 081, qui définit une stratégie visant la décentralisation qui, jusqu'en 2006, n'était toujours pas appliquée selon les prescrits de ce Décret-loi.
                  Depuis la Constitution du 18 février 2006, la Décentralisation est ce nouveau mode de gestion des affaires publiques de l'Etat. </p>

                <div class="wrap-news" style="padding-top:0;text-transform:uppercase">
                  <a class="link-class text-center" href="historique.php">
                    Voir plus
                    <span class="devider" style="margin:0 auto;"></span>
                  </a>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-12 onStep" data-animation="fadeInUp" data-time="600">
      




          </div>
        </div>

    </section>





    <section class="yellowpage">
      <div class="container">
        <div class="row">

        </div>
      </div>
    </section>

    <section style="background-color: #f9f9f9;padding-top:40px;padding-bottom:40px">
      <div class="container" style="font-size:14px;text-align:left;">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3">
            <h6>Vision</h6>
            <p>Oeuvrer pour le développement équilibré du pays à partir de la base en assurant le bien-être de la population (Constitution, Lois et Réglement, Programme du Gouvernement Ilunga)</p>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <h6>Mission</h6>
            <p>Contribuer à rendre effective la décentralisation (Discours du Président de la République Félix Tshisekedi; Constitution, Lois et Réglement)</p>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <h6>Valeurs</h6>
            <ul style="list-style: none;padding:0;margin:0">
              <li>Intégrité</li>
              <li>Travail</li>
              <li>Compétence</li>
              <li>Discipline</li>
            </ul>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <h6>Motto</h6>
            <p>La justice élève une nation.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- subfooter -->
    <section aria-label="footer" class="subfooter">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4 col-xs-12">
            <!-- <div class="logo" style="height:120px!important;width:120px!important">
          <img alt="logo" src="img/logo.png">
        </div> -->

            <p style="font-size:20px"><br>
              Ministère de Décentralisation <br>et Réformes Institutionnelles</p>

            <!-- <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mollis. Quisque convallis libero in sapien pharetra tincidunt. Aliquam elit ante, malesuada id, tempor eu, gravida
                  id, odio. Maecenas suscipit, risus et eleifend imperdiet, nisi orci ullamcorper massa adipiscing.
                </p> -->
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-xs-12">
            <h3 class="text-uppercase">
              Adresse
            </h3>

            <address>
              <span>6e Niveau, Immeuble du Gouvernement/Place Royale</span> <span><strong>PHONE:</strong> (+243) 000 000 000</span> <span><strong>EMAIL:</strong> <a href="mailto:companyname@gmail.com">contact@mindecentralisation-ri.cd</a></span> <span><strong>SITE:</strong> <a href="#">www.mindecentralisation-ri.cd</a></span>
            </address>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-xs-12">

            <h3 class="text-uppercase">
              Retrouvez nous sur
            </h3>

            <div class="recent">
           
                <div class="profile-row">
                  <!-- <div class="date">
                        <div class="month">
                          <span class="date-month">22</span> <span class="name-month">APR</span>
                        </div>
                      </div> -->
                  <div class="profile">
                    <img src="img/profiles/hg.jpg" alt="">
                  </div>

                  <div class="news">
                    <div>Place Royale</div>
                    <h6>Immeuble du Gouvernement</h6>
                  </div>

                </div>
              
            </div>

          </div>
        </div>
    </section>
    <!-- subfooter end -->

    <!-- footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            &copy; CARSTU
          </div>

          <!--<div class="col-md-6">
              <div class="right">
                <div class="social-icons">
                  <a href="#"><span class="ti-facebook"></span></a> <a href="#"><span class="ti-dribbble"></span></a> <a href="#"><span class="ti-twitter"></span></a> <a href="#"><span class=
                  "ti-linkedin"></span></a>
                </div>
              </div>
            </div>-->
        </div>
      </div>
    </footer>
    <!-- footer end -->

    <!-- ScrolltoTop -->
    <div id="totop">
      <span class="ti-angle-up"></span>
    </div>

  </div>
  <!-- content wraper end -->

  <!-- Subscribe start -->
  <div class="white-popup-block mfp-hide animbounceInDown" data-time="0" id="subwrap">
    <h5>
      Laissez-nous un message!
    </h5>

    <div class="space-half">
    </div>

    <form action="subscribe.php" id="subscribe" method="post" name="subscribe">
      <input class="subscribfield subscribeemail" id="subscribeemail" name="subscribeemail" type="text"> <button class="btn-form" id="submit-2" type="submit">Souscrire aux mails</button>
    </form>

    <div class="subscribesuccess">
      Merci!
    </div>
  </div>
  <!-- Subscribe end -->

  <!-- plugin JS -->
  <script src="plugin/pluginson3step.js" type="text/javascript"></script>
  <!-- slider revolution  -->
  <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <!--  map google  -->
  <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCQ5KODzqooIP496GPLRaMAsZ4eN8Vro_U"></script>
  <script src="js/map.js" type="text/javascript"></script>
  <!-- on3step JS -->
  <script src="js/on3step.js" type="text/javascript"></script>
  <script src="js/plugin-set.js" type="text/javascript"></script>
  <script src="js/marquee.js" type="text/javascript"></script>

  <script>
    $('.marquee').marquee();
  </script>

</body>

</html>