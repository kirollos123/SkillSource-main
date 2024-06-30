<?php
    namespace Support;

    use Models\User;


    // auth.php
class Auth {
    public static function login($email, $password) {
        $user = User::where('email', $email);
        if (!$user) {
            return false;
        }
        $user = $user[0];
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            return true;
        }
        return false;
    }
    public static function user() {
        return auth();
    }
    public static function logout() {
        // Implement logout logic
        unset($_SESSION['user']);
        session_destroy();
    }

    public static function RedirectIfGuest() {
        return isset($_SESSION['user']);
    }

    public static function getCurrentUserId() {
        return isset($_SESSION['user']) ? $_SESSION['user']['id'] : null;
    }

    public static function register($email, $password, $name, $phone, $accountType) {
        try {
            User::create([
                ':name' => $name,
                ':email' => $email,
                ':password' => password_hash($password, PASSWORD_DEFAULT),
                ':phone' => $phone,
                ':account_type' => $accountType
            ]);
            return User::exists('email', $email);
        } catch (\Exception $e) {
            return view('errors/500', ['message' => isset($e->errorInfo[2]) ? $e->errorInfo[2] : 'An error occurred']);
        }
        
    }
}

    