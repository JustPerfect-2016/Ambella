<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default topnav" role="navigation">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="<?php echo base_url() ?>">Home</a>
                        </li>
                        <li>
                            <a href="http://http://ambella.co.za/" target="blank">Shop Now</a>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url() ?>aboutus" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About us<span class="caret"></span></a>
                            <ul id="dropdown-menu" class="dropdown-menu" style="left:0px !important;">
                                <li><a href="<?php echo base_url(); ?>testimonial" >Testimonial</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url() ?>featuredproducts" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Featured Products<span class="caret"></span></a>
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
                            <a href="<?php echo base_url() ?>branding" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Branding Guidelines<span class="caret"></span></a>
                            <ul id="dropdown-menu" class="dropdown-menu" style="left:0px !important;">
                                <li><a href="<?php echo base_url(); ?>Branding/bebossing" >Debossing</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>Branding/digitalprinting" >Digital Printing</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>Branding/digitaltransferprinting" >Digital Transfer Printing</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>Branding/embroidery" >Embroidery</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>Branding/laserprindng" >Laser Printing</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>Branding/padprinting" >Pad Printing</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>Branding/screenprinting" >Screen Printing</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>Branding/sublimation" >Sublimation</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>contactus">Contact us</a>
                        </li>

                    </ul>

                </div>

            </nav>
        </div>
    </div>
</div>
<script>

    jQuery(document).ready(function () {
        jQuery(".dropdown").hover(function () {
            jQuery(this).find('.dropdown-menu').toggle();
        });
    });
</script>