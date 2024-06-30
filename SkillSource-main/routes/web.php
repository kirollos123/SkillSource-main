<?php
    
    require_once __DIR__.'/../Support/autoload.php';
    require_once __DIR__.'/auth.php';

use Controllers\CommentsController;
use Support\Router;

    use Controllers\UsersController;
    use Controllers\JobsController;
    use Support\Request;

    // Example usage
    // Define routes
    Router::get('/users', [UsersController::class, 'index']);
    Router::view('/', 'home');
    Router::view('/dashboard', 'dashboard');
    Router::view('/team','team');
    Router::view('/home', 'home');
    Router::view('/status','200');


    Router::get('/job/create', [JobsController::class, 'create']);
    Router::post('/job/create', [JobsController::class, 'store']);

    Router::get('/job/{id}', [JobsController::class, 'show']);
    Router::get('/job/{id}/delete', [JobsController::class, 'delete']);

    Router::post('/job/{id}/comment', [CommentsController::class, 'store']);
    Router::get('/job/{id}/apply', [JobsController::class, 'apply']);

    Router::get('/job/{id}/candidates', [JobsController::class, 'candidates']);
    Router::get('/job/{id}/candidate/{jobseeker}', [JobsController::class, 'candidate']);

    Router::get('/jobs/manage', [JobsController::class, 'manage']);


    // Dispatch the request
    $request = Request::getInstance($_REQUEST);
    $requestUrl = $_SERVER['REQUEST_URI'];
    $requestUrl = explode('?', $requestUrl)[0];
    Router::dispatch($requestUrl, $_SERVER['REQUEST_METHOD']);
    