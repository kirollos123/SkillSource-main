<?php

use Models\User;
use Support\Router;

$data = [
    'name' => 'John Doe',
    'email' => 'test@gmail.com',
    'password' => 'password'
];

$jsonData = json_encode($data);

Router::get('/user', function () {
    echo json(User::all());
});