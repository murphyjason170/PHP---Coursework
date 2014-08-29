<?
	$Captain_Crunch = 5;
	$Frosted_Flakes = 4;
	$Fruit_Loops = 3;;
	$Oatmeal = 2;
	$my_cash = $_GET["cash_money"];
	
	$total = $Captain_Crunch + $Frosted_Flakes;
 	
	switch($my_cash)
	{
		case "10":
			echo "I'll buy both Capn and Flakes";
			break;
		case "5":
			echo "I'll buy Capn";
			break;
		case "4":
			echo "I'll buy Fruit Loops";
			break;
		case "3":
			echo "I'll buy Frosted Flakes";
			break;
		case "2":
			echo "I'll buy Oatmeal";
			break;
		default:
			echo "Forget it, I'm going home";
	}
	
 
 		
    	
  	
 ?>