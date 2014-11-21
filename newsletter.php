<?php

//page1.php

session_start();

$_SESSION['formName'] = 'Newsletter';

?> 
<?php session_destroy(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'includes/metaTag_KeyWords.php' ?>
<?php include 'includes/metaTag_description.php' ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex,nofollow" />
<title>Bronto MTB Co. - Handmade Steel Mountain Bikes - Newsletter Signup</title>
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
<script type="text/javascript">
function validate(thisForm){		
	if (thisForm.name.value == "" ){
		window.alert("Please enter your first name!");
		thisForm.name.focus();
		return false;
	}	
	if (thisForm.emailAddress.value == "" ){
		 window.alert("Please enter your email address!");
		thisForm.email.focus();
		return false;
	}else {
		var emailexp = /.*\@.*\..*/;
		if (!emailexp.test(thisForm.emailAddress.value)) {
			window.alert("Invalid email address!\n\nPlease enter your correct email address!\n\nExample yourname@example.com");
			thisForm.email.focus();
			return false;
		}   
	}
	return true;	
}
function ClearForm(){
    document.MyForm.reset();
}
</script>
</head>
<body>
<div id="wrapper">
  <div id="header_container">
    <?php include 'includes/header-navmenu-bronto.php' ?>
  </div>
  <div id="mainContent_container">
    <div id="mainContent">
      <div id="divleft"><a href="index.php"><img src="images/BRONTO_Logo_main.gif" alt="Bronto Bikes" /></a>
      </div>
      <div id="divright">
        <div id="mainConentDivrightCopy">
          <h1>The Bronto Newsletter Signup</h1>
          <p>Want to signup for the Bronto Newsletter? Please enter your name and email address below to sign up for our newsletter mailing list.</p>
          <?php
$con = mysql_connect("mysql.brontobikes.com","jacklin","jacklin");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// some code
?>
          <form method="GET" name="MyForm" action="newsletter-email.php" onSubmit="return validate(this);">
            <table>
              <tr>
                <td><p>Name:</p></td>
                <td><input type="text" name="name" size=40></td>
              </tr>
              <tr>
                <td><p>Email Address:</p></td>
                <td><input type="text" name="email" size=40></td>
              </tr>
            </table>
            <br>
            <input type="hidden" id="action" name="action" value="submitform" />
            <input type="submit" value="Submit" name="submit">
          </form>
          <br />
          <br />
         <h2>Contact Bronto - General Questions and Comments:</h2>
          <p><a href="mailto:bronto@brontobikes.com?subject=General%20Comments%20or%20Questions"><img src="images/contactBronto_btn.png" alt="sales@brontobikes.com" /></a></p>
        </div>
        <img src="images/IMG_0750.jpg" alt='Weld Detail Bronto Mountain Bike 29er' width='240' height='240' class='craftImg1' />
        <p class="caption1">Todd the Jedi Master Welder</p>
        <img src='images/IMG_0117-Bronto-Bikes-DA.jpg' alt='Bronto Mountain Biker Asking Question' width='240' height='240' class='craftImg2' />
        <p class="caption1">David the Marketing and Sales Guy</p>
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
