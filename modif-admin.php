<?php
include("includes/connect_db.php");
$id=$_GET['id'];
$req=$bdd->query("select * from admin where id=$id");
$donne=$req->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Drift - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
<!-- /meta tags -->
<title>Drift - Admin Template</title>

<!-- Site favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
<!-- /site favicon -->

<!-- Font Icon Styles -->
<link rel="stylesheet" href="../node_modules/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="vendors/gaxon-icon/styles.css">
<!-- /font icon Styles -->

<!-- Perfect Scrollbar stylesheet -->
<link rel="stylesheet" href="../node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
<!-- /perfect scrollbar stylesheet -->

<!-- Load Styles -->    <link rel="stylesheet" href="assets/css/semidark-style-1.min.css">
    <!-- /load styles -->

</head>
<body class="dt-sidebar--fixed dt-header--fixed">

<!-- Loader -->
<div class="dt-loader-container">
  <div class="dt-loader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
  </div>
</div>
<!-- /loader -->
<!-- Root -->
<div class="dt-root">
    <div class="dt-root__inner">
        <!-- Header -->
<header class="dt-header">

  <!-- Header container -->
  <div class="dt-header__container">

    <!-- Brand -->
    <div class="dt-brand">

      <!-- Brand tool -->
      <div class="dt-brand__tool" data-toggle="main-sidebar">
        <div class="hamburger-inner"></div>
      </div>
      <!-- /brand tool -->

      <!-- Brand logo -->
      <span class="dt-brand__logo">
        <a class="dt-brand__logo-link" href="index-2.html">
          <img class="dt-brand__logo-img d-none d-sm-inline-block" src="assets/images/logo.png" alt="Drift">
          <img class="dt-brand__logo-symbol d-sm-none" src="assets/images/logo-symbol.png" alt="Drift">
        </a>
      </span>
      <!-- /brand logo -->

    </div>
    <!-- /brand -->

    <!-- Header toolbar-->
    
    <?php
    include("header.php");
    ?>
    <!-- /header toolbar -->

  </div>
  <!-- /header container -->

</header>
<!-- /header -->
        <!-- Site Main -->
        <main class="dt-main">
            <!-- Sidebar -->

            <?php
            include("menu.php");
            ?>
<!-- /sidebar -->
            <!-- Site Content Wrapper -->
            <div class="dt-content-wrapper">

                <!-- Site Content -->
                <div class="dt-content">

                    <!-- Page Header -->
                    <div class="dt-page__header">
                        <h1 class="dt-page__title">modifier admin</h1>
                    </div>
                    <!-- /page header -->

                    <!-- Grid -->
                    <div class="row">

                        <!-- Grid Item -->
                        <div class="col-xl-6">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Header -->
                                <div class="dt-card__header">

                                    <!-- Card Heading -->
                                    <div class="dt-card__heading">
                                        <h3 class="dt-card__title"></h3>
                                    </div>
                                    <!-- /card heading -->

                                </div>
                                <!-- /card header -->

                                <!-- Card Body -->
                                <div class="dt-card__body">
                                <?php
                                      if(isset($_GET['resultat'])){
                                        if ($_GET['resultat'] =='modif admin'){

                                        
                                      ?>
                                <div class="alert alert-primary" role="alert">
                                        <strong>modifier effectue avec succes</strong> 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php
                                            }
                                            }
                                     ?>
                                    <!-- Form -->
                                    <form action="controller/modifadmin.php?id=<?php echo $donne['id']?>" method="post">
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <label for="nom">nom</label>
                                            <input type="text" class="form-control" id="nom"
                                                   aria-describedby="emailHelp1"
                                                   placeholder="Enter nom" value="<?php echo $donne['nom']?>" name="nom" required>
                                            
                                        </div>
                                        <!-- /form group -->
                                         <!-- Form Group -->
                                        <div class="form-group">
                                            <label for="login">login</label>
                                            <input type="email" class="form-control" id="login"
                                                   aria-describedby="emailHelp1"
                                                   placeholder="Enter login" value="<?php echo $donne['login']?>" name="login">
                                           
                                        </div>
                                        <!-- /form group -->
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <label for="email-1">Email</label>
                                            <input type="email" class="form-control" id="email-1"
                                                   aria-describedby="emailHelp1"
                                                   placeholder="Enter email"value="<?php echo $donne['email']?>" name="email">
                                            
                                                   
                                        </div>
                                        <!-- /form group -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <label for="password-1">Password</label>
                                            <input type="password" class="form-control" id="password-1"
                                                   placeholder="Password" value="<?php echo $donne['password']?>"  name="password" required>
                                        </div>
                                        <!-- /form group -->

                                        
                                        
                                        <!-- /form group -->

                                        <!-- Form Group -->
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-primary text-uppercase">modifier</button>
                                            
                                        </div>
                                        <!-- /form group -->


                                    </form>
                                    <!-- /form -->

                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        
                        

                              
                                

                                       
                                
                                    
                               
                        
                    <div class="row">

                        
                        
                                   
                                  
                 

                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                       
                      


                       
                        
                        <!-- /grid item -->

                       
                        
                        <!-- /grid item -->

                    </div>
                    <!-- /grid -->

                </div>
                <!-- /site content -->

                <!-- Footer -->

                <?php
include("footer.php");?>
<!-- /footer -->
            </div>
            <!-- /site content wrapper -->

            <!-- Theme Chooser -->
<div class="dt-customizer-toggle">
  <a href="javascript:void(0)" data-toggle="customizer"> <i class="icon icon-customizer animation-customizer"></i> </a>
</div>
<!-- /theme chooser -->

<!-- Customizer Sidebar -->
<aside class="dt-customizer dt-drawer position-right">
  <div class="dt-customizer__inner">

    <!-- Customizer Header -->
    <div class="dt-customizer__header">

      <!-- Customizer Title -->
      <div class="dt-customizer__title">
        <h3 class="mb-0">Theme Settings</h3>
      </div>
      <!-- /customizer title -->

      <!-- Close Button -->
      <button type="button" class="close" data-toggle="customizer">
        <span aria-hidden="true">&times;</span>
      </button>
      <!-- /close button -->

    </div>
    <!-- /customizer header -->

    <!-- Customizer Body -->
    <div class="dt-customizer__body ps-custom-scrollbar">
      <!-- Customizer Body Inner  -->
      <div class="dt-customizer__body-inner">

        <!-- Section -->
        <section>
          <h4>Theme</h4>

          <!-- List -->
          <ul class="dt-list dt-list-sm" id="theme-chooser">
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" data-theme="light">
                  <img src="assets/images/customizer-icons/theme-light.png" alt="Light">
                </a>
                <span class="choose-option__name">Light</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" data-theme="semidark">
                  <img src="assets/images/customizer-icons/theme-normal.png" alt="Normal">
                </a>
                <span class="choose-option__name">Semi-dark</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" data-theme="dark">
                  <img src="assets/images/customizer-icons/theme-dark.png" alt="Dark">
                </a>
                <span class="choose-option__name">Dark</span>
              </div>
            </li>
          </ul>
          <!-- /list -->

        </section>
        <!-- /section -->

        <!-- Section -->
        <section>
          <h4>Style</h4>

          <!-- List -->
          <ul class="dt-list dt-list-sm">
            <li class="dt-list__item d-none d-lg-block">
              <div class="choose-option">
                <a href="javascript:void(0)" id="toggle-fixed-sidebar" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/fix-sidebar.png" alt="Fix Sidebar">
                </a>
                <span class="choose-option__name">Fix Sidebar</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" id="toggle-fixed-header" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/fix-header.png" alt="Fix Header">
                </a>
                <span class="choose-option__name">Fix Header</span>
              </div>
            </li>
          </ul>
          <!-- /list -->

        </section>
        <!-- /section -->

        <!-- Section -->
        <section id="theme-style-chooser">
          <h4>Color</h4>

          <!-- List -->
          <ul class="dt-list dt-list-sm dt-color-options">
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-1"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-2"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-3"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-4"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-5"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-6"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-7"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-8"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-9"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-10"></span>
            </li>
          </ul>
          <!-- /list -->

        </section>
        <!-- /section -->

        <!-- Section -->
        <section class="d-none d-lg-block" id="sidebar-layout">
          <h4>Sidebar Layout</h4>

          <!-- List -->
          <ul class="dt-list dt-list-sm">
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" id="sl-option1" data-value="folded">
                  <img src="assets/images/customizer-icons/folded.png" alt="Folded">
                </a>
                <span class="choose-option__name">Folded</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" id="sl-option2" data-value="default">
                  <img src="assets/images/customizer-icons/default.png" alt="Default">
                </a>
                <span class="choose-option__name">Default</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" id="sl-option3" data-value="drawer">
                  <img src="assets/images/customizer-icons/drawer.png" alt="Drawer">
                </a>
                <span class="choose-option__name">Drawer</span>
              </div>
            </li>
          </ul>
          <!-- /list -->

        </section>
        <!-- /section -->

        <!-- Section -->
        <section class="d-none d-lg-block" id="layout-chooser">
          <h4>Layout</h4>

          <!-- List -->
          <ul class="dt-list dt-list-sm">
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" data-layout="framed">
                  <img src="assets/images/customizer-icons/framed.png" alt="Framed">
                </a>
                <span class="choose-option__name">Framed</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" data-layout="full-width">
                  <img src="assets/images/customizer-icons/full-width.png" alt="Full Width">
                </a>
                <span class="choose-option__name">Full Width</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" data-layout="boxed">
                  <img src="assets/images/customizer-icons/boxed.png" alt="Boxed">
                </a>
                <span class="choose-option__name">Boxed</span>
              </div>
            </li>
          </ul>
          <!-- /list -->

        </section>
        <!-- /section -->

        <!-- Section -->
        <section>
          <h4>Nav Style</h4>

          <!-- List -->
          <ul class="dt-list">
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/default" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-default.png" alt="Layout Default">
                </a>
                <span class="choose-option__name">Default</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/saas" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-saas.png" alt="Layout SAAS">
                </a>
                <span class="choose-option__name">SAAS Layout</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/listing" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-listing.png" alt="Layout listing">
                </a>
                <span class="choose-option__name">Listing</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/intranet" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-intranet.png" alt="Layout Intranet">
                </a>
                <span class="choose-option__name">Intranet</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/back-office" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-back-office.png" alt="Layout Back Office">
                </a>
                <span class="choose-option__name">Back Office</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/back-office-mini" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-back-office-mini.png"
                       alt="Layout Back Office Minimal">
                </a>
                <span class="choose-option__name">Back Office Minimal</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/modern" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-modern.png" alt="Layout Modern">
                </a>
                <span class="choose-option__name">Modern</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/crm" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-crm.png" alt="Layout CRM">
                </a>
                <span class="choose-option__name">CRM</span>
              </div>
            </li>
          </ul>
          <!-- /list -->

        </section>
        <!-- /section -->

      </div>
      <!-- /customizer body inner -->
    </div>
    <!-- /customizer body -->

  </div>
</aside>
<!-- /customizer sidebar -->
        </main>
    </div>
</div>
<!-- /root -->

<!-- Optional JavaScript -->
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/moment/moment.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Perfect Scrollbar jQuery -->
<script src="../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<!-- /perfect scrollbar jQuery -->

<!-- masonry script -->
<script src="../node_modules/masonry-layout/dist/masonry.pkgd.min.js"></script>
<script src="../node_modules/sweetalert2/dist/sweetalert2.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/customizer.js"></script><!-- Custom JavaScript -->
<script src="assets/js/script.js"></script>

</body>



</html>