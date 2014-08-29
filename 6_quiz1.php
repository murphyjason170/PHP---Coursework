<B>Checkout</B><br>
 
Below is a summary of the products you wish to purchase, along with totals:
<?php

/* The function calculate_it() takes three arguments price, tax and shipping. 
Even though the tax rate is .08 we want to make the program scalable so in the future 
if we are dealing with multiple states, countries that we have a tax parameter to accomodate.
That is why we want tax to be a param. */

function calculate_it($price, $tax = 0.08, $shipping = 0) 
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
?><ul>

<?
$product = array( 	array("Candle Holder", 11.95, $tax, 0),
			array("Coffee Table", 99.50, $tax, 0.10),
			array("Floor Lamp", 44.99, $tax, 0.10)
		);

# Loop through the product names:     
for ($i = 0; $i < count($product) ; $i++) {
	echo "<li>" . $product[$i][0] . ": $" . $product[$i][1];
}

# Loop through the product rows and send to the calculate_it() function	
for ($j = 0; $j < 4 ; $j++ ) {
	$grand_total += calculate_it($product[$j][1], $product[$j][2], $product[$j][3]);
}
 
?>
</ul>
<hr>
<br>
<B>Total (including tax and shipping): $<? echo number_format($grand_total, 2); ?></B>