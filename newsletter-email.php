<?php

//page2.php
session_start();

echo $_SESSION['formName'];
echo $_SESSION['name'] = $_GET['name'];
echo $_SESSION['email'] = $_GET['email'];


$hostname="mysql.brontobikes.com";
$username="jacklin";
$password="jacklin";
$dbname="bronto_marketing";
$usertable="contacts";


$con = mysql_connect($hostname, $username, $password)or die("cannot connect");

if (!$con){
	die('Could not connect: ' . mysql_error());
}

mysql_select_db($dbname, $con);

if(isset($_GET['action']) && $_GET['action'] == 'submitform'){
//if(isset($_GET['submit'])){
	$name = $_GET['name'];
	$email = $_GET['email'];

	$sql = "INSERT INTO contacts VALUES (NULL, '{$name}','{$email}')";
	if (!mysql_query($sql,$con)){
		die('Error: ' . mysql_error());
	}
	header('Location:newsletter-email-submitted.php');
	exit();
	
}  else {
	print "<h1>The Bronto Newsletter Signup - Error</h1>";
	print "<p>We encountered an error sending your mail</p>";
}

mysql_close($con)
?> 
<?php session_destroy(); ?>
