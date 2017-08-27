<?php
//Hello, this is just a simple PHP code to speak numbers in words from 0 - 99
function speak_word($number)
{
	if($number<0 || $number >99)
	{
		return "Number should be between 0 and 99, thanks";
	}
	if(!is_numeric($number))
	{
		return "Please enter a valid number!";
	}
	$number = (int)$number;
	$nump = ['zero','one','two','three','four','five','six','seven','eight','nine','ten','eleven','twelve','thirteen','fourteen','fifteen','sixteen','seventeen','eighteen','nineteen','twenty','thirty','fourty','fifty','sixty','seven','eighty','ninety'];
	if($number<=20)
	{
		return $nump[$number];
	}
	$next_tens = floor($number/10);
	$rems      = floor($number%10);

	return $nump[$next_tens]."-".$nump[$rems];
	//Thank you!

}
?>