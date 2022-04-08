<?php 
include("includes/connect_db.php");
$id=$_GET['id'];
$req=$bdd->query("select * from devis where id=$id");
$result=$req->fetch();
?>
<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <title>Osfins | Digital Startup Agency HTML5 Template</title>
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
                    <li><a href="index-2.php">Accueil</a>
                      <!-- <ul class="submenu-inner">
                        <li><a href="index-2.php">Home 1</a></li>
                        <li><a href="home-2.php">Home 2</a></li>
                      </ul> -->
                    </li>
                    <li><a href="about.php">Qui somme nous</a></li>
                    <li><a href="services.html">Services</a>
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
                    
                    <li class="active-page-menu"><a href="contact.php">Contact</a></li>
                  </ul>
                </nav>
                <div class="header-search-btn">
                  <div class="search-btn">
                    <i class="flaticon-magnifiying-glass"></i>
                  </div>
                </div>
                <div class="menu-button">
                  <a href="ajouter-devis.php" class="theme-btn">Demabde Devis</a>
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
            <div class="search-btn search-btn-dark">
              <i class="flaticon-magnifiying-glass"></i>
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
                <li><a href="index-2.php">Home 1</a></li>
                <li><a href="home-2.php">Home 2</a></li>
              </ul>
            </li>
            <li><a href="about.html">Qui somme nous</a></li>
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
            <li><a href="blog.php">Recretement</a>
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
    <div class="page-header-section" data-background="assets/img/pagehero-image.jpg">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">devis</li>
              </ol>
            </nav>
            <h1 class="page-title">devis</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="page-inner ptb-120">
      <div class="container">
        <div class="row">
         
          <div class="col-lg-8">
        
            <div id="contact" class="contact-form">
              <div id="message"></div>
              <?php
                                    
                                    ?>
              <form method="post" action="controller/modif-devis.php?id=<?php echo $result['id']?>" >
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="titre" accesskey="N" class="sr-only"><span class="required">*</span> titre</label>
                      <input  type="text" id="titre" size="30" placeholder="votre nom" name="titre"  value="<?php echo $result['titre']?>"/>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="description" accesskey="M" class="sr-only"><span class="required">*</span> description
                       </label>
                      <textarea cols="40" rows="1" id="description" placeholder="entre description" name="description" value="<?php echo $result['description']?>"></textarea>
                    </div>
                  </div>
                </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <select name="nature" >
                        <option >web</option>
                        <option >mobile</option>
                        <option >seo</option>
                      </select>
                    </div>
                  </div>
                </div> 
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="date" accesskey="S" class="sr-only">date</label>
                      <input type="text" id="date" size="30"  placeholder="entre date"  name="date_limite" value="<?php echo $result['date_limite']?>"/>
                    </div>
                  </div>
                </div>
               
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="email" accesskey="E" class="sr-only"><span class="required">*</span> Email
                        address</label>
                      <input  type="text" id="email" size="30"  placeholder="entre email"  name="email" value="<?php echo $result['email']?>"/>
                    </div>
                  </div>
                 </div>       
                  <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <label for="telephone" accesskey="S" class="sr-only">telephone</label>
                    <input type="text" id="telephone" size="30"  placeholder="entre telephone"  name="telephone" value="<?php echo $result['telephone']?>"/>
                    </div>
                  </div>
                </div>
                
                  <div class="col-md-6">
                    <button type="submit" class="form-submit-btn theme-btn" id="submit">Envoyer</button>
                  </div>
                </div>
              </form>
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
  <script src="assets/js/vendor/jarallax.min.js"></script>
  <script src="assets/js/jquery.jigowatt.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATkt1u50mcSzoEy2BsaY7q35hpjwGX_Pg"></script>
  <script src="assets/js/map-script.js"></script>
  <script src="assets/js/custom.js"></script>
</body>


</html>