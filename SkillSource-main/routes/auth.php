<?php
    require_once(__DIR__.'/../Support/autoload.php');

    use Support\Router;
    use Controllers\Auth\AuthController;
    
    Router::get('/login', fn () => view('auth/login'));
    Router::get('/register', fn () => view('auth/register'));
    
    Router::post('/login', [AuthController::class, 'login']);
    Router::post('/register', [AuthController::class, 'register']);
    Router::get('/logout', [AuthController::class, 'logout']);
    Router::get('/profile', fn() => view('auth/profile'));
    require_once __DIR__.'/api.php';