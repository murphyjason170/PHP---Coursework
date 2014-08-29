<B>Checkout</B><br>
 
Below is a summary of the products you wish to purchase, along with totals:
<?php

/* The function calculate_it() takes three arguments price, tax and shipping. 
Even though the tax rate is .08 we want to make the program scalable so in the future 
if we are dealing with multiple states, countries that we have a tax parameter to accomodate.
That is why we want tax to be a param. */

function calculate_it($price, $tax = 0.08, $shipping) 
{	
 	$one_item_tax = $tax * $price; 	
	$one_item_shipping = $shipping * $price; 
 	$one_item_total = $price + $one_item_tax + $one_item_shipping; 
 
  	return $one_item_total;
}

#tax rate is constant
$tax = 0.08;
$total_price = 0; 
$grand_total = 0;
?><ul><?

$product_catalog_array = array( 
	"Candle Holder" => array( 	"Price" => "11.95",
                                        "Tax" => "0.08",
					"Shipping" => "0"),	

	"Coffee Table" => array(	"Price" => "99.50",
					"Tax" => "0.08",
					"Shipping" => "0.10"),
	
	"Floor Lamp" => array(		"Price" => "44.99",
					"Tax" => "0.08",
					"Shipping" => "0.10"));

# Here I take the multi-dimensional array $product_catalog_array and dump it to $key and $value
# Then within the while I create a "temporary" array $item_array to hold the values price, tax and shipping
# I declare $i as an index to loop through the $item_array

while (list($key, $value) = each($product_catalog_array))
{
	$item_array = array("price", "tax", "shipping");
	$i = 0;
	
	# Here the $key holds is the product
	# the $item_array[0] slot in the $item_array holds the price value
	foreach ($value as $k => $v)
	{
		 $item_array[$i] = $v;
		 $i++;
	}
	echo "<li>" . $key . ": " . "$" . $item_array[0] . '<br/>';

	# Here I call the calculate_it function and pass to it the values held by the temporary array
	$grand_total += calculate_it($item_array[0], $item_array[1], $item_array[2]);	
}
				
?>
</ul>
<hr>
<br>
<B>Total (including tax and shipping): $<? echo number_format($grand_total, 2); ?></B>