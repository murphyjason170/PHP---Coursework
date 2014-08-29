<?php
$names = array("scott","kendell","Trish","Tony","Mike","Debra","Curt");

echo "Who is it? ...".$names[4]."<br/>";

$names[4] = "Josh";
echo "Who is it? ...".$names[4]."<br/>";

echo "<pre>";
print_r($names);
echo "</pre>";
?>
