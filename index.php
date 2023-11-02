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
			height: 100vh;
			display: grid;
			margin: 0;
			place-items: center;
			text-align: left;
		}

		li {
			list-style: none;
			margin: 0.8rem 0;
			display: flex;
			flex-direction: column;
		}

		ul {
			padding: 0;
		}

		li small {
			font-size: 0.8rem;
			color: #ccc;
		}

		section,
		p {
			border-bottom: #fff solid 1px;
		}

		p {
			padding-bottom: 1em;
		}

		h1 {
			font-size: 2rem;
			margin-bottom: 0.8rem;
		}

		h2 {
			font-size: 1.6rem;
			margin-bottom: 0.8rem;
		}
	</style>
</head>

<body>
	<?php
	$anime = [
		[
			"title" => "One Piece",
			"year" => 1999,
			"genre" => "Action",
			"writer" => "Eiichiro Oda"
		],
		[
			"title" => "Gundam Iron Bloded Orphans",
			"year" => 2015,
			"genre" => "Action",
			"writer" => "Mari Okada"
		],
		[
			"title" => "Fullmetal Alchemist Brotherhood",
			"year" => 2009,
			"genre" => "Action",
			"writer" => "Hiromu Arakawa"
		],
		[
			"title" => "Code Geass",
			"year" => 2006,
			"genre" => "Action",
			"writer" => "Goro Taniguchi"
		],
		[
			"title" => "Anohana",
			"year" => 2011,
			"genre" => "Drama",
			"writer" => "Mari Okada"
		]
	];

	$filteredAnime = array_filter($anime, function ($item) {
		return $item['writer'] === 'Mari Okada';
	});
	?>
	<div>
		<section name="recommended">
			<h1>&#128250;Recommended Anime</h1>
			<ul>
				<?php foreach ($anime as $item) : ?>
					<li>
						<?= $item['title'] ?> - <?= $item['year'] ?>
						<small><?= $item['genre'] ?> - <?= $item['writer'] ?></small>
					</li>
				<?php endforeach; ?>
			</ul>
		</section>

		<section name="best-writer">
			<h2>&#127775;Best writer: Mari Okada</h2>
			<ul>
				<?php foreach ($filteredAnime as $item) : ?>
					<li>
						<?= $item['title'] ?> - <?= $item['year'] ?>
						<small><?= $item['genre'] ?> - <?= $item['writer'] ?></small>
					</li>
				<?php endforeach; ?>
			</ul>
		</section>

		<p>Currently re-watching: <?= $anime[0]['title'] ?></p>
	</div>
</body>

</html>