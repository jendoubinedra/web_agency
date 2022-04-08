<?php
session_start();
?>
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
    <div class="dt-header__toolbar">

      

      <!-- Header Menu Wrapper -->
      <div class="dt-nav-wrapper">
        <!-- Header Menu -->
        <ul class="dt-nav d-lg-none">
          <li class="dt-nav__item dt-notification-search dropdown">

            <!-- Dropdown Link -->
            <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"> <i class="icon icon-search icon-fw icon-lg"></i> </a>
            <!-- /dropdown link -->

            <!-- Dropdown Option -->
            <div class="dropdown-menu">

              <!-- Search Box -->
              <form class="search-box right-side-icon">
                <input class="form-control form-control-lg" type="search" placeholder="Search in app...">
                <button type="submit" class="search-icon"><i class="icon icon-search icon-lg"></i></button>
              </form>
              <!-- /search box -->

            </div>
            <!-- /dropdown option -->

          </li>
        </ul>
        <!-- /header menu -->

       
      

      

        <!-- Header Menu -->
        <ul class="dt-nav">
          <li class="dt-nav__item dropdown">

            <!-- Dropdown Link -->
            <a href="#" class="dt-nav__link dropdown-toggle no-arrow dt-avatar-wrapper"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="dt-avatar size-30" src="assets/images/user-avatar/domnic-harris.jpg" alt="Domnic Harris">
              <span class="dt-avatar-info d-none d-sm-block">
                <span class="dt-avatar-name"><?php echo $_SESSION['nomclient']?></span>
              </span> </a>
            <!-- /dropdown link -->

            <!-- Dropdown Option -->
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dt-avatar-wrapper flex-nowrap p-6 mt-n2 bg-gradient-purple text-white rounded-top">
                <img class="dt-avatar" src="assets/images/user-avatar/domnic-harris.jpg" alt="Domnic Harris">
                <span class="dt-avatar-info">
                  <span class="dt-avatar-name"><?php echo $_SESSION['nomclient']?></span>
                  <span class="f-12">utilisateur</span>
                </span>
              </div>
              <a class="dropdown-item" href="javascript:void(0)"> <i class="icon icon-user icon-fw mr-2 mr-sm-1"></i>Account
              </a> <a class="dropdown-item" href="javascript:void(0)">
                <i class="icon icon-settings icon-fw mr-2 mr-sm-1"></i>Setting </a>
              <a class="dropdown-item" href="includes/deconnexion2.php"> <i class="icon icon-editors icon-fw mr-2 mr-sm-1"></i>Logout
              </a>
            </div>
            <!-- /dropdown option -->

          </li>
        </ul>
        <!-- /header menu -->
      </div>
      <!-- Header Menu Wrapper -->

    </div>
    <!-- /header toolbar -->

  </div>
  <!-- /header container -->

</header>