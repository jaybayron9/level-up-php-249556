<?php
$show = true;
function generate_number()
{
	//Fill this out
	return $guess = rand(0, 50);
	// setcookie('guess_this', $guess);
	// $_COOKIE['guess_this'] = $guess;
}

function check_guess()
{
	// Fill this out
	switch ($_COOKIE['guess_this']) {
		case $_POST['guess'] < $_COOKIE['guess_this']:
			echo $_COOKIE['guess_this'];
			echo 'Too low';
			break;
		case $_POST['guess'] > $_COOKIE['guess_this']:
			echo 'too high';
			break;
		default:
			echo 'Your guess is correct!';
			$show = false;
			break;
	}
}

function test_game()
{
	echo '<pre>Test Data <br/>';
	echo '<b>Number to Guess: ' . $_COOKIE['guess_this'] . '</b> <br/>';
	echo '<b>Guessed Number: ' . $_POST['guess'] . '</b>';
	echo '</pre>';
}


generate_number(); //This call will generate the number and store it in a cookie! 

if (isset($_POST['submit'])) {
	echo check_guess();
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Guess a Number! </title>
	<meta name="author" value="Joe Casabona" />
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<main>
		<!---Place the guess feedback / messages here-->
		<?php if ($show == true) { ?>
			<form name="guess" method="POST">
				<input type="number" name="guess" min="0" max="50" placeholder="Enter your guess" />
				<input type="submit" name="submit" value="Make Your Guess!" />
			</form>
		<?php } else {
		?>
			<form name="guess" method="POST">
				<input type="submit" name="submit" value="Guess Again" />
			</form>
		<?php
		} ?>
	</main>
</body>

</html>