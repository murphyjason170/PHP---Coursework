<?
	$Captain_Crunch = 5;
	$Frosted_Flakes = 4;
	$Fruit_Loops = 5;
	$Oatmeal = 6;
 
if ($Captain_Crunch < $Frosted_Flakes) {
	echo "I'll buy Captain Crunch";
}
else if ($Captain_Crunch > $Frosted_Flakes && $Frosted_Flakes > $Fruit_Loops){
	echo "I'll buy Fruit Loops.";
}
else if ($Captain_Crunch > 4 && $Fruit_Loops > 4 && $Oatmeal < 4 ) {
	echo "I'll get some Oatmeal.";
}
else {
	echo "Nothing matched!";
}

?>