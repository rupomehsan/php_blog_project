
<?php

include 'config/config.php';
include 'lib/Database.php';
include 'helpers/formate.php';
$db= new Database();
$fm= new Formate();


?>






<!doctype html>
<html lang="en">


<!-- Mirrored from tavillathemes.com/html/stam/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 15:43:43 GMT -->
<head>
    <title>J. Stam - Personal Portfolio Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="J. Stam - Personal Portfolio Template">
    <meta name="keywords" content="personal, portfolio, vcard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- Stylesheets -->
    <?php include 'script/css.php';?>
    <!-- Google Web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Font icons -->
    <link rel="stylesheet" href="icon-fonts/font-awesome-4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="icon-fonts/essential-regular-fonts/essential-icons.css" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Preloading -->
    <div id="preloader">
        <div class="spinner">
            <div class="uil-ripple-css" style="transform:scale(0.29);">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo"><a href="index.php" title=""><img  src="images/logo.jpg" alt="logo"></a>Rupomehsan </div>
                </div>
                <div class="col-md-9">
                    <div class="right-menu"> <i class="fa fa-bars"></i> </div>
                    <div class="responsive">MENU</div>
                    <nav>
                        <ul class="nav-menu nav-scroll">
                            <li><a href="#home" class="selected">HOME</a></li>
                            <li><a href="#about">ABOUT</a></li>
                            <li><a href="#portfolio">PORTFOLIO</a></li>
                            <li><a href="#blog">BLOG</a></li>
                            <li><a href="#contact">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--HOME-->