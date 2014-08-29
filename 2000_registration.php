<html>
<?
session_start();
#####################################################################################
#
# This is the logic for registering a user
# I had some fun with the error codes and displayed hopefully helpful messages
# in the event that the user did not enter anything (error 1) or if the format 
# was not correct (error 2)
#
#####################################################################################

 
if ( $_GET['error'] == "1") {
	$error_code = 1;
}
if ( $_GET['error'] == "2") {
	$error_code = 2;
}


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
 	<img src="register.jpg" style="margin-left: 15%" alt="Register Image"/><br/><br/>

<?	
	if ($error_code) {
?>
		<h3 style='margin-left: 25% ; color:green'>Please help us with the following:</h3>
<?
	}
	
	if (($error_code == '1') && !($_GET['email_address'])) 
	{
?>
		<h3 style='margin-left: 25% ; color:red'>Please enter an email address</h3>
<?
	}
	
	if (($error_code == '2')) 
	{
?>
		<h3 style='margin-left: 25%; color:orange'>Please enter an email address in a valid format</h3>
<?
	}
?>	

	<h3 style="margin-left: 25%">Enter a valid email address</h3>
	<form method="GET" action="2000_registration_completion.php">
	<input type="text" name="email_address" value="<? echo $_GET['email_address']; ?>" style="margin-left: 25%"><br/>
 	<input type="submit" style="margin-left: 25%; height: 25px; width: 125px" value="Register!">
 	
 	<?
		include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_bottom_1.inc");
	?>

 	</body>
 	</html>
 	
 	