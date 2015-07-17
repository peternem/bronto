<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'includes/metaTag_KeyWords.php' ?>
<?php include 'includes/metaTag_description.php' ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bronto MTB Co. - Handmade Steel Mountain Bikes - Contact Form</title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href="css/Bronto-Style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.js" type="text/javascript"></script>
<script src="js/jquery-rollover.js" type="text/javascript"></script>
<script src="js/jquery-flickr-feed.js" type="text/javascript"></script>
<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/ie6.css" />
<![endif]-->
<!--[if gte IE 7]>
	<link rel="stylesheet" type="text/css" href="css/ie7-and-up.css" />
<![endif]-->
</head>
<body>
<div id="wrapper">
  <div id="header_container">
    <?php include 'includes/header-navmenu-bronto.php' ?>
  </div>
  <div id="mainContent_container">
    <div id="mainContent">
      <div id="divleft"><a href="index.php"><img src="images/BRONTO_Logo_main.gif" alt="Bronto Bikes" /></a></div>
      <div id="divright">
        <div id="mainConentDivrightCopy">
          <h1>Contact Bronto - General Questions, Tech Questions, Order Inquiries and Comments:</h1>
          <p>Feel free to give us a holler any time.  Regarding questions on sizing, spec, ordering, or anything related to getting you on a Bronto. Or, just to shoot the breeze.  We can also recommend the absolute best trail riding in Central Oregon.  So don't be shy.</p>
          <br>
          <script type="text/javascript">
                    function validate(thisForm) {
                        if (thisForm.senderName.value == "") {
                            window.alert("Please enter your first and last name!");
                            thisForm.senderName.focus();
                            return false;
                        }
                        if (thisForm.senderEmail.value == "") {
                            window.alert("Please enter your email address!");
                            thisForm.senderEmail.focus();
                            return false;
                        } else {
                            var emailexp = /.*\@.*\..*/;
                            if (!emailexp.test(thisForm.senderEmail.value)) {
                                window.alert("Invalid email address!\n\nPlease enter your correct email address!\n\nExample yourname@example.com");
                                thisForm.senderEmail.focus();
                                return false;
                            }
                        }
                        if (thisForm.senderComments.value == "") {
                            window.alert("Please enter a comment!");
                            thisForm.senderComments.focus();
                            return false;
                        }
                        return true;
                    }

                </script>  
                <style>
                .form-group {
                    display: block;
                    margin: 20px 0;
                    overflow: auto;
                }
                
                .form-group label {
                    display: block;
                    margin-bottom: 5px;
                }
                .form-group .form-control {
                    width: 300px;
                    padding: 10px 5px
                }
                </style> 
                <form action="contact-submitted.php"  method="POST" onsubmit="return validate(this);">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="senderName" class="form-control" name="senderName">
                    </div>
                    <div class="form-group">
                        <label for="senderEmail">Email</label>
                        <input type="text" class="form-control" id="senderEmail" name="senderEmail">
                    </div>
                    <div class="form-group">
                        <label for=senderComments">Message</label>
                        <textarea id="senderComments" class="form-control" rows='10' name="senderComments"></textarea>
                    </div>
                    <div class="form-group">
                    <script type="text/javascript">
                     var RecaptchaOptions = {
                        theme : 'white'
                     };
                     </script>
                <?php
                
                    require_once('recaptchalib.php' );
                    $publickey = "6LdNHQcTAAAAAABAEGegN-ezcwgDLa4ACTXM2g0S"; // you got this from the signup page
                    echo recaptcha_get_html($publickey);
                ?></div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-default">Send</button>
                    <!-- <input type="submit" value="Send" name="submit">  -->
                </div>
                </form>                         
        </div>
        <div class="indexImg2aa" style="width:295px;"><img src="images/IMG_0693.jpg" alt='The Bronto Mountain Mascot' width="295" height="295"   />
          <p class="caption">The Bronto Dog Wants to Chat.</p>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <div id="footer_container">
    <div id="footer">
      <div id="footer-left">
        <?php include 'includes/Twitfeed.php' ?>
      </div>
      <div id="footer-mid">
        <?php include 'includes/flickrFeed.php' ?>
      </div>
      <div id="footer-right">
        <?php include 'includes/rssfeed.php' ?>
        <?php include 'includes/faceBook.php' ?>
        <?php include 'includes/youTube.php' ?>
        <?php include 'includes/brontoNewsletter.php' ?>
      </div>
      <div class="clearfix2"></div>
    </div>
    <?php include 'includes/footnote_site.php' ?>
  </div>
</div>
<?php //include 'includes/GoogleAnalytics.php' ?>
<?php include 'includes/GoogleAnalytics-Filter.php' ?>
</body>
</html>
