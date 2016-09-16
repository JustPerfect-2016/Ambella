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
        <div class="wrapper">
            <div class="container ambella_iframe" >
                <div class="row">
                    <div class="col-md-12">
                        <iframe src="http://ambella.co.za/product_images/banners/index.html" width="100%" height="120" frameborder="0" scrolling="no" allowtransparency="true" ></iframe>
                    </div>

                </div>
            </div>
            <?php include_once 'common/headerTop.php'; ?>
            <?php include_once 'common/ambellaMenu.php'; ?>
            <?php
            $home = strtolower ("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
            $home_condition = strtolower (base_url());
            if ($home === $home_condition) {
                include_once 'common/homeslider.php';
            }
            ?>
            <div class="container">
                <div class="row">
<?php include_once 'common/ambellaSideBar.php'; ?>
                    <div class="col-md-9">
