<?
function mantra($the_sound,$the_number = 10) {
   $chant = 1;
   while ($chant <= $the_number) {
       echo $the_sound."... ";
       $chant++;
   }
}

function Mood_Chant($my_mood){
   if ($my_mood == "happy") {
      mantra("OM");
      $after_chant = "<br/>I feel serene now.";
   }
   else if ($my_mood == "sad") {
      mantra("okay");
      $after_chant = "<br/>I feel better now.";
   }
   else if ($my_mood == "angry") {  
      mantra("mississippi");
      $after_chant = "<br/>Ahhh, much better.  I've calmed down now.";
   }
   else if ($my_outlook == "indifferent") {
      mantra("Wake up");
      $after_chant = "<br/>I'm awake now.";
   }      
   else {  
      mantra("Try harder");
      $after_chant = "<br/>I'll try harder now.";
   }
   return $after_chant;  
}
    
function whats_my_emotion($cereal_prices, $cash_money) {
   $total = array_sum($cereal_prices);  //array_sum is a built-in PHP function
   if ($total < $cash_money) {
      $mood = "happy";
      echo "I'll buy both Captain Crunch and Fruit Loops!";
   }
   else if ($cereal_prices['Captain_Crunch'] < $cash_money ) {
      $mood = "indifferent";
      echo "I'll buy Captain Crunch.";
   }
   else if ($cereal_prices['Captain_Crunch'] > $cash_money && $cereal_prices['Fruit_Loops'] < $cash_money ){ 
      $mood = "angry";
      echo "Fine!  I'll get some Fruit Loops.";
   }
   else {
      # debug code
      echo "Within whats_my_emotion, \$cereal_prices:<pre>";
      print_r($cereal_prices);
      echo "\$my_cash = ".$my_cash."</pre>";

      $mood = "sad";
      echo "Oh well, I'm going home.";
   }
   return $mood;
}
?>
<h3>The emotional roller-coaster of buying breakfast cereal</h3>
<?
$cereal_prices = array('Captain_Crunch' => 5, 'Fruit_Loops' => 3);
$my_cash = 4;
?>
I have $<? echo $my_cash; ?> in my pocket, and I want to buy some Captain Crunch!<br/>
<ul>
<li>Captain Crunch costs $<? echo $cereal_prices['Captain_Crunch']; ?></li>
<li>Fruit Loops costs $<? echo $cereal_prices['Fruit_Loops']; ?></li>
</ul>

<?
$my_mood = whats_my_emotion($cereal_prices, $my_cash); 

// Debugging Code
echo "\$my_mood is $my_mood";

if (!($my_mood == "sad")) {
   $after_chant_mood = Mood_Chant($my_mood, $chant_number);
}
echo "<br/>".$after_chant_mood;
    
?>   