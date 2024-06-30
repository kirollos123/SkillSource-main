<?php
namespace Controllers\Auth;

use Models\User;
use Support\Auth;
use Support\DB;
use Support\Request;

class AuthController
{

    public function login() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if (Auth::login($email, $password) == 1) {
            header("Location: /home", true);
        } else {
            header("Location: /login?error=invalid_credentials", true);
        }
    }

    public function profileUpdate() {
        $req = Request::getInstance();
        $name = $req->name;
        $email = $req->email;
        $phone = $req->phone;
        $password = $req->password;
        $user = Auth::user();
        if ($password != null) {
            $password = password_hash($password, PASSWORD_DEFAULT);
        } else {
            $password = $user->password;
        }
        User::update($user->id, ['name' => $name, 'email' => $email, 'phone' => $phone, 'password' => $password]);
        header("Location: /profile?success=profile_updated");
    }
    public function logout() {
        Auth::logout();
        header("Location: /login");
    }

    public function register() {
        $req = Request::getInstance();
        $name = sanitize_input($req->firstName .' '. $req->lastName);
        $email = validate_email($req->email);
        $password = sanitize_input($req->password);
        $password_confirmation = sanitize_input($req->passwordConfirmation);
        $phone = sanitize_input($req->phone);
        $accountType = sanitize_input($req->account_type);
        if(!passwordConfirmation($password, $password_confirmation)) header("Location: /register?error=password_mismatch");
        // return '<pre>'.print_r($req, true).'</pre>';
        // print_r(DB::query('select @@sql_mode'));
         if (Auth::register($email, $password, $name, $phone, $accountType) == 1) {
            header("Location: /login", true);
        }
}
}