<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];


/**
 * @return void
 */
function abort($http_status_code = 404) {
    http_response_code($http_status_code);
    require "views/{$http_status_code}.view.php";
    die();
}


/**
 * @param $uri
 * @param $routes
 * @return void
 */
function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);