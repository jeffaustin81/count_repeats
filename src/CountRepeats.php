<?php 
class CountRepeats
{
	function countWord($input1, $input2) 
	{
		strtolower($input1);
		strtolower($input2);
		
		$sentence = explode(" ", $input1);
		$word = $input2;
		
		if(in_array($word, $sentence)) 
		{
			return true;
		}else {
			return false;
		}
	}
}
?>