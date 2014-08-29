<?php

extract($_POST, EXTR_PREFIX_SAME, "post");

# Here lets echo out to the user everything that they have selected:
echo "<h3>Thank you!</h3>";
echo "Here is a copy of your request:<br/><br/>";
echo "Title: " . $formality . "<br/>";
echo "First name: " . $first_name . "<br/>";
echo "Last name: " . $last_name . "<br/>";
echo "Telephone: " . $phone_number . "<br/>";
echo "Email: " . $email_address . "<br/>";
echo "Instrument Choice: " . $instrument_choice . "<br/>";
echo "Amp Selection:" . $amp_selection . "<br/>";
echo "Guitar Brand: " . $guitar_type . "<br/>";

# Use a loop to process the 3 updates
for ($i = 1; $i <= 3; $i++ )
{
	$element_name = "update" . $i;
	echo $element_name . ": ";
	echo $$element_name;
	echo "<br/>";
} 

# Shipping instructions for the buyer
echo "Shipping Instructions: " . $shipping_instructions . "<br/>";

?>
