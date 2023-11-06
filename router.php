<?php

require "helpers/url.php";
require "helpers/error.php";

$uri = $_SERVER['REQUEST_URI'];

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contact" => "controllers/contact.php"
];

function routeToController($uri, $routes) {
    $url = parse_url($uri)['path'];
    if(array_key_exists($url, $routes)) {
        require $routes[$url];
    }else {
        abort();
    }
}

routeToController($uri, $routes);