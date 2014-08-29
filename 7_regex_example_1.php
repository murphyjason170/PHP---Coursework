<?php

function check_regex($myregex, $mystring) {
	if (preg_match("/$myregex/", $mystring)){
		echo "The pattern '$myregex' is found in $mystring.<br/>";
	}
	else 
	{
		echo "The pattern '$myregex' is NOT found in $mystring.<br/>";
	}
}


function clean_filename($file_name) {
	$bad_characters = "[^a-zA-Z0-9.]";
	$new_filename = preg_replace("/$bad_characters/", "_", $file_name);
	return $new_filename;
}

$bad_filename = "file[3*1 name.doc";
$good_filename = clean_filename($bad_filename);
echo "'$bad_filename' has been changed to '$good_filename'.";


function validate_phone($phone_number) {
	$good_phone = "^\(?[0-9]{3}\)?( |-|\.)[0-9]{3}(-|\.)[0-9]{4}$";
	
	if ( preg_match("/$good_phone/", $phone_number)) {
		echo "$phone_number is valid.<br/>";
	}
	else echo "$phone_number is NOT valid.<br/>";
}


echo "<br/>";

$phone_number1 = "34x.d98.1123";
validate_phone($phone_number1);

echo "<br/>";


$phone_number2_= "217-555-1212";
validate_phone($phone_number2);

echo "<br/>";


?>