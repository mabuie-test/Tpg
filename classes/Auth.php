<?php
// classes/Auth.php
session_start();

class Auth {
    public static function check() {
        return isset($_SESSION['user']);
    }

    public static function user() {
        return $_SESSION['user'] ?? null;
    }

    public static function attempt($email, $password) {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        if ($user && password_verify($password, $user['senha_hash'])) {
            unset($user['senha_hash']);
            $_SESSION['user'] = $user;
            return true;
        }
        return false;
    }

    public static function logout() {
        session_unset();
        session_destroy();
    }
}
