<?php

namespace Controllers;

use Models\User;
use Support\helper\Helper;


class UsersController {
    public function index() {
        // Fetch data from the model
        // $users = User::getAll();
        $users = User::all();
        User::create([
            'name' => 'Sherif',
            'email' => 'test23@gmail.com',
            'password' => 'password'
        ]);
        // Render the view
        view('about', ['users' => $users]);
    }

}
?>
