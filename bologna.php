<?php

function spell_me($mystring) {
	$i = 0;
	while ($mystring[$i] != null) {
		if ($i == o) {
			echo $mystring[$i];
		}
		else {
			echo " - ".$mystring[$i];
		}
		$i++;
	}
}

$string_l = "bologna";
$string_2 = "oscar";
$string_3 = $string_2;

$string_3[0] = 'm';
$string_3[1] = 'a';
$string_3[2] = 'y';
$string_3[3] = 'e';

echo  "My " . $string_1 . " has a first name, it's ";
spell_me($string_2);
echo "<br/>";

echo "My " . $string_1 . " has a second name, it's ";
spell_me($string_3);
echo "<br/>";

?>