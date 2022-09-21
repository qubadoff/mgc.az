<?php require "system/lang.php"; ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <title><?php echo constant('title'); ?></title>
    <link rel="icon" href="assets/images/logo/logo300.png" type="image/gif" sizes="16x16">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="assets/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="assets/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="assets/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/coloring.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
    <div id="topbar" class="topbar-noborder">
        <div class="container">
            <div class="topbar-left sm-hide">
                    <span class="topbar-widget tb-social">
                        <a href="https://www.facebook.com/mgconsultingazerbaijan"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/mgconsultingazerbaijan"><i class="fa fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/mgconsultingazerbaijan"><i class="fa fa-instagram"></i></a>
                    </span>
            </div>
            <div class="topbar-right">
                <div class="topbar-right">
                    <span class="topbar-widget"><a href="privacy.php">
                            <a href="/privacy"><?php echo constant('privacy'); ?></a>
                    </span>
                    <span class="topbar-widget"><a href="privacy.php">
                            <a href="/terms"><?php echo constant('terms'); ?></a>
                    </span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- header begin -->
    <header class="header-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex sm-pt10">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="/">
                                    <img alt="" class="logo" src="assets/images/logo/logo300.png" />
                                    <img alt="" class="logo-2" src="assets/images/logo/logo300.png" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                        <div class="de-flex-col header-col-mid">
                            <!-- mainmenu begin -->
                            <ul id="mainmenu">
                                <li><a href="/"><?php echo constant('home'); ?></a></li>
                                <li><a href="/about"><?php echo constant('about'); ?></a></li>
                                <li><a href="/publications"><?php echo constant('publications'); ?></a></li>
                                <li><a href="/faq"><?php echo constant('faq'); ?></a></li>
                                <li><a href="/partners"><?php echo constant('partners'); ?></a></li>
                                <li><a href="/contact"><?php echo constant('contact'); ?></a></li>
                                <li><a href="#"><?php echo constant('language'); ?></a>
                                    <ul>
                                        <li><a href="?lang=az"><?php echo constant('az'); ?></a></li>
                                        <li><a href="?lang=en"><?php echo constant('eng'); ?></a></li>
                                        <li><a href="?lang=ru"><?php echo constant('ru'); ?></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- mainmenu close -->
                        </div>
                        <div class="de-flex-col">
                            <div class="h-phone md-hide"><span><?php echo constant('help'); ?></span><i class="fa fa-phone"></i>+994512072324</div>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header close -->