<?php
echo '<head>';
       	echo '<link rel="stylesheet" href="11_objective1.css">';
echo '</head>';


echo' <body>';
 	echo "<br/>";

	# The Current Date
	echo '<h3>Todays date is: ' . date("F d, Y ") . '</h3>';
 
 	# My birthday
	$the_month = 04;
	$the_day = 19;
	$the_year = 2012;
 
 	# Start date information
 	$start_month = 1;
 	$start_day = 1;
 	$start_year = 2012;
 	
 	# End date information
 	$end_month = 12;
 	$end_day = 31;
 	$end_year = 2012;
 	
  	
 	while ( $start_month <= $end_month )
 	{
 		print mktime( $start_month
 	
 	}
 	
 	#we want a deadline 2 days after the message date
	$deadline_array = getdate();
	$deadline_day = $deadline_array['mday'] + 2;
	$deadline_str = $deadline_array['month']." ".$deadline_day." ".$deadline_array['year'];
 	
 	
 
	# Crunch is is the main calculation - the end result is the number of hours assigned to crunch_it variable 
	# $crunch_it = ( (mktime( $the_hour, 0, 0, $the_month, $the_day, $the_year) - time(void))/3600 );

 

echo '</body>';
  
?>
 
 