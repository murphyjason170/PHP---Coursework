<?

function mantra($the_sound, $the_number = 10){
	for ($chant = 1; $chant <= $the_number; $chant++){
		echo "$the_sound...";
	}
}

function Mood_Chant($my_mood, $chant_number = 10){

echo "INSIDE the Mood_Chant function, your mood is ".$my_mood.".<br>";
	if ($my_mood == "happy"){
		mantra("OM", $chant_number);	
		$after_chant = "<br>I feel serene now";	
	}
	else if ($my_mood == "sad"){
 		mantra("okay", $chant_number);
 		$after_chant = "<br>I feel better now";
 	}
 	else if ($my_mood == "angry"){
 		mantra("mississippi", $chant_number);
 		$after_chant = "<br>I've calmed down now";
 	}
	else if ($my_mood == "indifferent"){
		mantra("Wake up", $chant_number);	
		$after_chant = "<br>I'm awake now";
	}
 	else {
		mantra("Try harder", $chant_number);		
		$after_chant = "<br>I'll try harder now";
 	}
 	return $after_chant;
}
 	
 	$my_mood = $_GET["my_mood"];
 	$chant_number = $_GET["my_number"];
 	
	$after_chant_mood = Mood_Chant($my_mood, $chant_number);
	echo $after_chant_mood;	 	
  ?>

	