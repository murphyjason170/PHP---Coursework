<?php
#pre tags keep the asterisks more uniformly spaced
echo "<pre>";

for ($row = 0; $row < 15; $row++) {
 for ($column = 0; $column < 10; $column++) {
 if (($row < 2 || $row >= 13) || ($column < 2 || $column >= 8)) {
 echo "*";
 } 
 else echo " ";
 }
 echo "\n"; //the newline character starts the next row
}

echo "\n";


# Draw the letter T logic
for ( $height = 1 ; $height <= 15; $height++)
{
	# This i the logic to draw the top two rows of the T
	if ($height < 3){
		for ($width = 1; $width <= 10 ; $width++){
			echo "@";
		}
		# On to the next line:
		echo "\n";
	}
	
	# This is the logic to draw horizontal white space and the stars 
	if ($height >= 3)  
	{	
		# draw the white space horizontally
		for ( $space = 1 ; $space <= 4 ; $space++ )
		{
			echo " ";
		}
		# draw the stars horizontal
		for ( $star = 1 ; $star <= 2 ; $star++)
		{
			echo "@";
		}
		# newline character 
		echo "\n";		
	}
}

echo "</pre>";
?>