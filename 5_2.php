<B>Checkout</B><br>
 
Below is a summary of the products you wish to purchase, along with totals:
<?php

/* The function calculate_it() takes three arguments price, tax and shipping. 
Even though the tax rate is .08 we want to make the program scalable so in the future 
if we are dealing with multiple states, countries that we have a tax parameter to accomodate.
That is why we want tax to be a param. */

function calculate_it($price, $tax = 0.08, $shipping) {
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

$product = "Candle Holder";
$price = 11.95;
$shipping = 0; //free shipping
echo "<li>".$product.": $".$price;
$grand_total += calculate_it($price, $tax, $shipping);

$product = "Coffee Table";
$price = 99.50;
$shipping = 0.10; //shipping as a percentage of price
echo "<li>".$product.": $".$price;
$grand_total += calculate_it($price, $tax, $shipping);

$product = "Floor Lamp";
$price = 44.99;
$shipping = 0.10; //shipping as a percentage of price
echo "<li>".$product.": $".$price;
$grand_total += calculate_it($price, $tax, $shipping);
 
?>
</ul>
<hr>
<br>
<B>Total (including tax and shipping): $<? echo number_format($grand_total, 2); ?></B>