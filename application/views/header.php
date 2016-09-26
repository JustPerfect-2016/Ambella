<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?> </title>
        <meta name="description" content="<?php echo $description ?>" />
        <!-- Latest compiled and minified CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/flexslider.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styles.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slide-show.css">
        <link rel="shortcut icon" href="http://cdn2.bigcommerce.com/n-pktq5q/hreb6/product_images/favicon.png" />
        <!-- Latest compiled and minified Jquery library -->
        <script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
        <script type="text/javascript" charset="utf-8">
            $(window).load(function () {
                $('.slide-show').flexslider({
                    slideshowSpeed: $('.slide-show').attr('data-swap-frequency') * 1000,
                    animation: "slide",
                    pauseOnHover: true,
                    controlNav: true,
                    directionNav: true
                });
            });
        </script>
    </head>

     <body>
     <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P5VTB5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P5VTB5');</script>
<!-- End Google Tag Manager -->
        <div class="wrapper">
            <div class="container ambella_iframe" >
                <div class="row">
                    <div class="col-md-12">
                        <iframe src="http://store-hreb6.mybigcommerce.com/product_images/banners/index.html" width="100%" height="120" frameborder="0" scrolling="no" allowtransparency="true" ></iframe>
                    </div>

                </div>
            </div>
            <?php require_once './application/views/common/headerTop.php'; ?>
            <?php include './application/views/common/ambellaMenu.php'; ?>
            <div class="AmbellahomeSlider">

                <?php
                $home = strtolower("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                $home_condition = strtolower(base_url());
                if ($home === $home_condition) {
                    include './application/views/common/homeSlider.php';
                }
                ?>
            </div>
            <div class="container">
                <div class="row">
                    <?php include './application/views/common/ambellaSideBar.php'; ?>
                    <div class="col-md-9">
