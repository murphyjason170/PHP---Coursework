<?
	
	
function select_beverage($dinner){ 	
 	/* This is the "brain" of the program - it makes decisions based on the text passed from the html file.
 	Also, it formats to the hundredth on the decimal to reflect actual currency totals. */
 	
	if ($dinner === "entree_steak") {
		$price_steak = 23.45678;	
		echo "Steak it is with a glass of Malbec";
 		printf("\nThe price is: $%01.2f \n", $price_steak);
 		$beverage = "Malbec";
	}
  	else if ($dinner === "entree_salmon") {
		$price_salmon = 21.9777;	
  		echo "Salmon it is with a glass of Chardonnay";
 		printf("\nThe price is: $%01.2f \n", $price_salmon);
 		$beverage = "Chardonnay";
 	}
  	else if ($dinner === "entree_bbq") {
  		$price_bbq = 16.4577;
  		echo "BBQ Pork with a Lagunitas IPA it is!";
 		printf("\nThe price is: $%01.2f \n", $price_bbq);
 		$beverage = "Lagunitas IPA";
  	}
  	else if ($dinner === "entree_chicken") {
		$price_chicken = 17.22222222;
  		echo "Chicken and a Coca-Cola!";
 		printf("\nThe price is: $%01.2f \n", $price_chicken);
 		$beverage = "Coca-Cola";
  	}
  	else {
  		echo "Please check the html code because I didn't catch anything above!";
  		$beverage = "Iced Water";
  	}
  	return $beverage;
}
  	
  	# This is the glue that really plugs into the html form call:	
	$dinner = $_GET["entree_selection"];
	$beverage = select_beverage($dinner);
	echo "<br>";
	echo "The beverage is ".$beverage."<br>"; 	
 ?>