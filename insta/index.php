<?php
$routes = require 'routes.php';  

// Get the requested URL path
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Debugging: Check what URI is being received
var_dump($uri);

function abort($code = 404) {
    http_response_code($code);    
    require 'views/404.php';  
    exit();
}

// Check if the requested URI exists in the routes array
if (array_key_exists($uri, $routes)) {
    require  $routes[$uri];  
} else {
    abort();  
}
