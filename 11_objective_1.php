<?php
echo '<head>';
       	echo '<link rel="stylesheet" href="11_objective1.css">';
echo '</head>';


echo' <body>';

	echo '<img src="https://encrypted-tbn2.google.com/images?q=tbn:ANd9GcTYXM8sr_2HzItLpW2Kl0DUbBTseLpsbfxvRxcXs3pok6W9zlpH4A"></img>';
	echo "<br/>";

	# The Current Date
	echo '<h3>Todays date is: ' . date("F d, Y ") . '</h3>';
 
	$the_month = 10;
	$the_day = 31;
	$the_year = 2012;
	$the_hour = 0;
 
	# Crunch is is the main calculation - the end result is the number of hours assigned to crunch_it variable 
	$crunch_it = ( (mktime( $the_hour, 0, 0, $the_month, $the_day, $the_year) - time(void))/3600 );

	# Take the hours and wash them through a typecast to an integer so we don't have any decimal points
	$hours_until_halloween = (int)$crunch_it;

	# Divide the hours to get the number of days. Type cast to an integer so we don't have any decimal points
	$days_until_halloween  = (int)( $hours_until_halloween / 24);

 	echo '<h3>It is ' . $days_until_halloween . ' days until Halloween</h3>';

echo '</body>';
  
?>
 
 