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
   <<?php
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
                    <li><a href="blog.php">Recretement</a>
                      <ul class="submenu-inner">
                        <li><a href="blog.html">Blog Classic</a></li>
                        <li><a href="single-blog.html">News Details</a></li>
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
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
            <h1 class="page-title">Contact</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="page-inner ptb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-md-30 mb-xs-30">
            <span class="section-intro">Contact </span>
            <h2 class="section-title">Ecrire votre message</h2>
            <div class="htc-block">
                  <i class="flaticon-telephone" ></i> 
                  (+216) 27 180 092 <br> (+216) 94 110 276
                 
                </div>
            <div class="htc-block">
                  <i class="flaticon-envelope"></i> contact@designet-tn.com <br>agency@designet-tn.com
                 
                 
                </div>
                <div class="htc-block">
                  <i class="flaticon-maps-and-flags"></i>  Rue de la révolution Menzel temime 8080
                </div>
           
          </div>
          <div class="col-lg-8">
        
            <div id="contact" class="contact-form">
              <div id="message"></div>
              
                        
              
              <a href="ajouter-devis.php"> <button type="button" class="btn btn-primary">ajouter</a></button><br><br>
                                    <!-- Tables -->
                                    <div class="table-responsive">
                                    <?php
                                      if(isset($_GET['resultat'])){
                                        if ($_GET['resultat'] =='ajouter devis'){

                                        
                                      ?>
                                    <div class="alert alert-success" role="alert">
                                    <strong>ajouter effectue avec succes</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                     </div>
                                     <?php
                                            }
                                            }
                                     ?>
                                      <?php
                                      if(isset($_GET['resultat'])){
                                        if ($_GET['resultat'] =='modif devis'){

                                        
                                      ?>
                                    <div class="alert alert-success" role="alert">
                                    <strong>modifier effectue avec succes</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                     </div>
                                     <?php
                                            }
                                            }
                                     ?>
                                    <?php
                                      if(isset($_GET['resultat'])){
                                        if ($_GET['resultat'] =='supp devis'){

                                        
                                      ?>

                                    <div class="alert alert-danger" role="alert">
                                    <strong>supprimer effectue avec succes</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                     </div>
                                     <?php
                                            }
                                            }
                                     ?>
                                        <table id="data-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>titre</th>
                                                <th>description</th>
                                                <th>nature</th>
                                                <th>date limite</th>
                                                <th>email</th>
                                                <th>telephone</th>
                                                <th>actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                              while($result=$req->fetch()){
                                              ?>
                                            <tr class="gradeX">
                                                <td><?php echo $result['titre']?></td>
                                                <td><?php echo $result['description']?></td>
                                                <td><?php echo $result['nature']?></td>
                                                <td><?php echo $result['date_limite']?></td>
                                                <td><?php echo $result['email']?></td>
                                                <td><?php echo $result['telephone']?></td>
                                                <td>
                                                <a href="modif-devis.php?id=<?php echo $result['id']?>" class="btn btn-success">modifier</a>
                                                <a href="controller/supp-devis.php?id=<?php echo $result['id']?>"  class="btn btn-danger">supprimer</a></td>
                                            </tr>
                                            
                                            
                                           <?php }?> 
                                         
                                            

                                    </div>
                                    <!-- /tables -->

                                </div>
                                <!-- /card body -->

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
  <script src="assets/js/vendor/jarallax.min.js"></script>
  <script src="assets/js/jquery.jigowatt.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATkt1u50mcSzoEy2BsaY7q35hpjwGX_Pg"></script>
  <script src="assets/js/map-script.js"></script>
  <script src="assets/js/custom.js"></script>
</body>


</html>