<?php
  session_start();
  if ($_SESSION == null)
    {
        header("location:/BanqueDuPeuple/index.php");
    }
    else
    {
    ?>
      <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="utf-8">
          <title>Banque du Peuple</title>
          <meta content="width=device-width, initial-scale=1.0" name="viewport">
          <meta content="" name="keywords">
          <meta content="" name="description">

          <!-- Favicons -->
          <link href="public/css/accueil/img/favicon.png" rel="icon">
          <link href="public/css/accueil/img/apple-touch-icon.png" rel="apple-touch-icon">

          <!-- Google Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

          <!-- Bootstrap CSS File -->
          <link href="public/css/accueil/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

          <!-- Libraries CSS Files -->
          <link href="public/css/accueil/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
          <link href="public/css/accueil/lib/animate/animate.min.css" rel="stylesheet">
          <link href="public/css/accueil/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
          <link href="public/css/accueil/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
          <link href="public/css/accueil/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

          <!-- Main Stylesheet File -->
          <link href="public/css/accueil/css/style.css" rel="stylesheet">

        </head>

        <body>

          <!--==========================
            Header
          ============================-->
          <header id="header">
            <div class="container-fluid">

              <div id="logo" class="pull-left">
                <h1><a href="#intro" class="scrollto">Banque du Peuple</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
              </div>

              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li class="menu-active"><a href="#intro">Accueil</a></li>
                  <li><a href="src/view/indexBanque.php?view=client">Gestion Clients</a></li>
                  <li><a href="src/view/indexBanque.php?view=compte">Gestion Comptes</a></li>
                  <li><a href="src/view/indexBanque.php?view=utilisateur">Gestion Utilisateurs</a></li>
                  <li class="menu-active"><a id="deconnexion" href="/BanqueDuPeuple/src/controller/userController.php?deconnexion=1">Déconnexion</a></li>
                </ul>
              </nav><!-- #nav-menu-container -->
            </div>
          </header><!-- #header -->

          <!--==========================
            Intro Section
          ============================-->
          <section id="intro">
            <div class="intro-container">
              <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                  <div class="carousel-item active">
                    <div class="carousel-background"><img src="public/css/accueil/img/intro-carousel/a16.jpg" alt=""></div>
                    <div class="carousel-container">
                      <div class="carousel-content">
                        <h2>Bienvenu à la Banque du Peuple</h2>
                        <p>Notre banque exerce une importante fonction d'utilité sociale. Elles ont pour mission de garder l'épargne en toute sécurité, d'assurer des paiements efficaces et d'accorder des crédits fiables, autant de fonctions indispensables au bon fonctionnement de la société et de l'économie.</p>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="carousel-background"><img src="public/css/accueil/img/intro-carousel/a12.jpg" alt=""></div>
                    <div class="carousel-container">
                      <div class="carousel-content">
                      <h2>Bienvenu à la Banque du Peuple</h2>
                      <p>Notre banque exerce une importante fonction d'utilité sociale. Elles ont pour mission de garder l'épargne en toute sécurité, d'assurer des paiements efficaces et d'accorder des crédits fiables, autant de fonctions indispensables au bon fonctionnement de la société et de l'économie.</p>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="carousel-background"><img src="public/css/accueil/img/intro-carousel/a13.jpg" alt=""></div>
                    <div class="carousel-container">
                      <div class="carousel-content">
                      <h2>Bienvenu à la Banque du Peuple</h2>
                      <p>Notre banque exerce une importante fonction d'utilité sociale. Elles ont pour mission de garder l'épargne en toute sécurité, d'assurer des paiements efficaces et d'accorder des crédits fiables, autant de fonctions indispensables au bon fonctionnement de la société et de l'économie.</p>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="carousel-background"><img src="public/css/accueil/img/intro-carousel/a1.jpg" alt=""></div>
                    <div class="carousel-container">
                      <div class="carousel-content">
                      <h2>Bienvenu à la Banque du Peuple</h2>
                      <p>Notre banque exerce une importante fonction d'utilité sociale. Elles ont pour mission de garder l'épargne en toute sécurité, d'assurer des paiements efficaces et d'accorder des crédits fiables, autant de fonctions indispensables au bon fonctionnement de la société et de l'économie.</p>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="carousel-background"><img src="public/css/accueil/img/intro-carousel/a2.jpg" alt=""></div>
                    <div class="carousel-container">
                      <div class="carousel-content">
                      <h2>Bienvenu à la Banque du Peuple</h2>
                      <p>Notre banque exerce une importante fonction d'utilité sociale. Elles ont pour mission de garder l'épargne en toute sécurité, d'assurer des paiements efficaces et d'accorder des crédits fiables, autant de fonctions indispensables au bon fonctionnement de la société et de l'économie.</p>
                      </div>
                    </div>
                  </div>

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>

              </div>
            </div>
          </section><!-- #intro -->

          <main id="main">

            

            <!--==========================
              Facts Section
            ============================-->
            <section id="facts"  class="wow fadeIn">
              <div class="container">

                <header class="section-header">
                  <h3></h3>
                  <p></p>
                </header>

                <div class="row counters">

                  <div class="col-lg-3 col-6 text-center">
                    <span></span>
                    <p></p>
                  </div>

                  <div class="col-lg-3 col-6 text-center">
                    <span></span>
                    <p></p>
                  </div>

                  <div class="col-lg-3 col-6 text-center">
                    <span></span>
                    <p></p>
                  </div>

                  <div class="col-lg-3 col-6 text-center">
                    <span></span>
                    <p></p>
                  </div>

                </div>
              </div>
            </section><!-- #facts -->

            <!--==========================
              Portfolio Section
            ============================-->
            <section id="portfolio"  class="section-bg" >
              <div class="container">

                <header class="section-header">
                  <h3 class="section-title">Autres Profiles</h3>
                </header>

                <div class="row">
                  <div class="col-lg-12">
                    <ul id="portfolio-flters">
                      <li data-filter="*" class="filter-active">All</li>
                      <li data-filter=".filter-app">App</li>
                      <li data-filter=".filter-card">Card</li>
                      <li data-filter=".filter-web">Web</li>
                    </ul>
                  </div>
                </div>

                <div class="row portfolio-container">

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                      <figure>
                        <img src="public/css/accueil/img/portfolio/app1.jpg" class="img-fluid" alt="">
                        <a href="public/css/accueil/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                      </figure>

                      
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                      <figure>
                        <img src="public/css/accueil/img/portfolio/web3.jpg" class="img-fluid" alt="">
                        <a href="public/css/accueil/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                      </figure>

                      
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                      <figure>
                        <img src="public/css/accueil/img/portfolio/app2.jpg" class="img-fluid" alt="">
                        <a href="public/css/accueil/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                      </figure>

                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                    <div class="portfolio-wrap">
                      <figure>
                        <img src="public/css/accueil/img/portfolio/card2.jpg" class="img-fluid" alt="">
                        <a href="public/css/accueil/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                      </figure>

                      
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                      <figure>
                        <img src="public/css/accueil/img/portfolio/web2.jpg" class="img-fluid" alt="">
                        <a href="public/css/accueil/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                      </figure>

                      
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                      <figure>
                        <img src="public/css/accueil/img/portfolio/app3.jpg" class="img-fluid" alt="">
                        <a href="public/css/accueil/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                      </figure>

                      
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                    <div class="portfolio-wrap">
                      <figure>
                        <img src="public/css/accueil/img/portfolio/card1.jpg" class="img-fluid" alt="">
                        <a href="public/css/accueil/img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                      </figure>

                      
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                      <figure>
                        <img src="public/css/accueil/img/portfolio/card3.jpg" class="img-fluid" alt="">
                        <a href="public/css/accueil/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                      </figure>

                      
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                      <figure>
                        <img src="public/css/accueil/img/portfolio/web1.jpg" class="img-fluid" alt="">
                        <a href="public/css/accueil/img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                      </figure>

                      
                    </div>
                  </div>

                </div>

              </div>
            </section><!-- #portfolio -->

          
          </main>

          <!--==========================
            Footer
          ============================-->
          <footer id="footer">
            <div class="footer-top">
              <div class="container">
                <div class="row">

                  <div class="col-lg-8 col-md-8 footer-info">
                    <h3>Banque du Peuple</h3>
                  </div>

                  <div class="col-lg-3 col-md-4 footer-contact">
                    <h4>Contact Us</h4>

                    <div class="social-links">
                      <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                      <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                      <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                  </div>

                </div>
              </div>
            </div>

            <div class="container">
              <div class="copyright">
                &copy; Copyright <strong>Banque Du Peuple 2020</strong>. All Rights Reserved
              </div>
              <div class="credits">
                Designed by <a href="#">DKN</a>
              </div>
            </div>
          </footer><!-- #footer -->

          <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
          <!-- Uncomment below i you want to use a preloader -->
          <!-- <div id="preloader"></div> -->

          <!-- JavaScript Libraries -->
          <script src="public/css/accueil/lib/jquery/jquery.min.js"></script>
          <script src="public/css/accueil/lib/jquery/jquery-migrate.min.js"></script>
          <script src="public/css/accueil/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="public/css/accueil/lib/easing/easing.min.js"></script>
          <script src="public/css/accueil/lib/superfish/hoverIntent.js"></script>
          <script src="public/css/accueil/lib/superfish/superfish.min.js"></script>
          <script src="public/css/accueil/lib/wow/wow.min.js"></script>
          <script src="public/css/accueil/lib/waypoints/waypoints.min.js"></script>
          <script src="public/css/accueil/lib/counterup/counterup.min.js"></script>
          <script src="public/css/accueil/lib/owlcarousel/owl.carousel.min.js"></script>
          <script src="public/css/accueil/lib/isotope/isotope.pkgd.min.js"></script>
          <script src="public/css/accueil/lib/lightbox/js/lightbox.min.js"></script>
          <script src="public/css/accueil/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
          <!-- Contact Form JavaScript File -->
          <script src="public/css/accueil/contactform/contactform.js"></script>

          <!-- Template Main Javascript File -->
          <script src="public/css/accueil/js/main.js"></script>

        </body>
      </html>

    <?php
      }
    ?>