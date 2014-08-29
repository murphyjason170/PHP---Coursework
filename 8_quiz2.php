<?php
# Five errors in this code corrected:
#      	$good_email = "([a-zA-Z0-9]+@[a-zA-Z0-9_-]+\.[a-zA-Z0-9_-]+)+";
#	if ( preg_match("/$good_email/", $email) ) {
#	$index = 0;
#	$index++;
#	At the end needed to fix the php delimiters

function create_passwd() {
 	#creates random 8-char alphanumeric password
 	$length=8;
 	$list=array_merge(range('a','z'),range(0,9));
 	shuffle($list);
 	$passwd=substr(join($list),0,$length);

 return $passwd;
}

function valid_email( $email ) {
 	#this function takes a string and checks it against a regular expression, 
 	#to ensure it's a valid email address.
 	$good_email = "([a-zA-Z0-9]+@[a-zA-Z0-9_-]+\.[a-zA-Z0-9_-]+)+";
 
 	if ( preg_match("/$good_email/", $email) ) {
 		echo $email." is a valid email address.<br>";
 		return true;
 	}
 	else {
 		echo $email." is NOT a valid email address.<br>";
 		return false;
 	}
}

$user_array = array( array('email' => "judy_g@comcast.net", 'password' => ''),
 array('email' => "george@blah", 'password' => ''),
 array('email' => "m-miller@dept.inc.com", 'password' => ''),
 array('email' => "*@aol.com", 'password' => ''),
 array('email' => "nobody", 'password' => ''));

#filter array for invalid email entries
$index = 0;

while ($index < count($user_array)) {
 	$next_user = $user_array[$index];
 	
 	if (valid_email($next_user['email'])) {
 		$user_array[$index]['password'] = create_passwd();
 	}
 	else {
 		#set the user_array entry to null, for later deletion.
 		$user_array[$index] = null;
 	}
 	$index++;
}
//now delete all NULL entries
$user_array = array_filter($user_array);
echo '<pre>';
print_r($user_array);
echo '</pre>';
?>




