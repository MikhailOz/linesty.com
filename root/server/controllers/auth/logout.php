<?php
session_start();
unset($_SESSION['loggedin']);
setcookie('email', '', time() - 3600, '/');
setcookie('password', '', time() - 3600, '/');
$_SESSION['success_upper_message'] = "You've successfully logged out";
header('Location: /account');
exit;
?>