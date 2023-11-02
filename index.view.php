<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>Demo</title>
</head>

<body>
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