<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carbontales</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="vishalkushwah" />


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet"> -->
    
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/icomoon.css">
    
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/flexslider.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/style.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/single_styles.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/single_responsive.css">

    <link rel="stylesheet" type="text/css"
        href="<?= base_url() ?>assets/frontend/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url() ?>assets/frontend/plugins/OwlCarousel2-2.2.1/animate.css">

    <script src="<?= base_url() ?>assets/frontend/js/modernizr-2.6.2.min.js"></script>
    <!-- <script src="<?= base_url() ?>assets/frontend/js/jquery.min.js"></script> -->
    
    <link type="text/css" href="<?= base_url() ?>assets/frontend/css/fontawesome/css/all.css" rel="stylesheet">
    <!--load all styles -->

    <style type="text/css">
        .fh5co-nav ul li a{
            padding: 0px 10px 0px 10px;
        }
    </style>
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/zoom/xzoom.css">
      <link type="text/css" rel="stylesheet" media="all" href="<?= base_url() ?>assets/frontend/css/fancybox/source/jquery.fancybox.css" />
      <link type="text/css" rel="stylesheet" media="all" href="<?= base_url() ?>assets/frontend/css/magnific-popup/css/magnific-popup.css" /> -->
    
</head>
<!-- Whatsapp button -->
<!--Jquery-->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
<!--Floating WhatsApp css-->
<link rel="stylesheet" href="<?= base_url() ?>assets/whatsapp/whatsapp.css">


<!-- Whatsapp button -->
<style type="text/css">
#list-tab a:hover {
    background: #ff8b00;
    color: white;
}
.trademark{
    display: inline;
    color: white;
    vertical-align: top;
}
</style>

<body>

    <!--Div where the WhatsApp will be rendered-->
    <div id="WAButton" style="position: fixed; z-index: 100"></div>
    <!--Div where the WhatsApp will be rendered-->
    <div class="fh5co-loader"></div>

    <div id="page">
        <nav class="fh5co-nav back-color product_container" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1 col-xs-1 col-md-1 logo-style">
                        <a href="<?= base_url() ?>">
                            <img class="logo-image-dimension"
                                src="<?= base_url() ?>assets/frontend/images/logo/clogo.svg" />                            
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-10 col-md-4 text-center-mobile">
                      <a href="<?= base_url() ?>">
                      <p class="logo-text">CARBONTALES</p><p class="trademark">®</p>
                      </a>
                    </div>
                    <div class="col-sm-7 col-xs-9 col-md-7 text-center menu-1 nav-link-text">
                        <ul>
                            <li class="nav-item <?= $page == 'home' ? 'active' : '' ?>"><a href="<?= base_url() ?>"
                                    class="nav-link nav-text pl-0" style="font-size: 14px;">Home</a></li>
                            <li class="nav-item <?= $page == 'product' ? 'active' : '' ?>"><a
                                    href="<?php echo site_url('product') ?>" class="nav-link nav-text"
                                    style="font-size: 14px;">Shop</a></li>
                            <!-- <li class="nav-item <?= $page == 'makeyourown' ? 'active' : '' ?>"><a
                                    href="<?php echo site_url('make-your-own') ?>" class="nav-link nav-text"
                                    style="font-size: 14px;">Make Your Own Combo</a></li> -->
                            <!--<li class="nav-item <?= $page == 'about' ? 'active' : '' ?>"><a-->
                            <!--        href="<?php echo site_url('about') ?>" class="nav-link nav-text"-->
                            <!--        style="font-size: 14px;">About Us</a></li>-->
                            <!-- <li class="nav-item <?= $page == 'faq' ? 'active' : '' ?>"><a
                                    href="<?php echo site_url('faq') ?>" class="nav-link nav-text"
                                    style="font-size: 14px;">FAQ's</a></li> -->
                            <!--<li class="nav-item <?= $page == 'contact' ? 'active' : '' ?>"><a-->
                            <!--        href="<?php echo site_url('contact') ?>" class="nav-link"-->
                            <!--        style="font-size: 14px;">Contact Us</a></li>-->
                            <li class="nav-item shopping-cart"><a href="<?php echo site_url('cart') ?>"
                                    class="nav-link cart"><span><small><?= $this->cart->total_items() ?></small><i
                                            class="icon-shopping-cart"></i></span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
        <!-- END nav -->