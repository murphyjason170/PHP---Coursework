<?php

$weekly_pills = array(	"S" => "Vitamin C",
			"M" => "Echinacea",
			"T" => "Antibiotic",
			"W" => "Calcium",
			"Th" => "Zinc",
			"F" => "Multivitamin",
			"Sa" => "Alka Seltzer");

echo "<pre>";
print_r($weekly_pills);
echo "</pre>";

$weekly_pills["Th"] = 'aspirin';
$weekly_pills[4] = 'garlic';
$weekly_pills[] = 'glucose';

echo "<pre>";
print_r($weekly_pills);
echo "</pre>";


?>
