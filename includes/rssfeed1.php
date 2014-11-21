<?php echo"<div id='rss'>"; ?>
<h1>Latest Bronto Blog Post</h1>
<ul>
<?PHP
//define ('WP_USE_THEMES', false);
require('blog/wp-load.php');
query_posts ('showposts=6');
?>
<?PHP
while (have_posts()) : the_post();?>
<li><a href="<?PHP the_permalink() ?>"> <?PHP the_title(); ?></a></li>
<?PHP echo "<p>";//the_excerpt(); echo "<p>"; ?>
<?PHP //echo "<p>POSTED by: ";//the_author(); ?><?PHP //echo "on"; //the_time('jS F Y'); echo "</p>"; ?>

<?PHP endwhile; ?>
</ul>
<?php echo"</div>"; ?>


