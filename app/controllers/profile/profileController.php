<?php

namespace App\Controllers\profile;

use Core\View;

class profileController
{
    public function index()
    {
        View::render('profile.profile', ['data' => 'Home Page']);
    }
}
