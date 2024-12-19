<?php

namespace App\Middlewares;

use Core\Middleware;

class Authenticate implements Middleware
{
    public function handle()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        return true;
    }
}
