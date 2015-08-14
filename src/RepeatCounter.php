<?php 
class RepeatCounter
{
	function countWord($input1, $input2) 
	{
		if($input1 === "" || $input2 === "") {
			return "You didn't fill in one or both text fields!"
		}
		
		// This sets both inputs to lowercase
		// to avoid cap issues
		$input1_low = strtolower($input1);
		$input2_low = strtolower($input2);
		
		// Renamed input2 for clarity and converted 
		// to an associative array and assigned
		// an integer value of one to keep count
		// of instances of the word
		$word = $input2_low;
		// Array below commented out because 
		// foreach further down wouldn't run
		// even though it passed in test
		// $word_count = array($word => 1);
		
		// This will explode input1 into an array
		// of words then replace anything that is
		// not a letter with nothingness.
		$sentence = explode(" ", $input1_low);
		$sentence = preg_replace("/[^A-Za-z]/", "", $sentence);
		
		// This is the counter variable that 
		// will keep track of instances of the 
		// word searched
		$count = 0;
		
		// This will run through the sentence array
		// and add 1 to the counter each time
		// the word in the sentence matches
		// the word in the associative array
		foreach($sentence as $index) {
			// Below commented out because it 
			// failed to run in Silex even though
			// it passed tests. I was getting a
			// undefined error for the first index
			// of $sentence...
			
			// $count += $word_count[$index];
			
			// Added an if check instead
			if($index === $word) {
				$count++;
			}
		}
		
		// After the foreach loop is run we
		// return the count
		return $count;
		
		
		
	}
}
?>
