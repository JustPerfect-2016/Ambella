<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="Content Wide WideWithLeft" id="LayoutColumn2">
    <div class="Block Breadcrumb Moveable Panel" id="PageBreadcrumb">
        <ul>
            <li><a href="<?php echo base_url() ?>">Home</a></li>
            <li>Contact us</li>
        </ul>
    </div>
    <div class="Block Moveable Panel" id="PageContent">
        <h1>Contact us</h1>
        <div class="BlockContent">
            <p>If you are ready to make your mark with effective promotional merchandise, give us a call or send us an email using the details below and we will get the ball rolling.&nbsp;</p>

            <p><strong>Postal Address:</strong></p>
            <p>Postnet Suite No 79<br>Private bag X01<br>Farramere<br>Benoni 1518</p>

            <p data-ctm-watch-id="3" data-ctm-tracked="1">Office: 087 550 2703<br>Fax: 086 655 0214<br>Email: info@ambella.co.za</p>

            <p><strong>Physical Address:</strong></p>
            <p>8 Osborne Lane<br>Bedfordview<br>Johannesburg<br>South Africa</p>

            <p><span style="text-decoration: underline;"><span style="font-size: medium;"><strong>Contact Form</strong></span></span></p>
            <p><br></p>
            <p class="ErrorMessage Message" style="display: none">
                The characters you copied from the image are incorrect. Please try again.
            </p>
            <form action="" method="post" id="ContactForm" class="">
                <div class="FormContainer HorizontalFormContainer">
                    <dl>
                        <dt style="display: ">&nbsp;&nbsp; Full Name:</dt>
                        <dd style="display: "><input type="text" name="contact_fullname" id="contact_fullname" class="Textbox Field200" value="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;"></dd>
                        <dt><span class="Required">*</span>&nbsp; Email Address:</dt>
                        <dd><input type="text" name="contact_email" id="contact_email" class="Textbox Field200" value=""></dd>
                        <dt style="display: ">&nbsp;&nbsp; Company Name:</dt>
                        <dd style="display: "><input type="text" name="contact_companyname" id="contact_companyname" class="Textbox Field200" value=""></dd>
                        <dt style="display: ">&nbsp;&nbsp; Phone Number:</dt>
                        <dd style="display: "><input type="text" name="contact_phone" id="contact_phone" class="Textbox Field200" value=""></dd>
                        <dt><span class="Required">*</span>&nbsp; Details:</dt>
                        <dd>
                            <textarea name="contact_question" id="contact_question" class="Field300" rows="5" cols="50" style="width:100%"></textarea>
                            <div id="SearchResults"></div>
                        </dd>
                        <dt style="display: "><span class="Required">*</span>&nbsp; Captcha Check:</dt>
                        <dd style="display: ">
                            <p class="Warning">Please copy the characters from the image into the text field below. Doing this helps us prevent automated submissions.</p>
                            <img src="http://ambella.co.za/captcha.php?7555" alt="img"><br>
                            <input style="margin-top:5px; width:105px" type="text" name="captcha" id="captcha" class="Textbox">
                        </dd>
                    </dl>
                    <p class="Submit">
                        <input type="submit" value="Send Form" class="ContactButton">
                    </p>
                </div>
            </form>
            <script type="text/javascript">

                $('#ContactForm').submit(function () {
                    var contact_fullname = $('#contact_fullname').val();
                    var contact_phone = $('#contact_email').val();
                    var email_address = $('#contact_phone').val();
                    var contact_companyname = $('#contact_companyname').val();
                    var contact_question = $('#contact_question').val();

                    var dataString = 'contact_fullname=' + contact_fullname + '&contact_phone=' + contact_phone + '&email_address=' + email_address + '&contact_companyname=' + contact_companyname + '&contact_question=' + contact_question;

                    if (contact_fullname == '' || contact_phone == '' || email_address == '' || contact_companyname == '' || contact_question == '') {

                        alert("Please complete all the fileds!");

                    } else {
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url() ?>assets/scripts/process.php",
                            data: dataString,
                            success: function () {
                                window.location = "<?php echo base_url() ?>thankyou";
                            }
                        });
                        return false;

                    }

                });

            </script>
        </div>
    </div>
    <div class="Block Moveable Panel" id="PageComments" style="display:none;"></div>
</div>
