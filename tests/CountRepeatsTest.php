<?php 
	require_once "src/CountRepeats.php";
	
	class CountRepeatsTest extends PHPUnit_Framework_TestCase
	{
		// function test_countWord_wordtrue()
		// {
		// 	$test_CountRepeats = new CountRepeats;
		// 	$input1 = "The quick brown fox jumped over the fence";
		// 	$input2 = "fox";
			
		// 	$result = $test_CountRepeats->countWord($input1, $input2);
			
		// 	$this->assertEquals(true, $result);
		// }
		
		function test_countWord_wordcount1()
		{
			$test_CountRepeats = new CountRepeats;
			$input1 = "Where is the nearest diner? Is there a diner on 5th and Washington?";
			$input2 = "diner";
			
			$result = $test_CountRepeats->countWord($input1, $input2);
			
			$this->assertEquals(2, $result);
		}
	}
?>