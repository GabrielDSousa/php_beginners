<?php

require 'data.php';

$filteredAnime = array_filter($anime, function ($item) {
	return $item['writer'] === 'Mari Okada';
});

require 'index.view.php';