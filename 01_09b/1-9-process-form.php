<?php
function process_form()
{
	// Challenge: define this function
	if (isset($_POST['submit'])) {
		foreach ($_POST as $label => $value) {
			if ('submit' !== $label) {
				echo "$value";
			}
		}
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Process Form</title>
	<meta name="author" value="Joe Casabona" />
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<main>
		<form name="contact" method="POST">
			<div>
				<label for="name">Name:</label>
				<input type="text" name="name" placeholder="What's Your Name?" />
			</div>
			<div>
				<label for="email">Email:</label>
				<input type="email" name="email" placeholder="What's Your Email?" />
			</div>
			<div>
				<label for="message">Your Message:</label>
				<textarea name="message"></textarea>
			</div>
			<div><input type="submit" name="submit" value="Send Message" /></div>
			<pre><?php process_form(); ?></pre>
		</form>
	</main>
</body>

</html>