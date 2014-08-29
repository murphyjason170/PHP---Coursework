<?
$test_array = array(	"key1" => "value1",
			"key2" => "value2",
			"key3" => "value3");
			
$new_array1 = each($test_array);

echo "<pre>";
print_r($new_array1);
echo "</pre>";

?>