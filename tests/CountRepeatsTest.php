<?php 
	require_once "src/CountRepeats.php";
	
	class CountRepeatsTest extends PHPUnit_Framework_Test
	{
		function test_countWord_wordtrue()
		{
			$test_CountRepeats = new CountRepeats;
			$input1 = "The quick brown fox jumped over the fence";
			$input2 = "fox";
			
			$result = $test_CountRepeats->countWord($input1, $input2);
			
			$this->assertsEquals(true, $result);
		}
	}
?>