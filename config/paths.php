<?php

function public_url($path = '') {
    $baseUrl = 'http://localhost/auth-app/public';
    return $baseUrl . '/' . ltrim($path, '/');
}