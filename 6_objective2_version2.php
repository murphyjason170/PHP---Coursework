<?php

# Ben please see the link below. Thank you! - Jason
# http://jmurphy3.userworld.com/php%20-%20intro%20course/6_objective2.html

# This is my post lotto win calendar
$jasons_fake_calendar = array(	"Sunday" => array( 	"9AM" => "sleep in",
							"10AM" => "Jim's Diner",
							"11AM" => "Read the newspaper",
							"12PM" => "Lunch at home",
							"1PM" => "Surf a burly left",
							"2PM" => "Read algorithms",
 							"3PM" => "Afternoon Nap",
							"4PM" => "Throw frisbee at Cesar Chavez Park"),

				"Monday" => array( 	"9AM" => "Wake up and go for a run",
							"10AM" => "Meditation",
							"11AM" => "Read Dashiel Hammett",
							"12PM" => "Lunch at La Folie",
							"1PM" => "jumping jacks",
							"2PM" => "read rum book",
 							"3PM" => "catnap in the sun",
							"4PM" => "Paint a room"),

				"Tuesday" => array( 	"9AM" => "Early morning walk",
							"10AM" => "Stretching",
							"11AM" => "Read the newspaper",
							"12PM" => "Lunch at Taco Truck",
							"1PM" => "Skype with Dad",
							"2PM" => "Read about Bay Area History",
 							"3PM" => "Tea and Cranberry Scones",
							"4PM" => "Band Practice With Pals"),

				"Wednesday" => array( 	"9AM" => "Talk with Doug",
							"10AM" => "Situps",
							"11AM" => "Read the newspaper",
							"12PM" => "Lunch at Crepe Vine",
							"1PM" => "Snorkel and plan Hawaii Trip",
							"2PM" => "read algorithms",
 							"3PM" => "afternoon nap",
							"4PM" => "watch a movie with Darren"),

				"Thursday" => array( 	"9AM" => "Plan Buenos Aires Adventure",
							"10AM" => "Bike the Hills",
							"11AM" => "Read Mythology",
							"12PM" => "Lunch at Chos",
							"1PM" => "Windsurf",
							"2PM" => "Read up on algorithms",
 							"3PM" => "Clean my Tiki Mugs and dust off unused ones",
							"4PM" => "Jen and I have dinner"),

				"Friday" => array( 	"9AM" => "Wake up and walk near the USS Hornet",
							"10AM" => "Walk along the seashore",
							"11AM" => "meditate and live in the present",
							"12PM" => "lunch",
							"1PM" => "surf a burly right",
							"2PM" => "program some fun programs",
 							"3PM" => "watch the news",
							"4PM" => "meet up with Chris and Amy"),
			
				"Saturday" => array( 	"9AM" => "coffee and the paper",
							"10AM" => "mega run starting",
							"11AM" => "mega-run continued",
							"12PM" => "lunch",
							"1PM" => "Afternoon Nap",
							"2PM" => "Go to Jackson Park with Nicholas and Julia",
 							"3PM" => "Hit Berkeley and Pickup something for Jen",
							"4PM" => "Margaritas at La Pinata") );			

#########################
# This is the html output
#########################
					
echo"<html>";
echo"<head>";
echo'<link rel="stylesheet" href="6_objective2.css">';
echo"</head>";
echo"<body>";
					
echo "<h2>Jason's Calendar</h2>";  


# These are the mappings from the HTML to the PHP variables:
$day = $_GET["change_day"];
$timeslot = $_GET["change_timeslot"];
$new_activity = $_GET["activity"];

# This is the assignment to the hash:
$jasons_fake_calendar[$day][$timeslot] = $new_activity;


# Print out the calendar
while (list($key, $value) = each($jasons_fake_calendar)){

	echo '<h3 id="table_day">' . $key . '</h3>';
		
	echo "<table>";
	foreach ($value as $k => $v)
	{
		echo "<tr>";
 		echo "<td>" . $k . "</td><td>" . $v . "</td>";
		echo "</tr>";
	}
 	echo "</table>";
	echo "</br>";
}
echo"</body>";
echo"</html>";						   
?>




 