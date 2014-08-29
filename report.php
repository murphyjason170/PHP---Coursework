<html>
<head>
	<title>Aliens Abducted Me - Report An Abduction</title>
</head>
<body>
	<h2>Aliens Abducted Me = Report An Abduction</h2>
	

	<?php
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		
		$when_it_happened = $__POST['whenithappened'];
		$how_long = $_POST['howlong'];
		$how_many = $_POST['howmany'];
		$what_they_did = $_POST['whattheydid'];
		$alien_description = $_POST['aliendescription'];
		$fang_spotted = $_POST['fangspotted'];
		$email = $_POST['email'];
		$other = $_POST['other'];

		$msg = "Dear $first_name, you were abducted by aliens on $when_it_happened there were $how_many aliens ." .
		"We understand that they $what_they_did . Apparently the aliens looked like $alien_description . You indicate $fang_spotted as to whether you saw the dog" .
		"Your email address is $email and you also said that $other.";

		$to = 'jmurphy72@yahoo.com';
		$subject = 'Alien Abduction Report';
	
		mail($to, $subject, $msg, 'From:' . $email);
		
		echo 'Hello ' . $first_name . ' ' . $last_name . '<br />';
 		echo 'You were abducted ' . $when_it_happened . '<br />';
		echo 'and were gone for ' . $how_long . '<br />';
		echo 'There were a quantity of ' . $how_many . '</br />';
		echo 'Describe them: ' . $alien_description . '<br />';
		echo 'They did this to you: ' . $what_they_did . '<br />';
		echo 'Was Fang there? ' . $fang_spotted . '<br />';
		echo 'Any other additional info: ' . $other . '<br />';
		echo 'Your email address is ' . $email;
		
		
		
		
	?>
</body>
</html>

