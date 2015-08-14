<?php 
class CountRepeats
{
	function countWord($input1, $input2) 
	{
		// This sets both inputs to lowercase
		// to avoid cap issues
		strtolower($input1);
		strtolower($input2);
		
		// This will explode input1 into an array
		// of words then replace anything that is
		// not a letter with nothingness.
		$sentence = explode(" ", $input1);
		$sentence = preg_replace("/[^A-Za-z]/", "", $sentence);
		
		// Renamed input2 for clarity and converted 
		// to an associative array and assigned
		// an integer value of one to keep count
		// of instances of the word
		$word = $input2;
		$word_count = array($word => 1);
		
		// This is the counter variable that 
		// will keep track of instances of the 
		// word searched
		$count = 0;
		
		// This will run through the sentence array
		// and add 1 to the counter each time
		// the word in the sentence matches
		// the word in the associative array
		foreach($sentence as $index) {
			$count += $word_count[$index];
		}
		
		// After the foreach loop is run we
		// return the count
		return $count;
		
	}
}
?>