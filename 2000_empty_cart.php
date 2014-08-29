<?
session_start();
#####################################################################################
#
# This is logic for entering the shoppping card
# It's a pretty simple solution since it just zero's all of the sessions
# However, I did not want to mess with with the userid session since we want
# the login/registration to be maintained.
#
#####################################################################################
?>


<?
 	$_SESSION[dollars_total_lounge] = '0'; 
	$_SESSION[number_of_chairs_lounge] = '0';
	$_SESSION[dollars_total_bamboo] = '0'; 
	$_SESSION[number_of_chairs_bamboo] = '0';
	$_SESSION[dollars_total_french] = '0'; 
	$_SESSION[number_of_chairs_french] = '0';
	$_SESSION[grand_total] = '0';
?>

<html>
<head>
	 	<?
			# This pulls in an inc file which in turn pulls in CSS formatting.
			include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_top_1.inc");
		?>
</head>

<body>
 	<img src="Main_Splash.jpg" alt="Jasons House of Chairs Page Image"/><br/>
	<img style="margin-left:15%" src="cart_emptied.jpg" alt="Cart Emptied Image"/><br/>	
	<form method="GET" action="2000_main.php">
 	<input type="submit" style="height: 25px; width: 125px; margin-left: 25%" value="Keep Shopping" />
	</form>	
	
	<?
		include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_bottom_1.inc");
	?>

</body>
</html>