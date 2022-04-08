<?php
include("includes/connect_db.php");
$req=$bdd->query('select * from devis');
if(empty($_session['login'])){
  header("login.php");
session_start(); 
}

?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Drift - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
<!-- /meta tags -->
<title>liste clients</title>

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

<!-- Load Styles -->    <!-- Data table stylesheet -->
    <link href="../node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- /data table stylesheet -->

    <link rel="stylesheet" href="assets/css/semidark-style-1.min.css">
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
<?php
include("header2.php");
?>
<!-- /header -->
        <!-- Site Main -->
        <main class="dt-main">
            <!-- Sidebar -->
<?php 


?>
<!-- /sidebar -->
            <!-- Site Content Wrapper -->
            <div class="dt-content-wrapper">

                <!-- Site Content -->
                <div class="dt-content">

                    <!-- Page Header -->
                    <div class="dt-page__header">
                        <h1 class="dt-page__title">Liste devis</h1>
                    </div>
                    <!-- /page header -->

                    <!-- Grid -->
                    <div class="row">

                        <!-- Grid Item -->
                        <div class="col-xl-12">
                        <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Body -->
                                <div class="dt-card__body">
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
                                        <table id="data-table" class="table table-striped table-bordered table-hover" >
                                            <thead>
                                            <tr>
                                                <th>titre</th>
                                                <th>description</th>
                                                <th>description</th>
                                                <th>date limite</th>
                                                <th>email</th>
                                                <th>telephone</th>
                                                <th colspan="2">actions</th>
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
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                    </div>
                    <!-- /grid -->

                </div>
                <!-- /site content -->

                <!-- Footer -->

                
<!-- /footer -->
            </div>
            <!-- /site content wrapper -->

            <!-- Theme Chooser -->

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
<script src="../node_modules/datatables.net/js/jquery.dataTables.js"></script>
<script src="../node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
<script src="assets/js/custom/data-table.js"></script>
<script src="assets/js/script.js"></script>

</body>

<!-- Mirrored from drift.g-axon.work/html-bs4/default/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 11:52:15 GMT -->
</html>
