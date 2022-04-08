<?php
include("includes/connect_db.php");
$req=$bdd->query('select * from categorie');
?>
<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <title>Desagnet web Agency </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/icons/flaticon/flaticon.css">
  <link rel="stylesheet" href="assets/icons/mti-brands/styles.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
  <div id="site-overlay"></div>
  <div class="site-wrapper">
    <header class="header-style-1 position-absolute d-none d-lg-block">
      <?php
      include("header1.php");
      ?>

      <div class="header-content">
        <div class="container">
          <div class="row align-items-center d-flex justify-content-between">
            <div class="col-lg-2">
              <div class="header-logo">
                <a href="index-2.html"><img src="assets/img/logo.png" alt="logo" class="img-fluid"></a>
              </div>
            </div>
            <div class="col-lg-10">
              <div class="d-flex align-items-center">
                <nav class="header-menu">
                  <ul class="navigation-menu header-navigation-menu">
                    <li class="active-page-menu"><a href="#">Accueil</a>
                      <!-- <ul class="submenu-inner">
                        <li><a href="index-2.php">Home 1</a></li>
                        <li><a href="home-2.php">Home 2</a></li>
                      </ul> -->
                    </li>
                    <li><a href="about.php">Qui somme nous</a></li>
                    <li><a href="services.php">Services</a>
                      <ul class="submenu-inner">
                        <li><a href="single-service.html">Service Details</a></li>
                      </ul>
                    </li>
                    <li><a href="#">  Portfolio</a>
                      <ul class="submenu-inner">
                        <li><a href="portfolio.php">Projects</a>
                          <ul class="submenu-inner">
                            <li><a href="single-project.html">Projects Details</a></li>
                          </ul>
                        </li>
                        
                      </ul>
                    </li>
                   <li><a href="contact.php">Contact</a></li>
                  </ul>
                </nav>
                <div class="header-search-btn d-flex justify-content-betwe">
                  <div>
                       <a href="inscri.php">inscription</a>
                  </div> <br><br>
                  <div>
                   <a href="conx-client.php">connexion</a></button><br>
                  </div>
                  
                   <!-- <div class="menu-button">
                    <a href="" class="theme-btn">Demande Devis</a>
                      </div > -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <header class="mobile-header d-block d-lg-none">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-2 col-3">
            <div class="canvas-menu menu-offcanvas">
              <a id="mobile-header-expander" class="dropdown-toggle" data-canvas=".mobile">
                <span class="hamburger-menu">
                  <span class="hamburger-menu-line hamburger-menu-line-1"></span>
                  <span class="hamburger-menu-line hamburger-menu-line-2"></span>
                  <span class="hamburger-menu-line hamburger-menu-line-3"></span>
                  <span class="hamburger-menu-line hamburger-menu-line-4"></span>
                </span>
              </a>
            </div>
          </div>
          <div class="col-sm-8 col-6">
            <div class="header-mobile-logo">
              <a href="index-2.html"><img src="assets/img/logo-dark.png" alt="logo" class="img-fluid"></a>
            </div>
          </div>
          <div class="col-sm-2 col-3">
            <div class="header-search-btn search-btn-popup">
              <div class="search-btn search-btn-dark">
                <i class="flaticon-magnifiying-glass"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="full-bar-search-wrap">
      <div class="close-search"></div>
      <div class="search-form-wrapper">
        <form method="get" class="search-form" action="#">
          <div class="search-form-group"> <input name="s" type="text" class="form-control" value=""
              placeholder="Search here..."></div>
          <button type="submit" class="search-submit"><i class="flaticon-magnifiying-glass"></i></button>
        </form>
      </div>
    </div>
    <div class="offcanvas-content mobile">
      <div class="close-canvas"><a><i class="flaticon-cancel"></i></a></div>
      <div class="wp-sidebar sidebar">
        <div id="mobile-menu" class="navbar-collapse">
          <ul class="header-navigation-menu mobile-menu">
              <li><a href="index-2.php">Acceuil</a>
                <ul class="submenu-inner">
                  <li><a href="index-2.php">Home 1</a></li>
                  <li><a href="home-2.php">Home 2</a></li>
                </ul>
              </li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php">Services</a>
                <ul class="submenu-inner">
                  <li><a href="single-service.html">Service Details</a></li>
                </ul>
              </li>
              <li><a href="#">Pages</a>
                <ul class="submenu-inner">
                  <li><a href="portfolio.php">Projects</a>
                    <ul class="submenu-inner">
                      <li><a href="single-project.html">Projects Details</a></li>
                    </ul>
                  </li>
                 
                </ul>
              </li>
              <li><a href="blog.php">Blog</a>
                <ul class="submenu-inner">
                  <li><a href="blog.html">Blog Classic</a></li>
                  <li><a href="single-blog.html">News Details</a></li>
                </ul>
              </li>
              <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="slider-widget">
      <div class="container-full">
        <div class="row">
          <div class="col-sm-12">
            <div class="slider-one swiper-container">
              <div class="swiper-wrapper">
                <div class="slider-one-slide swiper-slide">
                  <div class="slide-bg" data-background="assets/img/slide-1.jpg"></div>
                  <div class="slider-wrapper">
                    <div class="slider-content">
                      <div class="container">
                        <div class="row">
                       
                          <div class="col-sm-12 col-lg-10 ml-auto mr-auto">
                          
                            <h2 class="slide-intro"> <span class="">Designet web agency</span></h2>
                            
                            <h2 class="slide-heading"> web marketing
                             </h2>
                             
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="slider-one-slide swiper-slide">
                  <div class="slide-bg" data-background="assets/img/slide-2.jpg"></div>
                  <div class="slider-wrapper">
                    <div class="slider-content">
                      <div class="container">
                        <div class="row">
                          
                          <div class="col-sm-12 col-lg-10 ml-auto mr-auto">
                            
                            <h2 class="slide-intro"> <span class=""> Designet web agency

                            </span></h2>
                            <h2 class="slide-heading">
                              Référencement Naturel SEO</h2>
                            <div class="slider-button">
                              <a href="#" class="slide-btn theme-btn">Discover more</a>
                            </div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="slider-one-slide swiper-slide">
                  <div class="slide-bg" data-background="assets/img/slide-2.jpg"></div>
                  <div class="slider-wrapper">
                    <div class="slider-content">
                      <div class="container">
                        <div class="row">
                           <div class="col-sm-12 col-lg-10 ml-auto mr-auto">
                            <h2 class="slide-intro"> <span class="">Designet web agency</span></h2>
                            <h2 class="slide-heading"> création de site web
                            </h2>
                            
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <div class="services-section data-background" data-background="assets/img/service-bg.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="service-widget">
              <span class="sw-count">01</span>
              <div class="sw-icon"><i class="flaticon-data"></i></div>
              <h3 class="sw-title">Website
                Development</h3>
              <div class="sw-content">Lorem ipsum is are many variations of
                pass of majority.</div>
              <a href="#" class="btn-grey">MORE</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-widget">
              <span class="sw-count">02</span>
              <div class="sw-icon"><i class="flaticon-bullhorn"></i></div>
              <h3 class="sw-title">Digital <br>
                marketing</h3>
              <div class="sw-content">Lorem ipsum is are many variations of
                pass of majority.</div>
              <a href="#" class="btn-grey">MORE</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-widget">
              <span class="sw-count">03</span>
              <div class="sw-icon"><i class="flaticon-app-development"></i></div>
              <h3 class="sw-title">Application
                Development</h3>
              <div class="sw-content">Lorem ipsum is are many variations of
                pass of majority.</div>
              <a href="#" class="btn-grey">MORE</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="service-widget">
              <span class="sw-count">04</span>
              <div class="sw-icon"><i class="flaticon-seo-1"></i></div>
              <h3 class="sw-title">SEO & content
                Writing</h3>
              <div class="sw-content">Lorem ipsum is are many variations of
                pass of majority.</div>
              <a href="#" class="btn-grey">MORE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="about-widget">
      <div class="about-shape-1">
        <img src="assets/img/lines.png" alt="" class="img-fluid">
      </div>
      
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="about-image-box">
              <div class="about-img-1">
                <img src="assets/img/about-1.jpg" alt="" class="img-fluid">
              </div>
              <div class="about-img-2">
                <img src="assets/img/about-2.jpg" alt="" class="img-fluid">
              </div>
              WHY CHOOSE
            </div>
          </div>
          <div class="col-lg-5">
            <div class="about-content rellax" data-rellax-speed="4" data-rellax-percentage="0.5">
              <span class="section-intro">À PROPOS DE LA SOCIÉTÉ</span>
              <h2 class="section-title">NOUS SOMMES UNE BOITE DE DÉVELOPPEMENT WEB ET MOBILE
                </h2>
              <div class="about-info">
              Designet web agency est une Agence web Tunisie de Conseil et de Communication
              en Multimédia spécialisée dans la création et le développement des sites web en nouvelle
              technologie numérique pour les entreprises et les personnes qui ont choisi d’entrer dans 
              l’univers du multimédia 
              et ont opté pour les outils de la communication comme un choix stratégique...
              </div>
              <div class="about-features mt-50">
                <div class="row">
                  <div class="col-md-6 mb-xs-30">
                    <div class="d-flex align-items-center">
                      <div class="af-icon">
                        <i class="flaticon-analyst"></i>
                      </div>
                      <div class="af-title">
                        Expert
                        Team Members
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="d-flex align-items-center">
                      <div class="af-icon">
                        <i class="flaticon-jigsaw"></i>
                      </div>
                      <div class="af-title">
                        Solution
                        for Business
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-md-flex mt-50">
                <a href="#" class="theme-btn mb-xs-30 ml-xs-20">Discover more</a>
                <div class="d-flex align-items-center call-btn-block ml-20">
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-section">
     
      <div class="portfolio-carousel-block">
        <div class="portfolio-carousel swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="portfolio-item">
                <img src="assets/img/portfolio-1.jpg" alt="" class="img-fluid">
                <a href="single-project.html" class="portfolio-more"><i class="flaticon-right-arrow-angle"></i></a>
                <div class="portfolio-item-overlay">
                  <div class="portfolio-block-category">
                    <a href="#">Design</a>
                  </div>
                  <h3 class="portfolio-block-title">Digital product</h3>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="portfolio-item">
                <img src="assets/img/portfolio-2.jpg" alt="" class="img-fluid">
                <a href="single-project.html" class="portfolio-more"><i class="flaticon-right-arrow-angle"></i></a>
                <div class="portfolio-item-overlay">
                  <div class="portfolio-block-category">
                    <a href="#">Web</a>
                  </div>
                  <h3 class="portfolio-block-title">Website design</h3>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="portfolio-item">
                <img src="assets/img/portfolio-3.jpg" alt="" class="img-fluid">
                <a href="single-project.html" class="portfolio-more"><i class="flaticon-right-arrow-angle"></i></a>
                <div class="portfolio-item-overlay">
                  <div class="portfolio-block-category">
                    <a href="#">Data</a>
                  </div>
                  <h3 class="portfolio-block-title">Sell data</h3>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="portfolio-item">
                <img src="assets/img/portfolio-4.jpg" alt="" class="img-fluid">
                <a href="single-project.html" class="portfolio-more"><i class="flaticon-right-arrow-angle"></i></a>
                <div class="portfolio-item-overlay">
                  <div class="portfolio-block-category">
                    <a href="#">Writing</a>
                  </div>
                  <h3 class="portfolio-block-title">Content writing</h3>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="portfolio-item">
                <img src="assets/img/portfolio-5.jpg" alt="" class="img-fluid">
                <a href="single-project.html" class="portfolio-more"><i class="flaticon-right-arrow-angle"></i></a>
                <div class="portfolio-item-overlay">
                  <div class="portfolio-block-category">
                    <a href="#">App</a>
                  </div>
                  <h3 class="portfolio-block-title">App Development</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="portfolio-carousel-footer">
            
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="all-works">
                      <a href="#" class="btn-underline">View All Work</a>
                    </div>
                    <div class="pc-pagination">
                      <div class="portfolio-pagination"></div>
                    </div>
                  
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="why-choose-section">
      <div class="container">
        <div class="row">
          
          
        </div>
      </div>
    </div>
    <div class="fun-facts-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="fun-facts-inner">
              <div class="row">
                
                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="trust-section" data-background="assets/img/trust-bg.jpg" data-jarallax data-speed="0.2">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
            
          </div>
        </div>
      </div>
    </div>
   
    <div class="testimonials-section" data-background="assets/img/testimonials-bg.png">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            
            <div class="testimonials-slider swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                 
                </div>
                <div class="swiper-slide">
                 
                </div>
                <div class="swiper-slide">
                  
                </div>
                <div class="swiper-slide">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="blog-block">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   

    <?php
      include("footer2.php");
      ?>
      
    <div class="back-to-top">
      <i class="flaticon-up-arrow"></i>
    </div>
  </div>
  <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
  <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/vendor/swiper-bundle.min.js"></script>
  <script src="assets/js/vendor/jquery.appear.js"></script>
  <script src="assets/js/vendor/count-to.js"></script>
  <script src="assets/js/vendor/rellax.min.js"></script>
  <script src="assets/js/vendor/jquery.knob.min.js"></script>
  <script src="assets/js/vendor/mixitup.min.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
 
</html>