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
		}
		li {
			list-style: none;
			margin: 0.8rem 0;
			display: flex;
			flex-direction: column;
			text-align: left;
		}
		ul {
			padding: 0;
		}
		li small {
			font-size: 0.8rem;
			color: #ccc;
		}
	</style>
</head>

<body>
	<?php
		$anime = [
			[
				'title' => 'One Piece',
				'year' => 1999,
				'genre' => 'Action',
				'writer' => 'Eiichiro Oda'
			],
			[
				'title' =>'Gundam Iron Bloded Orphans',
				'year' => 2015,
				'genre' => 'Action',
				'writer' => 'Mari Okada'
			],
			[
				'title' => 'Fullmetal Alchemist Brotherhood',
				'year' => 2009,
				'genre' => 'Action',
				'writer' => 'Hiromu Arakawa'
			],
			[
				'title' => 'Code Geass',
				'year' => 2006,
				'genre' => 'Action',
				'writer' => 'Goro Taniguchi'
			],
			[
				'title' => 'Anohana',
				'year' => 2011,
				'genre' => 'Drama',
				'writer' => 'Mari Okada'
			]
		];

		function filterByWriter(array $anime, string $writer) {
			$filtered = [];
			foreach ($anime as $item) {
				if ($item['writer'] === $writer) {
					$filtered[] = $item;
				}
			}
			return $filtered;
		}
	?>
	<div>
		<h1>Recommended Anime</h1>

		<ul>
			<?php foreach ($anime as $item) : ?>
				<li>
					<?= $item['title'] ?> - <?= $item['year'] ?>
					<small><?= $item['genre'] ?> - <?= $item['writer'] ?></small>
				</li>
			<?php endforeach; ?>
		</ul>

		<h2>Best writer: Mari Okada</h2>
		<ul>
			<?php foreach (filterByWriter($anime, "Mari Okada") as $item) : ?>
				<li>
					<?= $item['title'] ?> - <?= $item['year'] ?>
					<small><?= $item['genre'] ?> - <?= $item['writer'] ?></small>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>

	<p>Currently re-watching: <?= $anime[0]['title']?></p>
</body>

</html>