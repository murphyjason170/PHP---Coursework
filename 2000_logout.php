<?
# This is the delete cart logic
session_start();
session_unset();
session_destroy();

#####################################################################################
#
# This logic just whammies all of the session IDs. 
# If the user registers again then the cart will be empty and a clean slate overall
#
#####################################################################################

?>
<html>
<head>
	 	<?
			# This pulls in an inc file which in turn pulls in CSS formatting.
			include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_top_1.inc");
		?>
</head>
<body>

	<br/><br/>
	<img src="Main_Splash.jpg" alt="Jasons House of Chairs Page Image"/><br/><br/>
	<img style="margin-left:15%" src="goodbye.jpg" alt="Goodbye Image"/><br/>

	<h3 style="margin-left: 24%">Thank you! Please visit again!</h3>

	<form method="GET" action="2000_main.php">
 		<input type="submit" style="margin-left: 27%; height: 25px; width: 125px" value="Main Page" />
	</form>	

	<?
		include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_bottom_1.inc");
	?>

</body>
</html>