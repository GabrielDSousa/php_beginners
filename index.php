<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Demo</title>
	<style>
		body {
			background-color: #000;
			color: #fff;
			font-family: sans-serif, Arial, Helvetica;
			font-size: 1.2rem;
			text-align: center;
			height: 100vh;
			display: grid;
			margin: 0;
			place-items: center;
		}
	</style>
</head>
<body>
	<?php 
		$name = "Dark Matter";
		$read = true;
		$message = "You haven't read $name";

		if($read) {
			$message = "You have read $name";
		}
	?>
	<h1><?= $message ?>.</h1>
</body>
</html>