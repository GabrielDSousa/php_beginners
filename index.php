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
	<div>
		<h1>Recommended Anime</h1>

		<?php
			$animes = [
				'One Piece',
				'Gundam Iron Bloded Orphans',
				'Fullmetal Alchemist Brotherhood',
				'Code Geass'
			];
		?>

		<ul>
			<?php foreach ($anime as $title) : ?>
				<li><?= $title ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
</body>

</html>