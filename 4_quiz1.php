<?php
$turns = 0;
$color = "red";
$move = 0;

# Output from the program:
# 	turn=0, color=red, move=3 
#
# On turn: 1 the resulting color is: green and the resulting move is 3 
#
#
# On turn: 2 the resulting color is: green and the resulting move is 6 
#
#
# On turn: 3 the resulting color is: red and the resulting move is 8 
#
#
# On turn: 4 the resulting color is: yellow and the resulting move is 7 
#
#
# On turn: 5 the resulting color is: red and the resulting move is 9 
#
#
# On turn: 6 the resulting color is: blue and the resulting move is 10 
#
#
# On turn: 7 the resulting color is: blue and the resulting move is 11 
#
#
# The final color is: blue The total # of turns is :7 The total move is: 11 The total # of loops is: 
 
while ($move <= 10) 
{
  if ($turns > 100) {
     #oops, infinite loop!
     echo "Abort!";
     break;
  }
  else if ($move < 4 && $turns < 2) {
     $move += 3;
     $color = "green";
      
  }
  else if ($move == 8 AND $color == "red") {
     $move--;
     $color = "yellow";
      
  }
  else if ($color == "yellow" XOR $move >= 7) {
     $move++;
     $color = "blue";
   }
  else {
     $move += 2;
     $color = "red";
   }
  $turns++;
   
  echo "On turn: " . $turns . " the resulting color is: " . $color . " and the resulting move is " . $move . "\n";
  printf("\n");
} 
     printf("\n");
     echo "The final color is: " . $color . "\n";	
     printf("\n");
     echo "The total # of turns is :" . $turns . "\n";
     printf("\n");
     echo "The total move is: " . $move . "\n";
     printf("\n");
     printf("\n");
     echo "The total # of loops is: " . $total_loops . "\n";
     printf("\n");


?>