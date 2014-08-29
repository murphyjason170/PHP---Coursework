<?
session_start();

#####################################################################################
#
# This file is called when the user adds items to the cart
# I evaluate what chair type was selected and map the number of chairs var to it
#####################################################################################

?>

<html>
<head>
	 	<?
			# This pulls in an inc file which in turn pulls in CSS formatting.
			include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_top_1.inc");
		?>
</head>
<body>


<img src="Items_Added.jpg" alt="Items Added Image"/><br/><br/>

<? 
if ( $_GET["chair_type"] == 'lounge' )
{
	$_SESSION[number_of_chairs_lounge] = $_SESSION[number_of_chairs_lounge] + $_GET["number_of_chairs"];
	echo "<h3>Quantity " . $_GET["number_of_chairs"] ." lounge chairs added to shopping cart!" . '</h3><br/>'; 
	?>
	<img src="chair_lounge.jpg" alt="lounge chair"/><br/>
	<?
} 
else if ( $_GET["chair_type"] == 'bamboo' )
{
	$_SESSION[number_of_chairs_bamboo] = $_SESSION[number_of_chairs_bamboo] + $_GET["number_of_chairs"];
	echo "<h3>Quantity " . $_GET["number_of_chairs"] . " bamboo chairs added to shopping cart!" . '</h3><br/>'; 
	?>
	<img src="chair_bamboo.jpg" alt="bamboo chair"/><br/>
	<?
 } 
else if ( $_GET["chair_type"] == 'french' )
{
	$_SESSION[number_of_chairs_french] = $_SESSION[number_of_chairs_french] + $_GET["number_of_chairs"];
	echo "<h3>Quantity " . $_GET["number_of_chairs"] . " french chairs added to shopping cart!" . '</h3><br/>'; 
	?>
	<img src="chair_french.jpg" alt="french chair"/><br/>
	<?
 } 
?>

<br/></br>

<form method="GET" action="2000_main.php">
 	<input type="submit" style="height: 25px; width: 125px" value="Keep Shopping" />
</form>	

<form method="GET" action="2000_summary.php">
 	<input type="submit" style="height: 25px; width: 125px" value="Cart Summary" />
</form>	
	
	<?
		include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_bottom_1.inc");
	?>
 
</body>
</html> 