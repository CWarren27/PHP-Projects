<html>

<title>Dice Game</title>

<body>

<p>	Reload page or <a href="dice.php">click</a> to play again.</p>

<?php

for();
	 {
	$mynum1 = rand(1, 6);
	$mynum2 = rand(1, 6);
	$mynum3 = rand(1, 6);
	$mynum4 = rand(1, 6);

	$playertotal = $mynum1 + $mynum2 + $mynum3 + $mynum4;
	$housetotal = $mynum1 + $mynum2 + $mynum3 + $mynum4;


	myarray("", "dice1.png", "dice2.png", "dice3.png", "dice4.png", "dice5.png", "dice6.png");

	print $dice['dice'];


	{
	if ($playertotal < $housetotal)
	{
	
		print $myarray['dice'];
		print "<img src='dice' . $dice . '.png' />";
		print $dice;
		print "You lose!";
	}
	if ($housetotal < $playertotal)
	{
		print "<img src='dice' . $dice . '.png' />";
		print $dice;
		print "You win!";
	}
	if ($playertotal == $housetotal)
	{
		print "<img src='dice' . $dice . '.png' />";
		print $dice;
		print "It's a tie!";
	}

}


?>