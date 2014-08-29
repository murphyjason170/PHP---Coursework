<ol style="font-size:16px;">
	<li>PHP is part of the LAMP stack.</li>
	<?
		$lamp_l = "Linux";
		$lamp_a = "Apache";
		$lamp_m = "MySQL";
		$lamp_p = "PHP";
		
		echo "<br>The stack begins with " .$lamp_l ." and goes on to include " .$lamp_a.", ".$lamp_m.", and ".$lamp_p."!<br>";
	?>
	<?
		$base_salary = 100000;
		$bonus = 25815.25;
		$benefits = 0.2;
		$time_off = 6476;
		$benefits = "To be determined";
	?>

	<br/>
	<ul>
	<li>My base salary might be: <? echo $base_salary; ?></li>
	<li>My bonus might be: <? echo $bonus; ?> </li>
	<li>My benefits might be: <? echo $benefits; ?></li>
	<li>My time off might be worth: <? echo $time_off; ?></li>
	<li>My Base Salary plus Bonus would total: <? echo $base_salary + $bonus; ?></li>
	</ul>
</ol>

