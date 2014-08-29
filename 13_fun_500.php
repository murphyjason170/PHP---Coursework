<?php 
 	$Month = 2592000 + time(); 
 	
 	//this adds 30 days to the current time 
 	setcookie(AboutVisit, date("F jS - g:i a"), $Month);
?> 
 
 
 
<?php 
	if(isset($_COOKIE['AboutVisit']))
 	{ 
 		$last = $_COOKIE['AboutVisit']; 
 		echo "Welcome back! <br> You last visited on ". $last; 
 	} 
 	else 
 	{ 
 		echo "Welcome to our site!"; 
 	} 
?>

