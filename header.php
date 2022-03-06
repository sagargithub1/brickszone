<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Real Villa - Real Estate HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Brickszone</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/up123.png" />

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,500,600,700%7CRoboto:300,400,500,700">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="css/select2/select2.css" />
    <link rel="stylesheet" href="css/range-slider/ion.rangeSlider.css" />
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>

    <!--=================================
header -->
    <header class="header">
        <div class="topbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="d-block d-md-flex align-items-center text-center">
                            <div class="mr-3 d-inline-block">
                                <a href="tel:1-800-555-1234"><i
                                        class="fa fa-phone mr-2 fa fa-flip-horizontal"></i>+91-9004980001</a>
                            </div>
                            <div class="mr-auto d-inline-block">

                            </div>

                            <?php if(!isset($_SESSION['user'])){?>
                            <div class="login d-inline-block mr-3">
                                <a href="register.php">Register<i class="fa fa-user pl-2"></i></a>
                            </div>
                            <div class="login d-inline-block">
                                <a href="signin.php">Sign in<i class="fa fa-user pl-2"></i></a>
                            </div>
                            <?php } else { ?>
                            <div class="login d-inline-block">
                                <a href="BrickszoneCMS/dashboard.php">My Account<i class="fa fa-user pl-2"></i></a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-light bg-white navbar-static-top navbar-expand-lg header-sticky">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i
                        class="fas fa-align-left"></i></button>
                <a class="navbar-brand" href="index.php">
                    <img class="img-fluid" src="images/up123.png" alt="logo">
                </a>
                <div class="navbar-collapse collapse justify-content-center col-10">
                    <ul class="nav navbar-nav">
                        <li class="nav-item dropdown active">
                            <a class="nav-link" href="index.php" id="navbarDropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">Home</a>
                        </li>
                        <li class=" nav-item">
                            <a href="about-us.php" class="nav-link">About Us</a>

                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="properties.php" aria-haspopup="true" aria-expanded="false">
                                Properties
                            </a>
                        <li class="nav-item ">
                            <a class="nav-link" href="NRI.php" aria-haspopup="true" aria-expanded="false">
                                NRI Desk
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="contact.php" aria-haspopup="true" aria-expanded="false">
                                Contact Us
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>