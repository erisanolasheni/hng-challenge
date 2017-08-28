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
	$nump = ['zero','one','two','three','four','five','six','seven','eight','nine','ten','eleven','twelve','thirteen','fourteen','fifteen','sixteen','seventeen','eighteen','nineteen','twenty','thirty','fourty','fifty','sixty','seventy','eighty','ninety'];
	if($number<=20)
	{
		return $nump[$number];
	}
	$next_tens = floor($number/10)*10;
	$rems      = floor($number%10)?floor($number%10):"";
	$mid       = $rems?"-":"";
	return $nump[20+($next_tens-20)/10].$mid.$nump[$rems];
	//Thank you!

}
echo speak_word(19); /*returns 'ninteen'*/
echo speak_word(74); /*returns 'sixty-nine'*/
?>
