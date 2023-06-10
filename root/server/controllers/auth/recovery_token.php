<?php
include '../server/configs/connect_users.php';

$stmt = $pdo->prepare('SELECT email, recovery_token_expiry FROM accounts WHERE recovery_token=?');
$stmt->execute([$_GET['recovery_token']]);

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
  $currentDatetime = date('Y-m-d H:i:s');

  if ($currentDatetime <= $result['recovery_token_expiry']) {
    $_SESSION['email'] = $result['email'];
    $_SESSION['recovery_token'] = $_GET['recovery_token'];
    $_SESSION['success_upper_message'] = 'Provided token is valid for recovery';
    include_once "auth/set_new_password.php";
    exit;
  }
}

$_SESSION['unsuccess_upper_message'] = 'Provided token is invalid';
header('Location: /account');
exit; 