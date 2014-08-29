<?php

$word_to_translate = $_GET["word_to_translate"];

# This is where the magic happens:
function translate_to_pig_latin($the_word) 
{

	if (preg_match("/^((b|c|d|f|g|h|j|k|l|m|n|p|q|r|s|t|v|w|x|y|z)+)([a|e|i|o|u])+(.*)/", $the_word))
	{	
		$word_post_latinized = preg_replace("/((b|c|d|f|g|h|j|k|l|m|n|p|q|r|s|t|v|w|x|y|z)+)([a|e|i|o|u])+(.*)/", "$3$4-$1ay", $the_word);
		return $word_post_latinized;
	}
	else if ( preg_match("/([a|e|i|o|u]+)([^a|e|i|o|u])(.*)/", $the_word))
	{
		
		$word_post_latinized = preg_replace("/([a|e|i|o|u]+)([^a|e|i|o|u])(.*)/", "$2$3-$1hay", $the_word);
		return $word_post_latinized;
	}
	else
	{
		echo "Sorry I didn't match on anything";
	}
}

# Make all letters lower case
$translated_word = strtolower($translated_word);

# Send the word to translate to the translate_to_pig_latin function
$translated_word = translate_to_pig_latin($word_to_translate);

# Display to the user the translated word
echo "<h3>$word_to_translate has been changed to $translated_word.</h3>";

?>