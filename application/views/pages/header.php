<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $company_details->fullname ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>apple-touch-icon.png">
    <link rel="stylesheet" href="<?php  echo base_url() ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>css/normalize.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>css/transitions.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>css/prettyPhoto.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>css/owl.theme.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>css/main.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>css/color.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>css/responsive.css">
    <script src="<?php echo base_url() ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="icon" type="image/png" href="<?php echo  base_url()?>images/<?php echo $company_details->logo ?>"/>
</head>
<body class="tg-home tg-homeversion">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
        Wrapper Start
*************************************-->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <!--************************************
            Header Start
    *************************************-->
    <header id="tg-header" class="tg-header tg-haslayout">
        <div class="tg-topbar tg-bglight tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="tg-topcontactinfo">
                            <li>
                                <i class="fa fa-phone"></i>
                                <span><a href="tel:<?php echo $company_details->cell ?>"><?php echo $company_details->cell ?></a></span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <span><a href="mailto:<?php echo $company_details->email ?>"><?php echo $company_details->email ?></a></span>
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <address><?php echo $company_details->location ?></address>
                            </li>
                        </ul>
                        <nav class="tg-addnav tg-themecolor">
                            <ul>
                                <li><a href="#">careers</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">terms &amp; contions</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-navigationarea">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <strong class="tg-logo">
                            <a href="<?php echo base_url() ?>"><img src="images/<?php echo $company_details->logo  ?>" alt="<?php echo $company_details->shortname ?>"></a>
                        </strong>
                        <nav id="tg-nav" class="tg-nav">
                            <div class="navbar-header">
                                <button type="button" class="tg-btnnav navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                <ul>
                                    <li class="<?php if($location=="home"){ echo "tg-active";} ?> tg-hasdropdown">
                                        <a href="<?php  echo base_url() ?>">Home</a>
                                    </li>
                                    <li class="<?php if($location=="about_us"){ echo "tg-active";} ?> menu-item-has-mega-menu">
                                        <a href="<?php echo base_url()?>aboutus">About</a>
                                    </li>
                                    <li class="<?php if($location=="services"){ echo "tg-active";} ?> menu-item-has-mega-menu">
                                        <a href="<?php echo base_url()?>services">Services</a>
                                    </li>
<!--                                    <li>-->
<!--                                        <a href="projects">Projects</a>-->
<!--                                    </li>-->
                                    <li class="<?php if($location=="team"){ echo "tg-active";} ?> menu-item-has-mega-menu">
                                        <a href="<?php echo base_url()?>team">team</a>
                                    </li>
                                    <li class="<?php if($location=="news"){ echo "tg-active";} ?> menu-item-has-mega-menu">
                                        <a href="<?php echo base_url()?>news">news</a>
                                    </li>
                                    <li class="<?php if($location=="about_us"){ echo "tg-active";} ?> menu-item-has-mega-menu">
                                        <a href="<?php echo base_url()?>aboutus"><i class="fa fa-navicon"></i><i>Contact Us</i></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->
