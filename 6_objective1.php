<?php

# Ben please see the link below. Thank you! - Jason
# http://jmurphy3.userworld.com/php%20-%20intro%20course/6_objective1.html

# This is my post lotto win calendar
$jasons_fake_calendar = array(	"9AM" => "surf",
				"10AM" => "lift weights",
				"11AM" => "treadmill",
				"12PM" => "lunch",
				"1PM" => "program Perl",
				"2PM" => "program HTML5/CSS",
 				"3PM" => "program PHP",
				"4PM" => "program Java");
 
# This prints the calendar a listed above unaltered by the user 
echo "<pre> Jason's Fake/Dream Calendar pre user input";
print_r($jasons_fake_calendar);
echo "</pre>";
 
# These are the mappings from the HTML to the PHP variables:
$timeslot = $_GET["change_timeslot"];
$new_activity = $_GET["activity"];

# This is the assignment to the hash:
$jasons_fake_calendar[$timeslot] = $new_activity;

# Now let's print the updated calendar!
echo "<pre> Jason's Fake/Dream Calendar - post user input!";
print_r($jasons_fake_calendar);
echo "</pre>";
 
?>