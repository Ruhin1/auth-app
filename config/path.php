<?php

namespace Config;

class Path {
    const BASE_PATH = __DIR__ . '/../';
    const PUBLIC_PATH = self::BASE_PATH . 'public';

    public static function base_path($path = '') {
        return self::BASE_PATH . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    public static function public_path($path = '') {
        return self::PUBLIC_PATH . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    public static function public_url($path = '') {
        $baseUrl = 'http://localhost/auth-app/public';
        return $baseUrl . '/' . ltrim($path, '/');
    }
}

?>