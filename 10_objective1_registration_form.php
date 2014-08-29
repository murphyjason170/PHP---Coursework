<?php

if ( $_GET['error'] == "1") {
	$error_code = 1;
}
?>


<head>
	<link rel="stylesheet" href="6_objective2.css">
</head>

<body>
	<h3>Registration Form</h3>
		<?
		if ($error_code) {
		echo "<div style='color:red'>Please help us with the following:</div>";
		}
		?>
		
	<form method="GET" action="/php - intro course/10_objective1_registration.php">
	
	<table>
	<tr>
		<td align="right"> First Name: </td>
		<td align="left">
			<input type="text" size="25" name="first_name" value="<? echo $_GET['first_name']; ?>" />
			<?
			if ($error_code && !($_GET['first_name'])) {
				echo "<b>Please include your first name.</b>";
			}
			?>
		</td>
	</tr>

	<tr>
		<td align="right">Last Name: </td>
		<td align="left"><input type="text" size="25" name="last_name" value="<? echo $_GET['last_name']; ?>" />
		
			<?
			if ($error_code && !($_GET['last_name'])) {
				echo "<b>Please include your last name.</b>";
			}
			?>
		</td>
	</tr>

	<tr>
		<td align="right">Email: </td>
		<td align="left"><input type="text" size="25" name="email" value="<? echo $_GET['email']; ?>" />
			<?
			if ($error_code && !($_GET['email'])){
				echo "<b>Please include your email address.</b>";
			}
			?>
	</td>
	</tr>

	<tr>
	<td colspan="2" align="center">
		<input type="submit" value="SUBMIT" />
	</td></tr>


</table>
</form>
</body>
