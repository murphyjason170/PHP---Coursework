<?php


#We used the superglobal $_GET here 
if (!($_GET['first_name'] && $_GET['last_name'] && $_GET['email'] )) {

   #with the header() function, no output can come before it.
   #echo "Please make sure you've filled in all required information.";

   
   $query_string = $_SERVER['QUERY_STRING'];
   $url = "http://".$_SERVER['HTTP_HOST']."/php - intro course/10_objective1_registration_form.php?".$query_string."&error=1";
   
   header("Location: ".$url);
   exit();
   
}

extract($_GET, EXTR_PREFIX_SAME, "get");

# This is the password generator function
# The password will be 9 alpha-numerics in length 
function createRandomPassword() { 

    $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= 7) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 

    return $pass; 

}  	 



# Construct email message
$email_message = 
	"Hello, " . $first_name . ",\n\n" .
	"Your login ID is: \t" . $email .
	"\nYour temporary password is:\t " . createRandomPassword() .
	"\n\nThank you,\nThe Team at Guitar Land Online\n"; 
 	
 	
# Construct email headers
$to = "jmurphy72@yahoo.com";
$from = $_GET['email'];
$email_subject = "Your username and password";

# Now mail the message
mail ($to, $email_subject, $email_message, "From: ".$from);


# Here is what will be displayed immediately after the user clicks the submit button
echo "<head>";
echo '<link rel="stylesheet" href="6_objective2.css">';
echo '</head>';

echo '<body>';
echo "<h3>Thank you!</h3>";
echo $first_name . ",</br></br>";
echo "Your login and password will be emailed to you immediately at: " . $email . "<br/><br/>";
echo "Thank you,</br>";
echo "The Team at Guitar Land Online</br>";   
echo "</body>";
?>