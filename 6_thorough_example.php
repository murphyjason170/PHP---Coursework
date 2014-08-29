<?php



$scotts_phonebook = array("kendell" => "555-1234",
				"Trish" => "555-2345",
				"Tony" => "555-3456",
				"Mike" => "555-4567",
				"Debra" => "555-5678",
				"Curt" => "555-6789");

$kendells_phonebook = array("scott" => "555-7890",
				"Trish" => "555-2345",
				"Tony" => "555-3456",
				"Debra" => "555-5678",
				"Kate" => "555-8901");

//here's a phonebook combining both Scott's and Kendell's contacts, no duplicates

$combined_phonebook = array_unique(array_merge($scotts_phonebook, $kendells_phonebook));

echo "<pre> Combined Phonebook:";
print_r($combined_phonebook);
echo "</pre>";


//sort by name - why do you suppose we aren't assigning the return value to anything?

ksort($combined_phonebook);

echo "<pre>Sorted Phonebook:";
print_r($combined_phonebook);
echo "</pre>";


//here's a phonebook containing only mutual friends of Scott and Kendell

$mutual_friends = array_intersect($scotts_phonebook, $kendells_phonebook);

echo "<pre>Mutual Friends:";
print_r($mutual_friends);
echo "</pre>";


//in this custom function called "invite_friend", a phone number is
//called and that friend is invited to a party.

function invite_friend($phone_number, $name) {
   echo "Calling phone number ".$phone_number."...";
   echo "Hello ".$name.".  ".$invited_by." You're invited to a party!<br/>";
}


//Here's a REALLY tricky built-in function we can use to invite ALL friends to the party.
//Careful, this one has lots of rules regarding the second parameter.

array_walk($combined_phonebook, 'invite_friend');

//Finally, generate a random phone number and see if it's in the phonebook.

$random_phonenumber = "555-".strval(rand(1000,9999));

if (in_array($random_phonenumber, $combined_phonebook)) {
   echo "Phone number ".$random_phonenumber." is in the phonebook.";
}
else {
   echo "Phone number ".$random_phonenumber." is not in the phonebook.";
}
?>