<?php 
	// Yeah I originally named my class CountRepeats
	// and forgot to change it in my test
	
	require_once "src/RepeatCounter.php";
	
	class RepeatCounterTest extends PHPUnit_Framework_TestCase
	{
		// I had to comment out this test because
		// it expects a boolean return and I couldn't
		// get it to pass as all tests moving
		// forward would expect an integer return
		// not sure how I could of avoided it?
		// function test_countWord_wordtrue()
		// {
		// 	$test_RepeatCounter = new RepeatCounter;
		// 	$input1 = "The quick brown fox jumped over the fence";
		// 	$input2 = "fox";
			
		// 	$result = $test_RepeatCounter->countWord($input1, $input2);
			
		// 	$this->assertEquals(true, $result);
		// }
		
		function test_countWord_wordcount1()
		{
			$test_RepeatCounter = new RepeatCounter;
			$input1 = "Where is the nearest diner? Is there a diner on 5th and Washington?";
			$input2 = "diner";
			
			$result = $test_RepeatCounter->countWord($input1, $input2);
			
			$this->assertEquals(2, $result);
		}
		
		function test_countWord_wordcount2()
		{
			$test_RepeatCounter = new RepeatCounter;
			$input1 = "How much wood would a woodchuck chuck if a woodchuck could chuck wood";
			$input2 = "wood";
			
			$result = $test_RepeatCounter->countWord($input1, $input2);
			
			$this->assertEquals(2, $result);
		}
		
		function test_countWord_wordcount3()
		{
			$test_RepeatCounter = new RepeatCounter;
			$input1 = "Where is Portland? How many times have you been to Portland? What is Portland like?";
			$input2 = "Portland";
			
			$result = $test_RepeatCounter->countWord($input1, $input2);
			
			$this->assertEquals(3, $result);
		}
	}
?>
