<?php 
if(empty($_session['login'])){
  header("ajout-admin.php");
  session_start();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Drift - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
<!-- /meta tags -->
<title>Admin</title>

<!-- Site favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
<!-- /site favicon -->

<!-- Font Icon Styles -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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


<!-- Root -->
<div class="dt-root">
    <div class="dt-root__inner">

        <!-- Login Container -->
        <div class="dt-login--container">

            <!-- Login Content -->
            <div class="dt-login__content-wrapper">

                <!-- Login Background Section -->
                <div class="dt-login__bg-section">

                    <div class="dt-login__bg-content">
                        <!-- Login Title -->
                        <h1 class="dt-login__title">Login</h1>
                        <!-- /login title -->

                        <p class="f-16">Sign in and explore in-built apps of Drift.</p>
                    </div>


                    <!-- Brand logo -->
                    <div class="dt-login__logo">
                        <a class="dt-brand__logo-link" href="index-2.html">
                            <img class="dt-brand__logo-img" src="assets/images/logo-white.png" alt="Drift">
                        </a>
                    </div>
                    <!-- /brand logo -->

                </div>
                <!-- /login background section -->

                <!-- Login Content Section -->
                <div class="dt-login__content">

                    <!-- Login Content Inner -->
                    <div class="dt-login__content-inner">

                        <!-- Form -->
                        <form action="controller/verif.php" method="post">

                            <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="email-1">login</label>
                                <input type="text" class="form-control" id="email-1" aria-describedby="email-1"
                                       placeholder="Enter login" name="login">
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="password-1">Password</label>
                                <input type="password" class="form-control" id="password-1" placeholder="Password" name="password">
                            </div>
                            <!-- /form group -->

                           

                            <!-- Form Group -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary text-uppercase">Login</button>
                                
                            </div>
                            <!-- /form group -->

                            
                            


                        </form>
                        <!-- /form -->

                    </div>
                    <!-- /login content inner -->

                    <!-- Login Content Footer -->
                    <div class="dt-login__content-footer">
                        <a href="page-forgot-password.html">Can’t access your account?</a>
                    </div>
                    <!-- /login content footer -->

                </div>
                <!-- /login content section -->

            </div>
            <!-- /login content -->

        </div>
        <!-- /login container -->

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

<!-- Mirrored from drift.g-axon.work/html-bs4/default/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 11:49:20 GMT -->
</html>