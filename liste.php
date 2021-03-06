
<?php
include("includes/connect_db.php");
$req=$bdd->query('select * from devis');
session_start(); 
if(empty($_session['login_c'])){
  header("conx-client.php");
 

}

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
  <link href="/chemin-vers-fontawesome/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  
  <style>
    table tr td{
      width: 160px;
    text-align: center;
    }
  </style>
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
                    <li><a href="index.php">Accueil</a>
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
                          
                        </li>
                      </ul>
                    </li>
                    <li class="active-page-menu"><a href="contact.php">Contact</a></li>
                  </ul>
                </nav>
                <!-- <div class="header-search-btn">
                  <div class="search-btn">
                    <i class="flaticon-magnifiying-glass"></i>
                  </div>
                </div> -->
                
                  <span><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-file-person-fill"></i><?php echo $_SESSION['nomclient']?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="includes/deconnexion2.php">Logout</a></li>
            
          </ul>
        </span>
       
              
      
            </div>
                
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
                <li><a href="single-service.php">Service Details</a></li>
              </ul>
            </li>
            <li><a href="#">Portfolio</a>
              <ul class="submenu-inner">
                <li><a href="portfolio.php">Projects</a>
                  <ul class="submenu-inner">
                    <li><a href="single-project.php">Projects Details</a></li>
                  </ul>
                </li>
                
                
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
                <li class="breadcrumb-item active" aria-current="page">liste</li>
              </ol>
            </nav>
            <h1 class="page-title">liste</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="page-inner ptb-120">
      <div class="">
        <div class="">
         
          <div>
         
            <div class="container">
              <div id="message"></div>
            <!-- <div><span style="font-family :italic ,red,20px;">inscription</span></div>  -->
           
             <div class></div> 




             <a href="ajouter-devis.php"><button type="button" class="btn btn-info">
             <i class="bi bi-bag-plus-fill"></i>ajouter</a> </button>

             <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>titre</th>  
                                                <th>description</th>
                                                <th>nature</th>
                                                <th>date_limite</th>
                                                <th>email</th>
                                                <th>telephone</th>
                                                <th colspan="2">actions</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                               while($result=$req->fetch()){
                                            ?>
                                          
                                               
                                            <tr> 
                                            <td><?php echo $result['id']?></td>
                                                   <td><?php echo $result['titre']?></td>
                                                    <td><?php echo $result['description']?></td>
                                                      <td><?php echo $result['nature']?></td>
                                                      <td><?php echo $result['date_limite']?></td>
                                                      <td><?php echo $result['email']?></td>
                                                      <td><?php echo $result['telephone']?></td>
                                                      <td>
                                                      <a href="modif-devis.php?id=<?php echo $result['id']?>" class="btn btn-success"><i class="bi bi-pencil-square"></i> modifier</a>
                                                      <a href="controller/supp-devis.php?id=<?php echo $result['id']?>"  class="btn btn-danger"><i class="bi bi-trash"></i> supprimer</a></td>
                                                      </td>
                                            </tr>
                                          
                                            <?php
                                              }?>
                                            </tbody>
                                        </table>
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
  <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
  <script defer src="/chemin-vers-fontawesome/js/all.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>


</html>