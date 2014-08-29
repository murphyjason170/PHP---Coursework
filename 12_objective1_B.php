<?php

function mail_message($name, $email, $invitation_number, $template_file) {
   
   #get template contents, and replace variables with data
   $email_message = file_get_contents($template_file);
   $email_message = str_replace("#DATE#", date("F d, Y h:i a"), $email_message);
   $email_message = str_replace("#NAME#", $name, $email_message);
   $email_message = str_replace("#EMAIL#", $email, $email_message);
   $email_message = str_replace("#INVITATION_NUMBER#", $invitation_number, $email_message);
      
  
   # construct the email headers
   # Note: In the real-world I would be setting $to = $email so that the recipient of the email is the actual invited person, not the invitee
   $to = "jmurphy72@yahoo.com";   
   $from = "jmurphy72@yahoo.com";
   $email_subject = "Tiki Party invitation for " . $name . "!";

   #now mail
   mail($to, $email_subject, $email_message, "From: ".$from);  
}


//initialize - pull all of the form names in
$name = count($_GET['name']) ? $_GET['name'] : array();
$email = count($_GET['email']) ? $_GET['email'] : array();


echo "<h3>Thank you for filling out the invitation form</h3>";
echo "Here is a copy of your request.<br/><br/>";
echo "Invitations are being sent to :<br/><br/>";

$total_count = count($email);
$index = 0;

# Everyone will have a unique invitation number as well in case it is crazy loud at the entrance
$invitation_number = 5000;

while ( $index < $total_count )
{
	
	# This is to display back to the submitter of the form:
	echo $name[$index]  . '   ';
	echo $email[$index] . '   ';
	echo $invitation_number . '</br>'; 

	# This one line calls the mail_message function and sends an email to each person inviting them to the party
	mail_message($name[$index], $email[$index], $invitation_number, $_SERVER['DOCUMENT_ROOT']."/php - intro course/email_template_1.txt");

	$index++;
	$invitation_number++;
}

echo "<h3>Note that the following email addresses are valid</h3>";
$total_count = count($email);
$index = 0;
while ( $index < $total_count )
{
	$email_address_to_verify = $email[$index];
	
	if ( preg_match('/\w+@\w+\.\w+/', $email_address_to_verify ))
	{
		echo "$email_address_to_verify<br/>";
	}
	$index++;
}

echo "<h3>Note that the following email addresses are invalid:</h3>";
$total_count = count($email);
$index = 0;
while ( $index < $total_count )
{
	$email_address_to_verify = $email[$index];
	
	if ( preg_match('/\w+@\w+\.\w+/', $email_address_to_verify ))
	{
	}
	else 
	{
		echo "$email_address_to_verify<br/>";
	
	}
	$index++;
	
}


?>

 
 