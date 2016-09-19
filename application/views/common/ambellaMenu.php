<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<nav class="navbar navbar-default topnav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="">
                    <a href="<?php echo base_url() ?>">Home</a>
                </li>
                <li>
                    <a href="http://ambella.co.za/" target="blank">Shop Now</a>
                </li>
                <li class="dropdown">
                    <a href="<?php echo base_url() ?>aboutus" onclick="location.href='<?php echo base_url() ?>aboutus';" class="dropdown-toggle about" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About us<span class="caret"></span></a>
                    <ul id="dropdown-menu" class="dropdown-menu" style="left:0px !important;">
                        <li><a href="<?php echo base_url(); ?>testimonial" >Testimonial</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="<?php echo base_url() ?>featuredproducts" onclick="location.href='<?php echo base_url() ?>featuredproducts';" class="dropdown-toggle featured" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Featured Products<span class="caret"></span></a>
                    <ul id="dropdown-menu" class="dropdown-menu" style="left:0px !important;">
                        <li><a href="<?php echo base_url(); ?>featuredproducts/promotionalcapsandheadwear" >Promotional caps and Headwear</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>featuredproducts/corporateclothing" >Corporate clothing</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>featuredproducts/corporatehampers" >Corporate hampers</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>featuredproducts/corporategifts" >Corporate gifts</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>featuredproducts/corporatewear" >Corporate wear</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>featuredproducts/diaries" >Diaries</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>featuredproducts/koozies" >Koozies</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>featuredproducts/overallwordkwear" >Overall work wear</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>featuredproducts/powerbanks" >Power Banks</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>featuredproducts/promotionalclothing" >Promotional clothing</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>featuredproducts/promotionalgifts" >Promotional gifts</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>featuredproducts/remoteselfiestick" >Remote selfie stick</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>featuredproducts/workwear" >Work wear</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>ourclients">Our Clients</a>
                </li>
                <li>
                    <a href="http://ambella.blog.beem.co.za/" target="blank">Blog</a>
                </li>
                <li class="dropdown">
                    <a href="<?php echo base_url() ?>branding" onclick="location.href='<?php echo base_url() ?>branding';" class="dropdown-toggle branding" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Branding Guidelines<span class="caret"></span></a>
                    <ul id="dropdown-menu" class="dropdown-menu" style="left:0px !important;">
                        <li><a href="<?php echo base_url(); ?>branding/debossing" >Debossing</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>branding/digitalprinting" >Digital Printing</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>branding/digitaltransferprinting" >Digital Transfer Printing</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>branding/embroidery" >Embroidery</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>branding/laserprindng" >Laser Printing</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>branding/padprinting" >Pad Printing</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>branding/screenprinting" >Screen Printing</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>branding/sublimation" >Sublimation</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>branding/whybrandedgifts" >Why branded gifts</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>contactus">Contact us</a>
                </li>

            </ul>

        </div>
    </div>
</nav>


<script>

    jQuery(document).ready(function () {
        jQuery(".dropdown").hover(function () {
            jQuery(this).find('.dropdown-menu').toggle();
        });

        jQuery("nav").on("click", function () {

            //jQuery(".nav").toggle();

        });
    });
</script>