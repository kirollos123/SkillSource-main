<?php

use Support\Auth;

    session_start();

    function redirect($uri) {
        header('Location: '.$uri);
    }

    function isLoggedIn() {
        return isset($_SESSION['user']);
    }

    function RedirectIfGuest() {
        if (!isset($_SESSION['user'])) header('Location: /login');
        return true;
    }
    function isGuest() {
        if (isset($_SESSION['user'])) header('Location: /home');
    }

    function redirectIfJobSeeker() {
        RedirectIfGuest();
        if (Auth::user()->account_type != 'Recuiter')
            back();
    }

    function isJobSeeker() {
        RedirectIfGuest();
        return Auth::user()->account_type == 'jobseeker';
    }

    function isRecuiter() {
        RedirectIfGuest();
        return Auth::user()->account_type == 'Recuiter';
    }

    function redirectIfRecuiter() {
        RedirectIfGuest();
        if (Auth::user()->account_type != 'jobseeker')
            back();
    }

    function view($view, $data = []) {
        // echo $view;
        // print_r($data);
        extract($data); // Extract data array into variables
        include_once(__DIR__."/../../views/{$view}.php"); // Include the view file
    }

    function json($data) {
        return json_encode($data);
    }

    function sanitize_input($input) {
        // Remove whitespace from the beginning and end
        $input = trim($input);
        // Remove any HTML tags and encode special characters
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        return $input;
    }

    function validate_email($email) {
        $sanitized_email = sanitize_input($email); // Sanitize input
        $email = filter_var($sanitized_email, FILTER_SANITIZE_EMAIL); // Sanitize email
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function auth() {
        if (isset($_SESSION['user']))
            return new ArrayObject($_SESSION['user'], ArrayObject::ARRAY_AS_PROPS);
    }

    function passwordConfirmation($password, $password_confirmation) {
        return $password === $password_confirmation;
    }

    function env($key, $default = null)
    {
        $envFile = __DIR__ . '/../../.env';
    
        if (!file_exists($envFile)) {
            return getenv($key) ?: $default;
        }
    
        $env = parse_ini_file($envFile);
    
        if (isset($env[$key])) {
            return $env[$key];
        }
    
        return $default;
    }

    function back() {
        if (isset($_SERVER['HTTP_REFERER'])) {
            header('Location: '.$_SERVER['HTTP_REFERER']);
        } else {
            header('Location: /');
        }
    }

    function request() {
        return Support\Request::getInstance();
    }