<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<h1>Latest Bronto Blog Post</h1>
<div id='rss'>
<ul>
<?php
/// Twitter User Name  BrontoBikes or 109218338 work
//$username = "BrontoBikes";

/// Limit the number of Twitter Tweats displayed on webpage
//$limit = 6;

///* $rss_url to the location of your RSS twitter feed */Twitter RSS Feed URL
$rss_url = 'http://brontobikes.com/blog/blog.php/?feed=rss2&count=5';
//$rss_url = 'http://twitter.com/statuses/user_timeline.rss?screen_name=BrontoBikes&count=5';
//$rss_url = "http://twitter.com/statuses/user_timeline/109218338.rss"


if (!$rss_data = @file_get_contents($rss_url)) {
	echo "<ul>\n";
	echo "<li>The Bronto Blog Feed is experiencing some technical issues.  Please click the link below to view the latest blog posts.</li>\n";
	echo "<li><a href=\"http://brontobikes.com/blog/blog.php/\" target=\"_self\">Visit &raquo;</a></li>\n";
	echo "</ul>\n";
} else {

	$rss_xml = SimpleXML_Load_String($rss_data);
	
	$channel_title = $rss_xml->channel->title;
	$channel_link = $rss_xml->channel->link;
	
	
	
/*$i = 0;
foreach ($sxml->status as $status) {
    if (++$i > 5) {
        // stop after 5 loops
        break;
    }
    // the rest is identical
}
*/
	$i = 0;
	foreach ($rss_xml->channel->item as $item) {
	
		if (++$i > 5) {
			// stop after 5 loops
			break;
    		}
		///* $ns_dc pulls tweat soucre data from <twitter:source> xml tag */
		//$ns_dc = $item->children('http://api.twitter.com');
		
		$pub_date = $item->pubDate;
		$item_title = $item->title;
		$item_link = $item->link;
		$item_description = $item->description;
		//$tweet = explode(": ", $item_title); 
		
		///* links in Twitter Tweats */
		//for ($i=2; $i<=substr_count($item_title, ": "); $i++) $tweet[1] .= ": " .$tweet[$i]."";      
		
		///* format Twitter Tweat */
		///* This line will split the $item_title this is needed so that we can
		/// split the title into two parts. Part 1 is the username and part 2 
		/// is the actual message. */
		
		//$tweetmessage = preg_replace("/(http:\/\/[^\s]+)/", "<a href=\"$1\" rel=\"nofollow\" class='xyz'>$1</a>", $tweet[1]);
		//$tweetmessage = preg_replace("/(@[^\s]+)/", "<span class=\"twit_at\">$1</span>", $tweetmessage);
	       
		///* Clean up Twitter Tweat time stamp */ 
		//$pub_date2 =  date("l, M j \- g:ia",strtotime($pub_date = $item->pubDate));
		
		///* HTML FORMAT LAYOUT */
		///*The next set of lines change the format of certain elements, the first one
		///uses regex to find and replace the URL’s and make them actively clickable. 
		///Note the use of nofollow there too. The second line formats other users by 
		///looking for their @username names and changing the style of it.*/
		//echo "<li>\n";
		//echo "<ul class='twitContent'>\n";
		echo "<li><a href=\"". $item_link ."\" rel=\"nofollow\">". $item_title ."</a></li>\n";
		//echo "<br/><span class=\"timestamp\">".$pub_date." </span>";
		//echo "<li>".$item_description."</li>\n";
		//echo "<li><a href=\"". $item_link ."\" rel=\"nofollow\"><span class=\"pubDate\">".$pub_date2."</span></a><span class=\"source\" >via ".$ns_dc."</span></li>\n";
		//echo "</ul>\n";
		//echo "</li>";  
		//echo "<br/><a href=\"". $item_link ."\" rel=\"nofollow\">View in Twitter</a></li>\n";   
	}
}
?>
</ul>
</div>
</body>
</html>


