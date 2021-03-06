<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Diet Consult | <?php echo $page_title; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo/favicon.png'); ?>" type="image/x-icon">

    <?php if (strpos($page_title, "(Plan)")) { ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/business-casual.min.css'); ?>">
    <?php } ?>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate-3.7.0.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome-4.7.0.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-4.1.3.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl-carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.datetimepicker.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/linearicons.css'); ?>">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css'); ?>"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/table.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <!-- Javascript -->
    <script src="<?php echo base_url('assets/js/vendor/jquery-2.2.4.min.js'); ?>"></script>
</head>

<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> call us now! +1 305 708
                            2563</h6>
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> info@dietconsult.com
                        </h6>
                        <h6><span class="mr-2"><i class="fa fa-map-marker"></i></span> Find our Location</h6>
                    </div>
                    <div class="col-lg-3">
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="<?php echo base_url(); ?>">
                            <img src="<?php echo base_url('assets/images/logo/logo.png'); ?>" alt="" title="" />
                        </a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active">
                                <a href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li class="menu-has-children">
                                <a href="<?php echo base_url('#mealplans'); ?>">Meal Plans</a>
                                <!-- <ul>
                                    <li><a href="<?php echo base_url('mealplans/info/'); ?>">about us</a></li>
                                    <li><a href="<?php echo base_url('mealplans/info/'); ?>">elements</a></li>
                                </ul> -->
                            </li>
                            <li><a href="<?php echo base_url('my/mealplan'); ?>">My Meal Plan</a></li>
                            <?php if(!isset($_SESSION["account_id"]) || $_SESSION["account_id"] == ""){ ?>
                            <li>
                                <a href="javascript:{}" data-toggle="modal" data-target="#signInModal">Login</a>/
                                <a href="<?php echo base_url('#createplan'); ?>">Sign Up</a>
                            </li>
                            <?php } else{ ?>
                            <li><a href="<?php echo base_url('#profile'); ?>">My Profile</a></li>
                            <li><a href="<?php echo base_url('q/logout'); ?>">Logout</a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->