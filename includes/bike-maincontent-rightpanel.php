<?php 
$host = $_SERVER['HTTP_HOST'];
$self = $_SERVER['PHP_SELF'];
$query = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;

/// Reads current webpages file name and turns it into a variable.
$url = !empty($query) ? "http://$host$self?$query" : "http://$host$self";

//// Basename function strips full web page address.  Only leaves file name
$filename = basename($url);

// Uncomment to show complete web page filename.... ie. http://www.agalite.com/index.php
//echo $filename; 

//// Checks to see if web page  is equal to xxxx.php.  If true, prints collection specific menu on screen.
switch ($filename) {
	//// LOAD INDEX copy
	case ($filename=='index.php' || $filename=='test.php' ):
		echo "<img src='images/_MG_5595_2.jpg' alt='The First Bronto 29er in The Jig' width='421' height='317' class='indexImg1' id='imageSlide' style='display: inline;' />
		<img src='images/IMG_0702.jpg' alt='TG Welding the First Steel Bronto Mountain Bike' width='342' height='317' class='indexImg2' id='imageSlide1' style='display: inline;' />
        	<img src='images/IMG_0139-crop.jpg' alt='Bronto Mountain Bike' class='indexImg3' id='imageSlide2' style='display: inline;' />
		<img src='images/IMG_0712.jpg' alt='The Bronto Bikes Old School Hi-Fi Stereo' width='433' height='190' class='indexImg4' id='imageSlide3' style='display: inline;' />";
	break;
	case ($filename=='bon-bronto-mountain-bike.php'):
		include 'includes-bikes/bon-content.php';
	break;
	case ($filename=='reverend-bronto-mountain-bike.php'):
		include 'includes-bikes/reverend-content.php';
	break;
	case ($filename=='paycheck-bronto-mountain-bike.php'):
		include 'includes-bikes/paycheck-content.php';
	break;
	case ($filename=='willy-bronto-mountain-bike.php'):
		include 'includes-bikes/willy-content.php';
	break;
	case ($filename=='forks-bronto-mountain-bike.php'):
		include 'includes-bikes/forks-content.php';
	break;
	default: 
		echo "<dif style='float:left; border:#ffffff 1px solid; height:300px; width:309px; margin: 20px 0px 0px 0px;'><h1>xxx</h1></div>
		<img src='images/SITE_955PIX_bikes_r2_c4.gif' alt='Weld Detail Bronto Mountain Bike 29er' width='295' height='317' class='indexImg2' />
		<br />
        	<img src='images/SITE_955PIX_bikes_r4_c2.gif' alt='Bronto Mountain Bike Bottom Bracket' width='422' height='191' class='indexImg3' />
		<img src='images/SITE_955PIX_bikes_r4_c4.gif' alt='Bronto Singlespeed Dropout' width='295' height='191' class='indexImg4' />
		<img src='images/SITE_955PIX_bikes_r6_c2.gif' alt='Bronto Mountain Bike Seat Tube Measurements' width='422' height='211' class='indexImg3' />
		<img src='images/SITE_955PIX_bikes_r6_c4.gif' alt='Bronto Mountain Bike Racing' width='295' height='211' class='indexImg4' />";
	break;	
}

?>
