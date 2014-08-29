<?php
$value = 'something from somewhere';

setcookie("TestCookie", $value, 500000);
 
echo $_COOKIE["TestCookie"];

print_r($_COOKIE);
 
?>