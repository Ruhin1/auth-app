<?php

require_once __DIR__ . '/vendor/autoload.php';

use Core\Router;

// Start session
session_start(); 

// Load Routes
require_once __DIR__ . '/routes/web.php';

// Handle the request
$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];
$router->handle($requestUri, $requestMethod);
