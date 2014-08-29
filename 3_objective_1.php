<?
	# Prices for the entree - noticed I am being ridiculous with the quantity of numbers following the decimal point!
	$price_steak = 23.45678;	
	$price_salmon = 21.9777;	
	$price_bbq = 16.3222;
	$price_chicken = 17.22222222;

	# This is the glue that really plugs into the html form call:	
	$entree_selected = $_GET["entree_selection"];
 	
 	/* This is the "brain" of the program - it makes decisions based on the text passed from the html file.
 	Also, it formats to the hundredth on the decimal to reflect actual currency totals. */
 	
	if ($entree_selected === "entree_steak") {
		echo "Steak it is with a glass of Malbec";
 		printf("\nThe price is: $%01.2f \n", $price_steak);
	}
  	else if ($entree_selected === "entree_salmon") {
  		echo "Salmon it is with a glass of Chardonnay";
 		printf("\nThe price is: $%01.2f \n", $price_salmon);
 	}
  	else if ($entree_selected === "entree_bbq") {
  		echo "BBQ Pork with a Lagunitas IPA it is!";
 		printf("\nThe price is: $%01.2f \n", $price_bbq);
  	}
  	else if ($entree_selected === "entree_chicken") {
  		echo "Chicken and a Coca-Cola!";
 		printf("\nThe price is: $%01.2f \n", $price_chicken);
  	}
  	else {
  		echo "Please check the html code because I didn't catch anything above!";
  	}
 ?>