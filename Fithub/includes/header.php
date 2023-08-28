<?php include "./config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fithub - Gym & Fitness HTML Template</title>
    <meta name="keywords" content="Fithub" />
    <meta name="description" content="Fithub" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- FavIcon CSS -->
    <link rel="icon" href="assets/images/favicon.png" type="image/gif" sizes="16x16">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!--Google Fonts CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <!--Font Awesome Icon CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- Wow Animation CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.min.css">

    <!-- Main Style CSS  -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
     <!-- Header Start -->
     <header class="site-header">
        <!--Navbar Start  -->
        <div class="header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <!-- Sit Logo Start -->
                        <div class="site-branding">
                            <a href="index-02.html" title="Fithub">
                                <img src="assets/images/logo_stickey.png" alt="Logo">
                                <img src="assets/images/logo_stickey.png" class="sticky-logo" alt="Logo">
                            </a>
                        </div>
                        <!-- Sit Logo End -->
                    </div>
                    <div class="col-lg-10">
                        <div class="header-menu">
                            <nav class="main-navigation two">
                                <button class="toggle-button">
                                    <span></span>
                                    <span class="toggle-width"></span>
                                    <span></span>
                                </button>
                                <div class="mobile-menu-box">
                                    <i class="menu-background top"></i>
                                    <i class="menu-background middle"></i>
                                    <i class="menu-background bottom"></i>
                               <ul class="menu">
                                <?php foreach($navLinks as $i): ?>
                                    <li><a href="./<?php echo $i['url'] ?>"><?php echo $i['title'] ?></a></li>
                                <?php endforeach; ?>
                               </ul>
                                </div>
                            </nav>
                            <div class="header-search-box two">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#search-modal" class="header-search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="black-shadow"></div>
                            <div class="header-btn-two">
                                <a href="contact-us.php" class="sec-btn">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>