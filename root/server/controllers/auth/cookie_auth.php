<?php
include '../server/configs/connect_users.php';

if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];

    $query = "SELECT id, email, pass, verified FROM accounts WHERE email=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['pass'])) {
        $_SESSION['loggedin'] = true;
        header('Location: /account');
        exit();
    }
} 