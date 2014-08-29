<?php
#6
$products = 	array( 
			'a' => array("surfboard", "30.00", '10'),
			'b' => array("MP3 Player", "50.00", '15'), 
 	        );

while(list($object,$price,$quantity) = each($products)){
	echo "$object $price $quantity";
	echo "<br>";
}
?>

 