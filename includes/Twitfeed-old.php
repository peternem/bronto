<?php echo "<h1>Twit-O-Rama</h1>\n";?>
<?php 
echo"<div id='twitfeed'>"; ?>

<?php
/**
 * @name subscriber stats
 * @author Philip Beel
 * @description Display your feedburner and twitter stats anywhere on your page
**/


/* function twitter_stats($id) {
 if ( !$id ) { echo('[No Feed]'); } //user must pass in their username
 $xmltwitter = simplexml_load_file("http://twitter.com/statuses/user_timeline/".$id.".xml");
 if($xmltwitter) {    //check we got back a response
 echo($xmltwitter->status->user->followers_count);
 } else {
 echo("0"); //else fall back on a static value
 }
 }*/

?>

<?php include('twitter/birdnapper.php'); ?>
<?php echo birdnapping("BrontoBikes",5); ?> 

<!--<ul>
 <li>Bronto Twit-O-Rama Followers&nbsp;: <a href="http://twitter.com/brontobikes" title="twitter"><?php //twitter_stats('109218338'); ?></a></li>
</ul>-->
<?php echo"</div>"; ?>