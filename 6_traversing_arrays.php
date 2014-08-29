<?php

$names = array("scott", "kendell", "Trish", "Tony", "Mike", "Debra", "Curt");

echo "There are ".count($names)." names in the \$names array.<br/>";
for ($i = 0; $i < count($names); $i++ ){
	echo "Dialing index " . $i . "...";
	echo "Hey there, " . $names[$i] . "!!!<br/>";
}

?>