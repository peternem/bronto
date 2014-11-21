<div id='rss'>
<h1>Latest Bronto Blog Post</h1>
<div id='rss'>
<ul>
<?php

/// Limit the number of WordPress Blog Entries displayed on webpage
$limit = 6;

///* $rss_url to the location of your RSS WorpPress feed */WP RSS Feed URL
$rss_url = 'http://brontobikes.com/blog/blog.php/?feed=rss2';

if (!$rss_data = @file_get_contents($rss_url)) {
	echo "<ul>\n";
	echo "<li>The Bronto Blog Feed is experiencing some technical issues.  Please click the link below to view the latest blog posts.</li>\n";
	echo "<li><a href=\"http://brontobikes.com/blog/blog.php/\" target=\"_self\">Visit &raquo;</a></li>\n";
	echo "</ul>\n";
} else {

	$rss_xml = SimpleXML_Load_String($rss_data);

	$i = 0;
	foreach ($rss_xml->channel->item as $item) {
		
		// Filter Loop limits the number of WordPress Blog Entries displayed on webpage
		if (++$i > $limit) {
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

		///* HTML FORMAT LAYOUT */
		///*The next set of lines change the format of certain elements, the first one
		///uses regex to find and replace the URL’s and make them actively clickable. 
		///Note the use of nofollow there too. The second line formats other users by 
		///looking for their @username names and changing the style of it.*/
		
		echo "<li><a href=\"". $item_link ."\" rel=\"nofollow\">". $item_title ."</a></li>\n";
	}
}
?>
</ul>
</div>

</div>
