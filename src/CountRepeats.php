<?php 
class CountRepeats
{
	function countWord($input1, $input2) 
	{
		strtolower($input1);
		strtolower($input2);
		
		$sentence = explode(" ", $input1);
		$sentence = preg_replace("/[^A-Za-z]/", "", $sentence);
		$word = $input2;
		$word_count = array($word => 1);
		
		$count = 0;
		
		foreach($sentence as $index) {
			$count += $word_count[$index];
		}
		
		return $count;
		
	}
}
?>