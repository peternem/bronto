<?php

//page3.php
session_start();

//echo $_SESSION['formName'];
//echo $_SESSION['name'];
//echo $_SESSION['email'];


?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'includes/metaTag_KeyWords.php' ?>
<?php include 'includes/metaTag_description.php' ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex,nofollow" />
<title>Bronto MTB Co. - Handmade Steel Mountain Bikes - Newsletter Signup - Submitted</title>
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
      <div id="divleft"><a href="index.php"><img src="images/BRONTO_Logo_main.gif" alt="Bronto Bikes" /></a>
      </div>
      <div id="divright">
        <div id="mainConentDivrightCopy">
	<?php	
		 if(isset($_SESSION['name']) && $_SESSION['email']){
			echo "<h1>The Bronto Newsletter</h1>";
			print "<h2>Your mail was sent successfully submitted!</h2>";
			echo "<p>You have just subscribed to the quarterly Bronto Newsletter. The following information was used to subscribe to the Quarterly Bronto Newsletter:</p>";
			echo "<p><strong>Name:</strong> <i>".$_SESSION['name']."</i></p>";
			echo "<p><strong>Email Address:</strong> <i>".$_SESSION['email']."</i></p>";
		 } else {
			echo "<h1>The Bronto Newsletter - ERROR</h1>";
			print "<h2>Your form info was not submitted!</h2>";
		}
	?>

          <br />
          <br />
         <h2>Contact Bronto - General Questions and Comments:</h2>
          <p><a href="mailto:bronto@brontobikes.com?subject=General%20Comments%20or%20Questions"><img src="images/contactBronto_btn.png" alt="sales@brontobikes.com" /></a></p>
         </div>
        <img src="images/IMG_0750.jpg" alt='Weld Detail Bronto Mountain Bike 29er' width='240' height='240' class='craftImg1' />
        <p class="caption1">Todd the Jedi Master Welder</p>
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
<?php session_destroy(); ?>
</body>
</html>
