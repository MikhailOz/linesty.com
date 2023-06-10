<?php
include '../server/configs/connect_users.php';

$stmt = $pdo->prepare('SELECT id FROM accounts WHERE confirmation_token=?');
$stmt->execute([$confirmation_token]); // Assuming you have defined the variable $confirmation_token

$user_id = $stmt->fetchColumn();
print_r($stmt->errorInfo());

if ($user_id) {
  $query = "UPDATE accounts SET confirmation_token='', verified='Y' WHERE id=:user_id";
  $updateStmt = $pdo->prepare($query);
  $updateStmt->execute(['user_id' => $user_id]);

  $_SESSION['success_upper_message'] = 'The email has been successfully confirmed';
  header('Location: /account');
  exit;
}

$_SESSION['unsuccess_upper_message'] = 'The email confirmation token provided is invalid';
header('Location: /account');
exit;