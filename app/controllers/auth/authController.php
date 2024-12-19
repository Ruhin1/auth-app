<?php
namespace  App\Controllers\auth;
use Core\View;

class authController
{
    public function register()
    {
        View::render('auth.register', ['data' => 'Home Page']); 
    }

    public function login()
    {
        View::render('auth.login', ['data' => 'Home Page']); 
    }

    public function emailVerification()
    {
        View::render('auth.email-verification', ['data' => 'Home Page']); 
    }

    public function forgetPassword()
    {
        View::render('auth.forget-password', ['data' => 'Home Page']); 
    }

    public function newPassword()
    {
        View::render('auth.new-password', ['data' => 'Home Page']); 
    }

    
}