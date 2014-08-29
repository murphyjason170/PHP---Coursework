<?php

$info = array('coffee', 'brown', 'caffeine');

// Listing all the variables
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

echo "<br>";

// Listing some of them
list($drink, , $power) = $info;
echo "$drink has $power.\n";

echo "<br>";

// Or let's skip to only the third one
list( , , $power) = $info;
echo "I need $power!\n";

echo "<br>";

// list() doesn't work with strings
list($bar) = "abcde";
var_dump($bar); // NULL
?>