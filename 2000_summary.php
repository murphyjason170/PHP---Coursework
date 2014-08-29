<!doctype html>
<html lang="en">
<head>

	<?
		# This pulls in an inc file which in turn pulls in CSS formatting.
		include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_top_1.inc");
	?>

<style>
	</style>
</head>

<body>
<img src="Cart_Summary.jpg" alt="Cart Summary Image"/><br/><br/>

<?
session_start();

#####################################################################################
#
# This is the logic for managing the shopping cart totals
#
#####################################################################################

# Create sessions and get totals going
$_SESSION[dollars_total_lounge] = 100 * $_SESSION[number_of_chairs_lounge];
$_SESSION[dollars_total_bamboo] = 200 * $_SESSION[number_of_chairs_bamboo];
$_SESSION[dollars_total_french] = 300 * $_SESSION[number_of_chairs_french];
$_SESSION[grand_total] = $_SESSION[dollars_total_lounge] + $_SESSION[dollars_total_bamboo] + $_SESSION[dollars_total_french];

# For debug purposes uncomment and this will print out all session data here:
# while (list ($key, $val) = each ($_SESSION)) 
# { 
#	echo "$key -> $val <br>"; 	
# } 
	
?>

	<h3>Your cart currently consists of:</h3>
	<table>
 	<tr>
	<th>Chair Type</th><th>Number of Chairs</th><th>Price Each</th><th>Total</th>
	
	<?			

	# Here I do some evaluations and display the product in the table only if it has been ordered by the user
	if ($_SESSION[number_of_chairs_lounge] > 0)
	{
		?>
		<tr>
			<td>Lounge Chair</td>
			<td><? echo $_SESSION[number_of_chairs_lounge] ?></td>
			<td>$100</td>
			<td>$<? echo $_SESSION[dollars_total_lounge] ?></td>
		</tr>
		<?
 	}
	
	if ($_SESSION[number_of_chairs_bamboo] > 0)
	{
		?>
		<tr>
			<td>Bamboo Chair</td>
			<td><? echo $_SESSION[number_of_chairs_bamboo]?></td>
			<td>$100</td>
			<td>$<? echo $_SESSION[dollars_total_bamboo] ?></td>
		</tr>
		<?
	}
	
	if ($_SESSION[number_of_chairs_french] > 0)
	{
		?>
		<tr>
			<td>French Chair</td>
			<td><? echo $_SESSION[number_of_chairs_french]?></td>
			<td>$300</td>
			<td>$<? echo $_SESSION[dollars_total_french] ?></td>
		</tr>
		<?	
 	}
	?>
		
		<tr>	
			<td>Grand Total:</td><td></td><td></td><td>$ <? echo $_SESSION[grand_total]?></td>
		</tr>
	</table>
 
<form method="GET" action="2000_main.php">
 	<input type="submit" style="height: 25px; width: 125px" value="Keep Shopping" />
</form>	

<form method="GET" action="2000_email.php">
 	<input type="submit" style="height: 25px; width: 125px" value="Place Order" />
</form>	

<form method="GET" action="2000_empty_cart.php">
 	<input type="submit" style="height: 25px; width: 125px" value="Empty Cart" />
</form>	

<form method="GET" action="2000_logout.php">
 	<input type="submit" style="height: 25px; width: 125px" value="Logout" />
</form>	

	<?
		include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_bottom_1.inc");
	?>

</body>
</html>