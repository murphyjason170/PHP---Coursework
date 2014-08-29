<?php

$weekly_pills = array(	"S" => array(	"8am" => "vitamin C",
					"1pm" => "antibiotic",
					"6pm" => "zinc",
					"11pm" => "akla seltzer"),
			
			"M" => array(	 "8am" => "vitamin C",
					"1pm" => "antibiotic",
					"6pm" => "zinc",
					"11pm" => "akla seltzer"),
			
			"T" => array(	"8am" => "vitamin C",
					"1pm" => "antibiotic",
					"6pm" => "zinc",
					"11pm" => "akla seltzer"),

			"W" => array(	"8am" => "vitamin C",
					"1pm" => "antibiotic",
					"6pm" => "zinc",
					"11pm" => "akla seltzer"),

			"Th" => array(	"8am" => "vitamin C",
					"1pm" => "antibiotic",
					"6pm" => "zinc",
					"11pm" => "akla seltzer"),


			"F" => array(	"8am" => "vitamin C",
					"1pm" => "antibiotic",
					"6pm" => "zinc",
					"11pm" => "akla seltzer"),


			"Sa" => array(	"8am" => "vitamin C",
					"1pm" => "antibiotic",
					"6pm" => "zinc",
					"11pm" => "akla seltzer"));


while (list($key,$value) = each($weekly_pills)){
	echo "Here's what you should take on ".$key.":<br/>";
	echo "<pre>";
	print_r($value);
	echo "</pre>";
}
					
?>


 