<?php 
$host = $_SERVER['HTTP_HOST'];
$self = $_SERVER['PHP_SELF'];
$query = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;

/// Reads current webpages file name and turns it into a variable.
$url = !empty($query) ? "http://$host$self?$query" : "http://$host$self";

//// Basename function strips full web page address.  Only leaves file name
//$filename = basename($url);
$filename= $host;
// Uncomment to show complete web page filename.... ie. http://www.agalite.com/index.php
//echo $filename; 

//// Checks to see if web page  is equal to xxxx.php.  If true, prints collection specific menu on screen.
switch ($filename) {
	//// LOAD INDEX copy
	case ($filename=='www.blog.brontobikes.com'  || $filename=='blog.brontobikes.com'):
		echo "<span style='color:#fff;'>GA - GoogleAnalytics-Filter.php Off</span>";
	break;
	case ($filename=='www.brontobikes.com' || $filename=='brontobikes.com'):
		include 'includes/GoogleAnalytics.php';
	break;
	default: 
		echo "<span style='color:#fff;'>GA - GoogleAnalytics-Filter.php Error</span>";
	break;	
}

?>
