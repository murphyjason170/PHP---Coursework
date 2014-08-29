<?
session_start();

#####################################################################################
#
# This is the logic for sending the order to the admin (in this case jmurphy72@yahoo.com)
# It also presents the order in HTML to the user. 
#
#####################################################################################

 
# Here is where we will send an email with all of the information
function mail_message($data_array, $template_file, $deadline_str,$myemail) 
{ 	        
	   	$email_message = "Thank you " . $_SESSION[userid] . " for the order!" . "\n\n" .	   	
	   	"Total # of lounge chairs ($100 each) is: " . $_SESSION[number_of_chairs_lounge] . "\n" .
		"Total # of Bamboo chairs ($200 each) is: " . $_SESSION[number_of_chairs_bamboo] . "\n" .
		"Total # of French chairs ($300 each) is: " . $_SESSION[number_of_chairs_french] . "\n" .
		"The Grand Total is:	      $" . $_SESSION[grand_total] . "\n" .
	   	"Thank you for your order!\n";
	
	   	
	   
	   #construct the email headers
	   $to = "jmurphy72@yahoo.com";  //for testing purposes, this should be YOUR email address.
	   $from = $_SESSION['userid'];
	   $email_subject = "Order # :" . time() . " Chair Order" ;
	
	   #now mail
	   mail($to, $email_subject, $email_message, "From: " . $from);  
}

#we want a deadline 2 days after the message date.
   $deadline_array = getdate();
   $deadline_day = $deadline_array['mday'] + 2;

   $deadline_stamp = mktime($deadline_array['hours'],$deadline_array['minutes'],$deadline_array['seconds'],
       $deadline_array['mon'],$deadline_day,$deadline_array['year']);
   $deadline_str = date("F d, Y", $deadline_stamp);

 
//DOCUMENT_ROOT is the file path leading up to the template name.
mail_message($_GET, $_SERVER['DOCUMENT_ROOT']."/php - intro course/email_template.txt", $deadline_str, $customer_name, $customer_email);



# This is the output to the user to the web browser after the submission to purchase

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
<h3>Thank you for the order <? echo $_SESSION[userid] ?>! The order has been submitted!</h3>

<?
echo "Here is a copy of your request:<br/><br/>";

# Here I am doing some conditional formatting of the html output
if ( $_SESSION[number_of_chairs_lounge] > '0' ){
	echo"Total # of lounge chairs ($100 each) is: " . $_SESSION[number_of_chairs_lounge] . "<br/>";
}

if ( $_SESSION[number_of_chairs_bamboo] > '0' ){
	echo "Total # of Bamboo chairs ($200 each) is: " . $_SESSION[number_of_chairs_bamboo] . "<br/>";
}

if ( $_SESSION[number_of_chairs_french] > '0' ){
	echo "Total # of French chairs ($300 each) is: " . $_SESSION[number_of_chairs_french] . "<br/>";
}

echo "The Grand Total is:                      $" . $_SESSION[grand_total] . "<br/>";  
?>

<form method="GET" action="2000_main.php">
 	<input type="submit" style="height: 25px; width: 125px" value="Shop More" />
</form>	

<form method="GET" action="2000_logout.php">
 	<input type="submit" style="height: 25px; width: 125px" value="Logout" />
</form>	

	<?
		include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_bottom_1.inc");
	?>

</body>


<?
 	$_SESSION[dollars_total_lounge] = '0'; 
	$_SESSION[number_of_chairs_lounge] = '0';
	$_SESSION[dollars_total_bamboo] = '0'; 
	$_SESSION[number_of_chairs_bamboo] = '0';
	$_SESSION[dollars_total_french] = '0'; 
	$_SESSION[number_of_chairs_french] = '0';
	$_SESSION[grand_total] = '0';
?>

 