<?php
session_start();

#####################################################################################
#
# This is the logic for registering a user 
# In this file I did some REGEX matching to validate that the user is entering an email address
# I also "kick back" to the 2000_registration.php file if the user does not enter an email address
# or if the format of the email address is not correct
#
#####################################################################################



	# This is if the email address is left blank
if (!($_GET['email_address']))
{
		$query_string = $_SERVER['QUERY_STRING'];
		$url="http://".$_SERVER['HTTP_HOST']."/php - intro course/2000_registration.php?".$query_string."&error=1";
		header("Location: ".$url);
		exit();		
}

# Verify that the email address is in a valid format, if so then create the session ID
else if ( !(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_GET["email_address"])) )
{ 
		$query_string = $_SERVER['QUERY_STRING'];
		$url="http://".$_SERVER['HTTP_HOST']."/php - intro course/2000_registration.php?".$query_string."&error=2";
		header("Location: ".$url);
		exit();		
} 
else {
		$_SESSION[userid] = $_GET["email_address"];  
}  

 
if (isset($_SESSION[userid])){
?>
	<html>
	<head>
	 	<?
			# This pulls in an inc file which in turn pulls in CSS formatting.
			include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_top_1.inc");
		?>
		
	</head>
	<body>
	
 	<img src="Main_Splash.jpg" alt="Jasons House of Chairs Page Image"/><br/><br/>
 	<img src="successfully_registered.jpg" style="margin-left: 15%" alt="Successfully Registered Image"/><br/><br/>
	<h4 style="margin-left: 21%">You are logged in as: <? echo $_SESSION[userid]; ?> </h4><br/>  

  	<form method="GET" action="2000_main.php">
 	<input type="submit" style="height: 25px; width: 125px; margin-left: 25%" value="Go Shopping!">
	</form>				
	<br/><br/><br/>	
<?
 	echo "* You are currently logging on from:  " . $_SERVER['HTTP_USER_AGENT'];
	echo "<br/>";
	echo "* The IP address of your computer is: " . $_SERVER['HTTP_X_FORWARDED_FOR'];
}
?>
	<?
		include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_bottom_1.inc");
	?>

	</body>
	</html>
	
 