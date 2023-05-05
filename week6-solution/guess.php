<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Sagar S Ratod </title>
</head>

<body>
	<h1> Welcome to my guessing game</h1>

	<?php
	$correctnumber = 26;
	if (isset($_GET['guess'])) {
		if (is_numeric($_GET['guess']) === FALSE) {
			echo "Your guess is not a number";
		} else if ($_GET['guess'] < $correctnumber) {
			echo "Your guess is too low";
		} else if ($_GET['guess'] > $correctnumber) {
			echo "Your guess is too high";
		} else if ($_GET['guess'] == $correctnumber) {
			echo "Congratulations - You are right";
		}
	} else {
		echo "Missing guess parameter";
	}
	?>
</body>

</html>