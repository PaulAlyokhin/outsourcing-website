<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Homepage - Careers</title>

    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css');?>">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/maplace.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.ba-outside-events.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.responsive-tabs.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.flexslider-min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.fitvids.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui-1.10.4.custom.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.inview.min.js');?>"></script>
    <!--[if IE 9]>
        <script src="js/media.match.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="main-wrapper">

    <header id="header" class="header-style-1">
        <div class="header-top-bar">
            <div class="container">

                <!-- Header Language -->
                <div class="header-language clearfix">
                    <ul>
                        <li class="active"><a href="#">En</a></li>
                        <li><a href="#">Fr</a></li>
                        <li><a href="#">De</a></li>
                        <li><a href="#">It</a></li>
                    </ul>
                </div> <!-- end .header-language -->

                <?php
                if(!isset($this->session->userdata['username'])):
                ?>
                <!-- Header Register -->
                <div class="header-register">
                    <a href="#" class="btn btn-link">Register</a>
                    <div>
                        <form action="<?php echo site_url('user/register/2');?>" method="POST">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <input type="submit" class="btn btn-default" value="Register">
                        </form>
                    </div>
                </div> <!-- end .header-register -->

                <!-- Header Login -->
                <div class="header-login">
                    <a href="#" class="btn btn-link">Login</a>
                    <div>
                        <form action="<?php echo site_url('user/login')?>" method="POST">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <input type="submit" class="btn btn-default" value="Login">
                            <a href="#" class="btn btn-link">Forgot Password?</a>
                        </form>
                    </div>
                </div> <!-- end .header-login -->
                <?php
                endif;
                ?>
                <?php
                if(isset($this->session->userdata['username'])):
                ?>
                <!-- Header Register -->
                <div class="header-register">
                    <a href="<?php echo site_url('user/logout');?>" class="btn btn-link">Logout</a>
                </div> <!-- end .header-register -->
                <!-- Header Login -->
                <div class="header-login">
                    <a href="#" class="btn btn-link"><?php echo $this->session->userdata['username'];?></a>
                </div> <!-- end .header-login -->
                <?php
                endif;
                ?>

            </div> <!-- end .container -->
        </div> <!-- end .header-top-bar -->

        <div class="header-nav-bar">
            <div class="container">

                <!-- Logo -->
                <div class="css-table logo">
                    <div class="css-table-cell">
                        <a href="<?php echo site_url('home/index');?>">
                            <img src="<?php echo base_url('assets/img/header-logo.png');?>" alt="">
                        </a> <!-- end .logo -->
                    </div>
                </div>

                <!-- Mobile Menu Toggle -->
                <a href="#" id="mobile-menu-toggle"><span></span></a>

                <!-- Primary Nav -->
                <nav>
                    <ul class="primary-nav">
                        <li class="active">
                            <a href="<?php echo site_url('home/index');?>">Home</a>
                        </li>
                        <li class="has-submenu">
                            <a href="<?php echo site_url('Jobs/browse');?>">Jobs</a>
                            <ul>
                                <li><a href="<?php echo site_url('Jobs/browse');?>">Browse Jobs</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="<?php echo site_url('Freelancers/browse');?>">Freelancers</a>
                            <ul>
                                <li><a href="<?php echo site_url('Freelancers/browse');?>">Browse Freelancers</a></li>
                            </ul>
                        </li>
                        <!--<li class="has-submenu">
                            <a href="candidates.html">My Works</a>
                            <ul>
                                <li><a href="candidates.html">My Projects</a></li>
                                <li><a href="candidates-sidebar.html">Inbox</a></li>
                                <li><a href="candidates-sidebar.html">Feedback</a></li>
                            </ul>
                        </li>-->
                        <li class="has-submenu">
                            <a href="about-us.html">About Us</a>
                            <ul>
                                <li><a href="partners.html">Partners</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div> <!-- end .container -->

            <div id="mobile-menu-container" class="container">
                <div class="login-register"></div>
                <div class="menu"></div>
            </div>
        </div> <!-- end .header-nav-bar -->

    </header> <!-- end #header -->
