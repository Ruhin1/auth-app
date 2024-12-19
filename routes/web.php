<?php

use Core\Router;
use App\Middlewares\Authenticate;

$router = new Router();

// $router->get('/about', 'PageController@about', [Authenticate::class]);



// Home Route
$router->get('/', 'PageController@home'); 

// Auth
$router->get('/register', 'auth.authController@register'); 
$router->get('/login', 'auth.authController@login'); 
$router->get('/email-verification', 'auth.authController@emailVerification'); 
$router->get('/forget-password', 'auth.authController@forgetPassword'); 
$router->get('/new-password', 'auth.authController@newPassword'); 




//profile
$router->get('/profile', 'profile.profileController@index'); 



 