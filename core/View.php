<?php

namespace Core;

class View
{
    public static function render($view, $data = [])
    {
        extract($data);
        $view = str_replace('.','/',$view);
        require __DIR__ . "/../app/Views/{$view}.php";
    }
} 
