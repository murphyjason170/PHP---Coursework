<?php
function mail_message($data_array, $template_file, $deadline_str) {
   
   #get template contents, and replace variables with data
   $email_message = file_get_contents($template_file);
   $email_message = str_replace("#DATE#", date("F d, Y h:i a"), $email_message);
   $email_message = str_replace("#NAME#", $data_array['name'], $email_message);
   $email_message = str_replace("#EMAIL#", $data_array['email'], $email_message);
      
  
   #construct the email headers
   $to = "jmurphy72@yahoo.com";  //for testing purposes, this should be YOUR email address.
   $from = $data_array['email'];
   $email_subject = "CONTACT #".time().": ".$data_array['subject'];

   #now mail
   mail($to, $email_subject, $email_message, "From: ".$from);
  
}


//DOCUMENT_ROOT is the file path leading up to the template name.
mail_message($_GET, $_SERVER['DOCUMENT_ROOT']."/php - intro course/email_template_1.txt", $deadline_str);



echo "<h3>Thank you for filling out the invitation form</h3>";
echo "Here is a copy of your request:<br/><br/>";
echo "CONTACT #".time().":<br/>";
echo "Message Date: ".date("F d, Y h:i a")."<br/>";
echo "Name: " . $_GET['name'] . "<br/>";
echo "Email: " . $_GET['email'] . "<br/>";
?>

 
 