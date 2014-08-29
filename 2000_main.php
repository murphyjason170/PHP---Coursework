<html>
<?
session_start();
#####################################################################################
#
# This is Jason Murphy's Final Project for the Intro to PHP Course
#
# Here are the files that are used:
# 	2000_main.php
#	2000_registration.php
#	2000_registration_completion.php
#	2000_items_added.php
#	2000_summary.php
#	2000_email.php
#	2000_empty_cart.php
#	2000_logout.php
#
#	In this program I have used sessions and find them to be awesome!
#	Sessions work great and I enjoy working with them - they seemed to be the closest thing I could
#	get to a database without actually having a real database.
#
#	Anyhow, my principal goal was to keep each php file really clean so that
#	another programmer could look at these files and quickly understand the 
#	purpose and that each file has just the relevant logic.
#
#	My initial error on this project was trying to do everything across just a few
#	files. I jettisoned my first attempt but learned and came up with a clean approach!
#
#	
#####################################################################################



#####################################################################################
#
# This is the logic if the user has not registered yet
#
#####################################################################################
 
if (!isset($_SESSION[userid])){
?>
	<html>
	<head>
	</head>
	<body>
 		<img src="Main_Splash.jpg" alt="Jasons House of Chairs Page Image"/><br/><br/>
 		<img src="please_register.jpg" style="margin-left: 15%" alt="Please Register"/><br/><br/>

  		<form method="GET" action="2000_registration.php">
 			<input type="submit" style="height: 25px; width: 125px; margin-left: 25%" value="Register" />
		</form>
	<?
		include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_bottom_1.inc");
	?>

	</body>
	</html>				
<?
}
#####################################################################################
#
#	The Main Store Front (once the user is registered that is)
#	
#	In this section I use some JavaScript to make the picture come alive a bit
#	(I.E. if you mouse-over and mouse-out a different picture is triggered
#	
#	I use some CSS style formatting
#
#####################################################################################
else {
?>
<html>
<head>
	<?
		# This pulls in an inc file which in turn pulls in CSS formatting.
		include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_top_1.inc");
	?>
	
	<script type="text/javascript">
	
	function mouseOver(id,web_url)
	{
		document.getElementById(id).src = web_url;
	}
	
	function mouseOut(id, web_url)
	{
		document.getElementById(id).src = web_url;
	}		
	</script>


</head>
<body>
	<img src="Main_Splash.jpg" alt="Jasons House of Chairs Page Image"/><br/>
	<img src="shopping.jpg" alt="Shopping Image"/><br/>



	<H3>Please select a chair and quantity and your shopping cart will be updated!</H3><br/>

	<a href="">
 	<img border="0" src="chair_lounge.jpg" id="lounge" alt="lounge chair image"
	onmouseover="mouseOver('lounge', 'chair_lounge_mouse_over.jpg')"
	onmouseout="mouseOut('lounge', 'chair_lounge.jpg')" /></a>
	
	<a href="">
 	<img border="0" src="chair_bamboo.jpg" id="bamboo" alt="bamboo chair image"
	onmouseover="mouseOver('bamboo', 'chair_bamboo_mouse_over.jpg')"
	onmouseout="mouseOut('bamboo', 'chair_bamboo.jpg')" /></a>

	<a href="">
 	<img border="0" src="chair_french.jpg" id="french" alt="french chair image"
	onmouseover="mouseOver('french', 'chair_french_mouse_over.jpg')"
	onmouseout="mouseOut('french', 'chair_french.jpg')" /></a>



	<form method="GET" action="2000_items_added.php">
			Chair Type:
 			<td align="right">
			<select name="chair_type" style="margin-left: 12px">
  
			<option value="lounge"<? 
			if ($_GET['chair_type'] == "lounge") {
			   echo " selected";
			} 
			?> />Lounge Chair - $100 per chair
						
			<option value="bamboo"<? 
			if ($_GET['chair_type'] == "bamboo") {
			   echo " selected";
			} 
			?> />Bamboo Chair - $200 per chair
 
			<option value="french"<? 
			if ($_GET['chair_type'] == "french") {
			   echo " selected";
			} 
			?> />French Chair - $300 per chair
			</select>
			</br>


  			Quantity:
 			<td align="right">
			<select name="number_of_chairs" style="margin-left: 29px">
 
			<option value="1"<? 
			if ($_GET['number_of_chairs'] == "1") {
			   echo " selected";
			} 
			?> />1
						
			<option value="2"<? 
			if ($_GET['number_of_chairs'] == "2") {
			   echo " selected";
			} 
			?> />2

			<option value="3"<? 
			if ($_GET['number_of_chairs'] == "3") {
			   echo " selected";
			} 
			?> />3

			<option value="4"<? 
			if ($_GET['number_of_chairs'] == "4") {
			   echo " selected";
			} 
			?> />4

			<option value="5"<? 
			if ($_GET['number_of_chairs'] == "5") {
			   echo " selected";
			} 
			?> />5
			
			</select>
			<br/><br/>

	<input type="submit" style="height: 25px; width: 125px" value="Update Order" />
</form>		

 
<form method="GET" action="2000_summary.php">
 	<input type="submit" style="height: 25px; width: 125px" value="Cart Summary" />
</form>	
 
<form method="GET" action="2000_empty_cart.php">
 	<input type="submit" style="height: 25px; width: 125px" value="Empty Cart" />
</form>	

<form method="GET" action="2000_logout.php">
 	<input type="submit" style="height: 25px; width: 125px" value="Logout" />
</form>	

	<br/>
	<h4 style="margin-left: 32%">You are logged in as: <? echo $_SESSION[userid]; ?> </h4><br/>  
<?
	include($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_bottom_1.inc");
?>
	
</body>
</html>

<?
# This terminates the else from way up in this file
}
?>
