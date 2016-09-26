<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="col-md-3 ambella_sidebar" >
  <div class="Left" id="LayoutColumn1">
   <div class="Block CategoryList Moveable Panel" id="SideCategoryList">
      <h2>Categories</h2>
      <div class="BlockContent">
         <div class="SideCategoryListFlyout">
            <ul class="sf-menu sf-vertical sf-js-enabled">
               <li class="">
                  <a href="http://shop.ambella.co.za/corporate-gifts/" class="sf-with-ul">Corporate Gifts<span class="sf-sub-indicator"> »</span></a>
              </li>
               <li class="">
                  <a href="http://shop.ambella.co.za/mobile-technology/" class="sf-with-ul">Mobile Technology<span class="sf-sub-indicator"> »</span></a>
                 
               </li>
               <li class="">
                 <a href="http://shop.ambella.co.za/corporate-clothing/" class="sf-with-ul">Corporate Clothing<span class="sf-sub-indicator"> »</span></a>
               </li>
               <li class="">
                  <a href="http://shop.ambella.co.za/brands/" class="sf-with-ul">Brands<span class="sf-sub-indicator"> »</span></a>
                 
               </li>
               <li class="">
                  <a href="http://shop.ambella.co.za/corporate-headwear/" class="sf-with-ul">Corporate Headwear<span class="sf-sub-indicator"> »</span></a>
                
               </li>
               <li class="">
                 <a href="http://shop.ambella.co.za/themes/" class="sf-with-ul">Themes<span class="sf-sub-indicator"> »</span></a>
                 
               </li>
               <li class="">
                  <a href="http://shop.ambella.co.za/all-clearance-items/" class="sf-with-ul">All Clearance Items<span class="sf-sub-indicator"> »</span></a>
                 
               </li>
            </ul>
            <div class="afterSideCategoryList"></div>
         </div>
      </div>
   </div>
   <div class="Block Moveable Panel" id="SideShopByBrand" style="display:none;"></div>
   <div class="Block Moveable Panel" id="SideLiveChatServices" style="display:none;"></div>
   <div class="Block NewsletterSubscription Moveable Panel" id="SideNewsletterBox">
      <h2>
         Our Newsletter
      </h2>
      <div class="BlockContent">
         <form action="http://ambella.co.za/subscribe.php" method="post" id="subscribe_form" name="subscribe_form">
            <input type="hidden" name="action" value="subscribe">
            <label for="nl_first_name">Your First Name:</label>
            <input type="text" class="Textbox" id="nl_first_name" name="nl_first_name">
            <label for="nl_email">Your Email Address:</label>
            <input type="text" class="Textbox" id="nl_email" name="nl_email"><br>
            <input type="image" src="http://cdn2.bigcommerce.com/n-pktq5q/hreb6/templates/__custom/images/orange/NewsletterSubscribe.gif?t=1473773684" value="Subscribe" class="Button">
         </form>
      </div>
   </div>
   <script type="text/javascript">
      // <!--
         jQuery('#subscribe_form').submit(function($) {
         	if($('#nl_first_name').val() == '') {
         		alert('You forgot to type in your first name.');
         		$('#nl_first_name').focus();
         		return false;
         	}
         
         	if($('#nl_email').val() == '') {
         		alert('You forgot to type in your email address.');
         		$('#nl_email').focus();
         		return false;
         	}
         
         	if($('#nl_email').val().indexOf('@') == -1 || $('#nl_email').val().indexOf('.') == -1) {
         		alert('Please enter a valid email address, such as john@example.com.');
         		$('#nl_email').focus();
         		$('#nl_email').select();
         		return false;
         	}
         
         	// Set the action of the form to stop spammers
         	$('#subscribe_form').append("<input type=\"hidden\" name=\"check\" value=\"1\" \/>");
         	return true;
         
         });
         // -->
   </script>
   <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FAmbellaCorporateGifts&amp;width=210&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:210px; height:290px;" allowtransparency="true"></iframe>  
</div>
    </div>