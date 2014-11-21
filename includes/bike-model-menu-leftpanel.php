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

//// Menu builder for bronto-mountain-bikes.php webpage includes jquery rollover id tags
$brontoMountainBikes_list ="<ul class='tabs'>\n
          <li class='active'><a href='bon-bronto-mountain-bike.php' name='#tab1'><img src='images/bon-logo.jpg' alt='Bon by Bronto' /></a></li>\n
          <li><a href='reverend-bronto-mountain-bike.php' name='#tab2'><img src='images/reverend-logo.jpg' alt='Reverend by Bronto' /></a></li>\n
           <li><a href='willy-bronto-mountain-bike.php' name='#tab3'><img src='images/willy-logo.jpg' alt='Willy by Bronto'/></a></li>\n
          </ul>\n";

$brontoMountainBikes1_list ="<ul class='tabs'>\n
		  <li class='active' ><a href='bon-bronto-mountain-bike.php' name='#tab1'><img src='images/bon-logo.jpg' alt='Bon by Bronto' /></a></li>\n
          <li><a href='reverend-bronto-mountain-bike.php' name='#tab2'><img src='images/reverend-logo.jpg' alt='Reverend by Bronto' /></a></li>\n
          <li><a href='willy-bronto-mountain-bike.php' name='#tab3'><img src='images/willy-logo.jpg' alt='Willy by Bronto'/></a></li>\n
		  <li><a href='paycheck-bronto-mountain-bike.php' name='#tab4'><img src='images/paycheck-logo.jpg' alt='Paycheck by Bronto'/></a></li>\n
          </ul>\n";


//// Menu builder for Bronto Mountain Bike - Bike model pages burner, willy, bon-bronto-mountain-bike.php, etc.

		
$bikeModel_list = "<ul id='nav-bike'>\n
          <li><a href='bon-bronto-mountain-bike.php'><img src='images/bon-logo.jpg' alt='Bon by Bronto' /></a></li>\n
          <li><a href='reverend-bronto-mountain-bike.php'><img src='images/reverend-logo.jpg' alt='Reverend by Bronto' /></a></li>\n
          <li><a href='willy-bronto-mountain-bike.php'><img src='images/willy-logo.jpg' alt='Willy by Bronto'/></a></li>\n
		  <li><a href='paycheck-bronto-mountain-bike.php'><img src='images/paycheck-logo.jpg' alt='Paycheck by Bronto'/></a></li>\n
          </ul>\n";

$bikeModel_list1 = "<ul id='nav-bike'>\n
          <li><a href='bon-bronto-mountain-bike.php'><img src='images/bon-logo.jpg' alt='Bon by Bronto' /></a></li>\n
          <li><a href='reverend-bronto-mountain-bike.php'><img src='images/reverend-logo.jpg' alt='Reverend by Bronto' /></a></li>\n
          <li><a href='willy-bronto-mountain-bike.php'><img src='images/willy-logo.jpg' alt='Willy by Bronto'/></a></li>\n
		  <li><a href='paycheck-bronto-mountain-bike.php'><img src='images/paycheck-logo.jpg' alt='Paycheck by Bronto'/></a></li>\n
          </ul>\n";

$forkModel_list = "<ul id='nav-bike'>\n
          <li><a href='forks-bronto-mountain-bike.php'><img src='images/udo-logo.jpg' alt='UDO by Bronto'/></a></li>\n
          </ul>\n";
		  
//// Checks to see if web page  is equal to xxxx.php.  If true, prints collection specific menu on screen.

switch ($filename) {
	//// LOAD INDEX copy
	case ($filename=='bronto-mountain-bikes.php'):
		echo "$brontoMountainBikes1_list";
	break;
	case ($filename=='bon-bronto-mountain-bike.php'):
		echo "$bikeModel_list";
	break;
	case ($filename=='reverend-bronto-mountain-bike.php'):
		echo "$bikeModel_list";
	break;
	case ($filename=='paycheck-bronto-mountain-bike.php'):
		echo "$bikeModel_list";
	break;
	case ($filename=='test-mountain-bike.php'):
		echo "$bikeModel_list";
	break;
	case ($filename=='willy-bronto-mountain-bike.php'):
		echo "$bikeModel_list";
	break;
	case ($filename=='forks-bronto-mountain-bike.php'):
		echo "$forkModel_list";
	break;
	default:
	echo "<b style='color:#ffffff;'>bike-maincontent-leftpanel.php File Error!<b>";
	
}

?>
