<?php

function mail_message($data_array, $template_file, $deadline_str,$myemail) 
{
	   # This is all template stuff - let's simplify on this one for now
		#	   $email_message = file_get_contents($template_file);
		#	   $email_message = str_replace("#chair_style#", $data_array['chair_style'], $email_message);
		#	   $email_message = str_replace("#EMAIL#", $data_array['registration_email_address'], $myemail, $email_message);
		#	   $email_message = str_replace("#quantity_of_chairs#", $data_array['quantity_of_chairs'], $email_message);	     
		#	   $email_message = str_replace("#CONTACT#", $contact, $email_message);
 		$chair_total = $_GET["chair_total"] ;
 	        
	   	$email_message = "The quantity is: $chair_total ";
	   
	   #construct the email headers
	   $to = "jmurphy72@yahoo.com";  //for testing purposes, this should be YOUR email address.
	   $from = $data_array['email'];
	   $email_subject = "CONTACT #".time().": ".$data_array['quantity_of_chairs'];
	
	   #now mail
	   mail($to, $email_subject, $email_message, "From: ".$from);  
}


# $customer_name = $_SESSION['registration_email_address'];
# if (!($customer_name)) {
# 	$customer_name = $_GET['registration_email_address'];
# }
 

#Remember, if you place any output before a header() call, you'll get an error.
#We used the superglobal $_GET here instead of the register globals, for safety
#if (!($customer_name)) {
#
   #with the header() function, no output can come before it.
   #echo "Please make sure you've filled in all required information.";

#   $query_string = $_SERVER['QUERY_STRING'];
#   #add a flag called "error" to tell contact_form.php that something needs fixed
#   $url = "http://".$_SERVER['HTTP_HOST']."/php - intro course/14_order_form.php?".$query_string."&error=1";
#   header("Location: ".$url);
#   exit();  //stop the rest of the program from happening
#   
#}

#we want a deadline 2 days after the message date.
   $deadline_array = getdate();
   $deadline_day = $deadline_array['mday'] + 2;

   $deadline_stamp = mktime($deadline_array['hours'],$deadline_array['minutes'],$deadline_array['seconds'],
       $deadline_array['mon'],$deadline_day,$deadline_array['year']);
   $deadline_str = date("F d, Y", $deadline_stamp);

 
//DOCUMENT_ROOT is the file path leading up to the template name.
mail_message($_GET, $_SERVER['DOCUMENT_ROOT']."/php - intro course/email_template.txt", $deadline_str, $customer_name, $customer_email);


# include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_top.inc");


echo "<h3>Thank you!</h3>";
echo "Here is a copy of your request:<br/><br/>";
echo "Chair total is: " . $chair_total . "<br/>";
echo "Email: ". $_GET['registration_email_address'] . "<br/>";
echo "Chair Style: " . $_GET['chair_style'] . "<br/>";
echo "Quantity of Chairs: ". $_GET['quantity_of_chairs'] . "<br/>";
 
 
?>

<br/><br/><a href="download.php"><b>Download our PDF brochure!</b></a>

 