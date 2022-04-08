<?php
include("includes/connect_db.php");
$req=$bdd->query("select* from service");
$donne=$req->fetch();
?>
<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <title>Osfins | Disginet web agency</title>
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
                <a href="index-2.html"><img src="assets/img/imagee.png" alt="logo" class="img-fluid"></a>
              </div>
            </div>
            <div class="col-lg-10">
              <div class="d-flex align-items-center">
                <nav class="header-menu">
                  <ul class="navigation-menu header-navigation-menu">
                    <li class="active-page-menu"><a href="index-2.php">Accueil</a>
                      <ul class="submenu-inner">
                        <li><a href="index-2.php">Home 1</a></li>
                        <li><a href="home-2.php">Home 2</a></li>
                      </ul>
                    </li>
                    <li><a href="about.php">Qui somme nous</a></li>
                    <li><a href="services.php">Services</a>
                      <ul class="submenu-inner">
                        <li><a href="single-service.html">Service Details</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Portfolio</a>
                      <ul class="submenu-inner">
                        <li><a href="portfolio.php">Projects</a>
                          <ul class="submenu-inner">
                            <li><a href="single-project.html">Projects Details</a></li>
                          </ul>
                        </li>
                        
                        
                      </ul>
                    </li>
                    <li><a href="blog.php">Recrutement</a>
                      <ul class="submenu-inner">
                        <li><a href="blog.html">Blog Classic</a></li>
                        <li><a href="single-blog.html">News Details</a></li>
                      </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
                </nav>
                <br>  <br>
                <div class="header-search-btn d-flex justify-content-between">
                  <div class="search-btn">
                    <i class="flaticon-magnifiying-glass"></i>
                  </div>
                  
                  
                  <div class="menu-button">
                    <a href="ajouter-devis.php" class="theme-btn">Demande Devis</a>
                  </div>
                  <div class="connexin-btn"> <i class="bi bi-file-lock2"></i></div>
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
              <li><a href="index-2.html">Home</a>
                <ul class="submenu-inner">
                  <li><a href="index-2.html">Home 1</a></li>
                  <li><a href="home-2.html">Home 2</a></li>
                </ul>
              </li>
              <li><a href="about.html">About</a></li>
              <li><a href="services.html">Services</a>
                <ul class="submenu-inner">
                  <li><a href="single-service.html">Service Details</a></li>
                </ul>
              </li>
              <li><a href="#">Pages</a>
                <ul class="submenu-inner">
                  <li><a href="portfolio.html">Projects</a>
                    <ul class="submenu-inner">
                      <li><a href="single-project.html">Projects Details</a></li>
                    </ul>
                  </li>
                  >
                </ul>
              </li>
              <li><a href="blog.html">Blog</a>
                <ul class="submenu-inner">
                  <li><a href="blog.html">Blog Classic</a></li>
                  <li><a href="single-blog.html">News Details</a></li>
                </ul>
              </li>
              <li><a href="contact.html">Contact</a></li>
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
                  <div class="slide-bg" data-background="assets/img/images3.jpg" alt="fluid"></div>
                  <div class="slider-wrapper">
                    <div class="slider-content">
                      <div class="container">
                        <div class="row">
                          <div class="col-sm-12 col-lg-10 ml-auto mr-auto">
                            <h2 class="slide-intro"> <span class="">Designet web agency</span></h2>
                            <h2 class="slide-heading">web marketing
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
                            <h2 class="slide-intro"> <span class=""> Designet web agency

                            </span></h2>
                            <h2 class="slide-heading">
                              création de site web</h2>
                            <div class="slider-button">
                              <a href="#" class="slide-btn theme-btn">Discover more</a>
                            </div>
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
    <div class="welcome-widget">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <span class="welcome-intro">We Provide digital services</span>
            <h2 class="welcome-heading">Services We’re offering</h2>
          </div>
          <div class="col-md-6">
            <div class="welcome-desc">We are committed to providing our customers with exceptional service while
              offering
              our employees the best training. Lorem Ipsum is simply dummy text.</div>
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
              <h3 class="sw-title"><?php echo $donne['noms']?>
                </h3>
              <div class="sw-content"><?php echo $donne['desc']?>
                </div>
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
      <div class="about-shape-2">
        <img src="assets/img/dots.png" alt="" class="img-fluid">
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
              <div class="about-focus">
                <div class="foucs-icon">
                  <i class="flaticon-user-experience-1"></i>
                </div>
                <div class="ex-year"><span class="count-number">36</span>+</div>
                <div class="ex-title">Years of
                  experience</div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="about-content rellax" data-rellax-speed="4" data-rellax-percentage="0.5">
              <span class="section-intro">Our introduction</span>
              <h2 class="section-title">Welcome to our digital
                agency</h2>
              <div class="about-info">
                There are many variations of passages of lorem ipsum available but the majority have suffered alteration
                in some form by injected humor or random.
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
                  <div class="phone-icon">
                    <i class="flaticon-telephone"></i>
                  </div>
                  <div class="phone-details">
                    <span class="phone-title">Call Us Anytime</span>
                    <a href="tel:92 888 666 0000" class="phone-bumber">92 888 666 0000</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-section">
      <div class="portfolio-header" data-background="assets/img/portfolio-header.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="video-box mb-60">
                <a href="https://www.youtube.com/watch?v=7OaLbST0SiI" class="video-button mfp-iframe">
                  <i class="flaticon-play-button"></i>
                </a>
              </div>
              <div class="clear-fix"></div>
              <span class="section-intro">Recent Portfolio</span>
              <h2 class="section-title white-text">We’re Delivering only
                expectional Quality
                Work</h2>
            </div>
            <div class="col-lg-5 offset-lg-1">
              <div class="portfolio-header-details dark-text mb-60">
                There are many variations of passages of lorem ipsum available but the majority have suffered alteration
                in some form by injected humor or random word.
              </div>
              <div class="portfolio-header-deatures">
                <div class="d-sm-flex">
                  <div class="ph-icon">
                    <i class="flaticon-idea"></i>
                  </div>
                  <div class="ph-content">
                    <h4 class="ph-title">Innovative Designs</h4>
                    <div class="ph-details">There are many variations of but the majority have simply free text
                      suffered.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
          <div class="col-lg-5">
            <span class="section-intro">Why Choose</span>
            <h2 class="section-title">We’re here to help your
              Business</h2>
            <div class="why-choose-features mb-60">
              <h3 class="hc-features">Outsourced digital Businesses</h3>
              <p>Lorem Ipsum is simply free text available in your not dummy text of the printing and typesetting
                industry.</p>
            </div>
            <div class="why-choose-features">
              <h3 class="hc-features">Better Strategy With Quality Business</h3>
              <p>Lorem Ipsum is simply free text available in your not dummy text of the printing and typesetting
                industry.</p>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1">
            <div class="why-chhose-image">
              <img src="assets/img/why-choose.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="fun-facts-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="fun-facts-inner">
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="counter-block">
                    <div class="counter-icon">
                      <i class="flaticon-analytics"></i>
                    </div>
                    <div class="counter-number"><span class="number-to-count">6805</span></div>
                    <div class="counter-title">Project Completed</div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="counter-block">
                    <div class="counter-icon">
                      <i class="flaticon-networking"></i>
                    </div>
                    <div class="counter-number"><span class="number-to-count">906</span></div>
                    <div class="counter-title">Team Members</div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="counter-block">
                    <div class="counter-icon">
                      <i class="flaticon-support"></i>
                    </div>
                    <div class="counter-number"><span class="number-to-count">200</span></div>
                    <div class="counter-title">Service Providing</div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="counter-block counter-last">
                    <div class="counter-icon">
                      <i class="flaticon-satisfaction"></i>
                    </div>
                    <div class="counter-number"><span class="number-to-count">9760</span></div>
                    <div class="counter-title">Happy Customers</div>
                  </div>
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
            <h2 class="white-text section-title">Trust the Experts for All
              Your business Needs</h2>
            <div class="trust-button">
              <a href="#" class="theme-btn">Discover more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="why-chhose-2" data-background="assets/img/why-choose-bg.jpg">
      <div class="horizontal-dots slide-top">
        <img src="assets/img/dots-horizontal.png" alt="" class="img-fluid">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-xs-30">
            <div class="why-choose-img">
              <div class="why-choose-img-caption">
                <span>3600 Projects are completed</span>
              </div>
              <img src="assets/img/why-choose-2.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="why-choose-content">
              <span class="section-intro">POURQUOI NOUS CHOISIR</span>
              <h2 class="section-title">NOS VALEURS
               </h2>
              <div class="why-choose-details mb-60">
                <div class="mb-60">There are many variations of passages of Lorem Ipsum available, but the majority have
                  suffered
                  alteration in some form.</div>
                <div class="list-item">
                  <ul>
                    <li><span class="list-icon"><i class="flaticon-check"></i></span> Refresing to get such a
                      personal touch.</li>
                    <li><span class="list-icon"><i class="flaticon-check"></i></span> Duis aute irure dolor in
                      reprehenderit in voluptate.</li>
                    <li><span class="list-icon"><i class="flaticon-check"></i></span> Velit esse cillum dolore eu
                      fugiat nulla pariatur.</li>
                  </ul>
                </div>
              </div>
              <div class="circle-counter-block mb-60">
                <div class="row">
                  <div class="col-md-6 mb-xs-30">
                    <div class="d-flex align-items-center">
                      <div class="circle-outer">
                        <input type="text" class="circle-box" data-fgColor="#558ee4" data-bgColor="#fff"
                          data-width="110" data-height="110" data-linecap="normal" value="90" data-thickness=".050">
                        <div class="counter-box"><span class="counter-text" data-stop="90"
                            data-speed="2500"></span><span class="counter-sign">%</span></div>
                      </div>
                      <div class="count-title">Affordable
                        Cost</div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="d-flex align-items-center">
                      <div class="circle-outer">
                        <input type="text" class="circle-box" data-fgColor="#558ee4" data-bgColor="#fff"
                          data-width="110" data-height="110" data-linecap="normal" value="50" data-thickness=".050">
                        <div class="counter-box"><span class="counter-text" data-stop="50"
                            data-speed="2500"></span><span class="counter-sign">%</span></div>
                      </div>
                      <div class="count-title">Quality of
                        Work</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cta-small">
                <div class="d-sm-flex align-items-center">
                  <div class="cta-content">
                    <div class="cta-small-title">Have any question feel free
                      to contact with our team</div>
                    <div class="cta-phone">92 888 666 0000</div>
                  </div>
                  <div class="cta-small-btn">
                    <a href="#" class="theme-btn btn-sm">Demande Devis</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonials-section" data-background="assets/img/testimonials-bg.png">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="text-center">
              <span class="section-intro">Our testimonials</span>
              <h2 class="section-title">What they’re saying</h2>
            </div>
            <div class="testimonials-slider swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial-style-1">
                    <div class="testimonial-content">
                      I was very impresed by the osfins service lorem ipsum is simply free text used by copy typing
                      refreshing. Neque porro est qui dolorem ipsum.
                    </div>
                    <div class="testimonial-meta">
                      <div class="d-flex align-items-center">
                        <div class="tu-photo">
                          <img src="assets/img/testimonial-image-1.png" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div class="tu-meta">
                          <div class="tu-name">Jessica Brown</div>
                          <div class="tu-role">Customer</div>
                        </div>
                      </div>
                    </div>
                    <div class="testi-circle">
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-style-1">
                    <div class="testimonial-content">
                      I was very impresed by the osfins service lorem ipsum is simply free text used by copy typing
                      refreshing. Neque porro est qui dolorem ipsum.
                    </div>
                    <div class="testimonial-meta">
                      <div class="d-flex align-items-center">
                        <div class="tu-photo">
                          <img src="assets/img/testimonial-image-2.png" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div class="tu-meta">
                          <div class="tu-name">Kevin Martin</div>
                          <div class="tu-role">Customer</div>
                        </div>
                      </div>
                    </div>
                    <div class="testi-circle">
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-style-1">
                    <div class="testimonial-content">
                      I was very impresed by the osfins service lorem ipsum is simply free text used by copy typing
                      refreshing. Neque porro est qui dolorem ipsum.
                    </div>
                    <div class="testimonial-meta">
                      <div class="d-flex align-items-center">
                        <div class="tu-photo">
                          <img src="assets/img/testimonial-image-3.png" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div class="tu-meta">
                          <div class="tu-name">Christine eve</div>
                          <div class="tu-role">Customer</div>
                        </div>
                      </div>
                    </div>
                    <div class="testi-circle">
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-style-1">
                    <div class="testimonial-content">
                      I was very impresed by the osfins service lorem ipsum is simply free text used by copy typing
                      refreshing. Neque porro est qui dolorem ipsum.
                    </div>
                    <div class="testimonial-meta">
                      <div class="d-flex align-items-center">
                        <div class="tu-photo">
                          <img src="assets/img/testimonial-image-4.jpg" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div class="tu-meta">
                          <div class="tu-name">Amit Sarker</div>
                          <div class="tu-role">Customer</div>
                        </div>
                      </div>
                    </div>
                    <div class="testi-circle">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cta-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8 mb-xs-30">
            <h2 class="section-title white-text mb-0">The Quality and affordable
              Digital Services</h2>
          </div>
          <div class="col-md-4">
            <a href="#" class="theme-btn black-btn">Discover more</a>
          </div>
        </div>
      </div>
    </div>
    <div class="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="text-center">
              <span class="section-intro">Direct from the blog</span>
              <h2 class="section-title">Latest News & Articles</h2>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="blog-block">
                  <div class="post-thumb-block">
                    <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="post-content-block">
                    <div class="post-date">
                      5th Dec
                    </div>
                    <div class="blog-block-inner">
                      <div class="post-meta-block">
                        <div class="d-flex justify-content-center">
                          <span class="post-author"><i class="flaticon-user"></i> Admin</span>
                          <span class="post-comments"><i class="flaticon-chat"></i> 2 Comments</span>
                        </div>
                      </div>
                      <h3 class="post-title-block"><a href="single.html">Our strategy to create
                          a low advantage</a></h3>
                      <div class="post-excerpt-block">
                        Lorem ipsum dolor sit amet, conse elit sed do eiusm od tempor ut simply free labore.
                      </div>
                      <div class="post-read-more">
                        <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="blog-block">
                  <div class="post-thumb-block">
                    <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="post-content-block">
                    <div class="post-date">
                      5th Dec
                    </div>
                    <div class="blog-block-inner">
                      <div class="post-meta-block">
                        <div class="d-flex justify-content-center">
                          <span class="post-author"><i class="flaticon-user"></i> Admin</span>
                          <span class="post-comments"><i class="flaticon-chat"></i> 2 Comments</span>
                        </div>
                      </div>
                      <h3 class="post-title-block"><a href="single.html">Our strategy to create
                          a low advantage</a></h3>
                      <div class="post-excerpt-block">
                        Lorem ipsum dolor sit amet, conse elit sed do eiusm od tempor ut simply free labore.
                      </div>
                      <div class="post-read-more">
                        <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="blog-block">
                  <div class="post-thumb-block">
                    <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="post-content-block">
                    <div class="post-date">
                      5th Dec
                    </div>
                    <div class="blog-block-inner">
                      <div class="post-meta-block">
                        <div class="d-flex justify-content-center">
                          <span class="post-author"><i class="flaticon-user"></i> Admin</span>
                          <span class="post-comments"><i class="flaticon-chat"></i> 2 Comments</span>
                        </div>
                      </div>
                      <h3 class="post-title-block"><a href="single.html">Our strategy to create
                          a low advantage</a></h3>
                      <div class="post-excerpt-block">
                        Lorem ipsum dolor sit amet, conse elit sed do eiusm od tempor ut simply free labore.
                      </div>
                      <div class="post-read-more">
                        <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="partners-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="partners-carousel swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/partner-logo.png" alt="" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/partner-logo.png" alt="" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/partner-logo.png" alt="" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/partner-logo.png" alt="" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/partner-logo.png" alt="" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/partner-logo.png" alt="" class="img-fluid">
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