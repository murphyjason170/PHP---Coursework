<html>

<H3>Your current shopping cart is:</H1>

<?   				
	$chair_style =$_GET['chair_style'];
 	$quantity_of_chairs = $_GET["quantity_of_chairs"];;

	# Determine the chair type selected
	if ($chair_style == 'test')
	{
		echo "You have selected a test chair" . '<br/>';			
	}

	# Determine the quanity of chairs selected
	echo "The quantity of chairs selected is $quantity_of_chairs" . '<br/>';
			
	# Let the user know how much the current selection is:			
	if ($chair_style == 'test_chair')
	{
		$chair_style_price = 2000;
	}
	
	# This is for the currently selected chair times the quantity
  	$chair_total = $quantity_of_chairs * $chair_style_price;
  	
  	# This is keeping track of the big picuture
	$running_total = $running_total + $chair_total ;
	
	echo "The current order is $chair_total " . "<br/>";	
	echo "The running total of all purchases is $running_total " . "<br/>";
	
	
		
 	
	
?>
	<form method="GET" action="/php - intro course/14_order.php">
					<input type="submit" value="Place Order" />
 			<name="chair_total" value="Jacincto"> 					
	</form>		


	<form method="GET" action="/php - intro course/14_order_form.php">
		<input type="submit" value="Continue Shopping" />
	</form>		

	
	<form method="GET" action="http://www.google.com">
		<input type="submit" value="Visit Google" />
	</form>		
</html