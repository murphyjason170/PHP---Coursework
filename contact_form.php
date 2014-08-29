<?php

if (isset($_GET['delete_session'])){
	setcookie("PHPSESSID", ""); 	// force the session to end
}
else {
	#start the session before any output
	session_start();
}

	require($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_top.inc");
	
if ( $_GET['error'] == "1") {
	$error_code = 1;
}
?>



<body>
<h3>Contact ACME Corporation</h3>
<?
if ($error_code) {
	echo "<div style='color:red'>Please help us with the following:</div>";
}
?>
<form method="GET" action="/php - intro course/contact.php">
<table>
<tr>
<td align="right">
Name:
</td>
<td align="left">
<?
if ($_SESSION['name']){
	echo $_SESSION['name'];
?>
	<a href="contact_form.php?delete_session=1">Not <? echo $_SESSION['name']; ?>?</a>
<?
}
else {
	?>
		<input type="text" size="25" name="name" value="<? echo $_GET['name']; ?>" />
		<input type="checkbox" name="remember" /> Remember me on this computer

	<?
}

if ($error_code && !($_GET['name'] || $_SESSION['name'])) {
	echo "<b>Please include your name.</b>";
}
?>

</td>
</tr>
<tr>
<td align="right">
Email:
</td><td align="left">
<?
if ($_SESSION['email']) {
	echo $_SESSION['email'];
}
else {
?>
<input type="text" size="25" name="email" value="<? echo $_GET['email']; ?>" />
<?
}
if ($error_code && !($_GET['email'] || $_SESSION['email'])){
	echo "<b>Please include your email address.</b>";
}
?>

</td>
</tr>
<tr>
<td align="right">
Type of Request:
</td>
<td align="left">
<select name="whoami">
<option value="" />Please choose...
<option value="newcustomer"<? 
if ($_GET['whoami'] == "newcustomer") {
   echo " selected";
} 
?> />I am interested in becoming a customer.
<option value="customer"<? 
if ($_GET['whoami'] == "customer") {
   echo " selected";
} 
?> />I am a customer with a general question.
<option value="support"<? 
if ($_GET['whoami'] == "support") {
   echo " selected";
} 
?> />I need technical help using the website.
<option value="billing"<? 
if ($_GET['whoami'] == "billing") {
   echo " selected";
} 
?> />I have a billing question.
</select>
<?
if ($error_code && !($_GET['whoami'])) {
	echo "<b>Please choose a request type.</b>";
}
?>

</td>
</tr>
<tr>
<td align="right">
Subject:
</td>
<td align="left">
<input type="text" size="50" max="50" name="subject" value="<? echo $_GET['subject']; ?>" />
<?
if ($error_code && !($_GET['subject'])){
	echo "<b>Please add a subject for your request</b>";
}
?>

</td>
</tr>
<tr>
<td align="right" valign="top">
Message:
</td>
<td align="left">
<textarea name="message" cols="50" rows="8">
<? echo $_GET['message']; ?>
</textarea>
<?
if ($error_code && !($_GET['message'])) {
	echo "<b>Please fill in a message for us.</b>";
}
?>
</td>
</tr>
<tr>
<td colspan="2" align="left">
How did you hear about us?
<ul>
<input type="radio" name="found" value="wordofmouth" />Word of Mouth<br/>
<input type="radio" name="found" value="search" />Online Search<br/>
<input type="radio" name="found" value="article" />Printed publication/article<br/>
<input type="radio" name="found" value="website" />Online link/article<br/>
<input type="radio" name="found" value="other" />Other
</ul>
</td>
</tr>
<tr>
<td colspan="2">
<input type="checkbox" name="update1" checked="checked" />Please email me updates about your products.<br/>
<input type="checkbox" name="update2" />Please email me updates about products from third-party partners.
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="SUBMIT" />
</td></tr>
</table>
</form>

<?
	require($_SERVER['DOCUMENT_ROOT']."/php - intro course/template_bottom.inc");
?>

</body>

