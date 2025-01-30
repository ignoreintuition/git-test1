<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
		<h1> ITIS-5166 Week 02</h1>
		<p> this is an example of working with files that execute at runtime </p>
		<p>
			<?php 
			$min = 1;
			$max = 100;
			$n1 = rand($min, $max);
			$n2 = rand($min, $max);
			echo "Multiply the two random numbers " . $n1 . " and " .$n2;
			echo "<h2>" . $n1 * $n2 . "</h2>"
			?>
		</p>
</body>
</html>
