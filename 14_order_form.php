<?php

# Formatting stuff
# require($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_top.inc");


##################################################################
#
# This is the register first function. An email addresss is required
# to be entered. When email address is properly entered it will call
# the download_software() function
# 
##################################################################
function register_first()
{
	?>
	<head>
  			<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
 	</head>
 	
 		
	To Shop Here you need to register first!<br/>	
	Please enter your email address to register:</br>  	
	<form action="" method="post">
  		<input type="text" size="25" name="registration_email_address" value="" />
 		<input type="hidden" name="submitted" value="1">  
		<input type="submit" name="submit_20" value="Submit" />
	</form>	 
  	<? 
	# When the submit button is clicked the set_cookie function will be called
  	if (isset($_POST['submit_20']) && $_POST['submit_20'] == "Submit")
 	{
 		# Here I do some regexing to validate user input - to keep the overall interface clean and simple I use an alert to guide the user
 		# The regex below isn't exhaustive in weeding out the myriad of possible email permutations - catches 75% of the cases 
 		$email_to_verify = $_POST['registration_email_address'];
  	 	if ( ! (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email_to_verify)) ) {
	 		?>
	 		<script>
	 			alert("Please enter a valid email address!");
	 		</script>
	 		<?
	 	}    	 	 	
	 	# Ok the user email address is validated and lets set the cookie
	 	else
	 	{
	 		set_cookie();
	 		
	 		# session_start();
			# $_SESSION['userid']=$registration_email_address;
	  	}
	}
   	  	
}

if (isset($_GET['delete_session'])){
	setcookie("PHPSESSID", ""); 	// force the session to end
}
else {
	#start the session before any output
	session_start();
}
##################################################################
# If there are errors then set the error code to 1 so other logic
# can act on that variable and display helpful mesages to guide
# the user on how to complete fields in the browser 	
if ( $_GET['error'] == "1") {
	$error_code = 1;
}
##################################################################


##################################################################
#
# Forget about the current user
#
##################################################################
function forget_about_the_current_user()
{
 	setcookie ("registration_email_address", "", time() - 3600);
	setcookie("PHPSESSID", ""); 
	?>
	<head>
       		<link rel="stylesheet" href="6_objective2.css">
  		<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=http://jmurphy3.userworld.com/php%20-%20intro%20course/14_order_form.php">
 	</head>
 	<?       		
}
##################################################################


############################################################
#
# This is the registration cookie. Cookie is good for a year
#
############################################################
function set_cookie()
{
	?>
	<head>
       		<link rel="stylesheet" href="6_objective2.css">
  		<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=http://jmurphy3.userworld.com/php%20-%20intro%20course/14_order_form.php">
 	</head>
 	<?       		
 	
	# Set the cookie here for the now registered user
 	$value = $_POST['registration_email_address'];			
 	setcookie("registration_email_address",$value, time()+ 31536000); 
}


##################################################################
#
# This is the download cookie. Cookie is good for 7 days
#
##################################################################
function set_cookie_downloaded()
{
 	setcookie("downloaded", "downloaded", time()+ 604800);
}
##################################################################


##################################################################
#
# Logic if the user has not registered yet
#
##################################################################
if ( !($_COOKIE['registration_email_address'] ))
{
	register_first();
}
##################################################################



##################################################################
#
# Here is the main web page display once all registrations have taken place
#
##################################################################

else if ( ($_COOKIE['registration_email_address'] ))
{
?>
		<body>
		<h3>Island Tiki Wares</h3>
		<h4>Welcome Back <? echo $_COOKIE['registration_email_address']; ?></h4>
		<?
		# if ($error_code) {
		#	echo "<div style='color:red'>Please help us with the following:</div>";
		# }
		?>
		<form method="GET" action="/php - intro course/14_current_cart.php">
		<table>
 
	 		<tr>
			<td align="right">
			Chair Type:
			</td>
			<td align="left">
			<select name="chair_style">
			<option value="" />Please choose...

			<option value="test_chair"<? 
			if ($_GET['chair_style'] == "test_chair") {
			   echo " selected";
			} 
			?> />Test chair
			
			
			<option value="Rattan with Green Seat Cover"<? 
			if ($_GET['chair_style'] == "Rattan with Green Seat Cover") {
			   echo " selected";
			} 
			?> />Rattan with Green Seat Cover 

			<option value="Teak with Blue Seat Cover"<? 
			if ($_GET['chair_style'] == "Teak with Blue Seat Cover") {
			   echo " selected";
			} 
			?> />Teak with Blue Seat Cover

			<option value="Bamboo with Red Seat Cover"<? 
			if ($_GET['chair_style'] == "Bamboo with Red Seat Cover") {
			   echo " selected";
			} 
			?> />Bamboo with Red Seat Cover

			<option value="Thatch with Purple Seat Cover"<? 
			if ($_GET['chair_style'] == "Thatch with Purple Seat Cover") {
			   echo " selected";
			} 
			?> />Thatch with Purple Seat Cover 
			</select>
			<?
			# Replace whoami variable with chair_style
			if ($error_code && !($_GET['chair_style'])) {
				echo "<b>Please choose a request type.</b>";
			}
			?>
			
			</td>
			</tr>
			<tr>
			<td align="right">
			Quantity of Chairs:
			</td>
			<td align="left">
			<input type="text" size="50" max="50" name="quantity_of_chairs" value="<? echo $_GET['quantity_of_chairs']; ?>" />
			<?
			if ($error_code && !($_GET['quantity_of_chairs']))
			{
				echo "<b>Please select the quantity of chairs</b>";
			}
			?>		
				</td>
				</tr>
	
	  			<tr>
				<td colspan="2" align="center">
				<input type="submit" value="Update Cart" />
				</td></tr>
			</table>
		</form>		
		

		<form action="" method="POST" >
  		<tr>
			<td colspan="2" align="center">
			<input type="submit" name="submit_30" value="Forget About Me Please" />
 			</td></tr>
		</form>

		<?	
		# When the submit button is clicked the set_cookie_downloaded function will be called
		if ( isset($_POST['submit_30']) && $_POST['submit_30'] == "Forget About Me Please" )
		{
			# This calls the set_cookie_downloaded function
			forget_about_the_current_user();
 		}
		?>
		
<?
#	require($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_bottom.inc");
}
?>


</body>