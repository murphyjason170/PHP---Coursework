<ul style="font-size:16px;">
	<li>Trader Vic's, Emeryville</li>

	<?
	# This is the PHP section which declares and initializes the food menu vars:

		# Food and prices of items selected:
		$appetizer = "Mahi Mahi Sliders";
		$appetizer_price = "7.50";
		
		$drink = "Mai Tai";
		$drink_price = "9.25";
		
		$entree = "Calcutta Curry";
		$entree_price = "21.75";
		
		$dessert = "Rum Pancake Flambe";
		$dessert_price = "12.30";
		
 		$TAX = 1.08;
		$TIP = 1.15;

		# Calculations section:	
 		$food_total = $appetizer_price + $drink_price + $entree_price + $dessert_price;
		$food_total_with_tax = $food_total * $TAX;
		$food_total_with_tax_and_tip = $food_total_with_tax * $TIP;		
 	?>
 
	<br/>
	
 	<ul>
		<li>Appetizer: <? echo $appetizer." ". "$" . $appetizer_price; ?></li>
		<li>Drink: <? echo $drink." " . "$" . $drink_price; ?></li>
		<li>Entree: <? echo $entree." ". "$" . $entree_price; ?></li>
		<li>Dessert: <? echo $dessert." ". "$" . $dessert_price; ?></li>	
		<li>--------------------------------------</li>
		<li>Food total: <? echo "$" . $food_total; ?></li>
		<li>Food total with 8% tax: <? echo "$" . $food_total_with_tax; ?></li>
		<li>Food total with tax and 15% tip: <? echo "$" . $food_total_with_tax_and_tip; ?></li>
	</ul>
</ul>

