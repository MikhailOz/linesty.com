<?php
session_start();
include '../../configs/connect_users.php';
include '../../configs/recaptcha.php';
include 'input_validation.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $recaptcha_response = validateRecaptcha();
  validateInputs();

  if (isset($recaptcha_response['error'])) {
    $response = $recaptcha_response;
  } else {
    $email = $_SESSION['email'];
    $recovery_token = $_SESSION['recovery_token'];
    unset($_SESSION['email']);
    unset($_SESSION['recovery_token']);
    $password = $_POST['password'] ?? '';

    $hashed_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

    $stmt = $pdo->prepare("UPDATE accounts SET pass=?, last_changed_pass=?, recovery_token='', recovery_token_expiry=NULL WHERE email=? AND recovery_token=?");
    if ($stmt) {
      $stmt->execute([$hashed_password, date('Y-m-d H:i:s'), $email, $recovery_token]);

      $_SESSION['success_upper_message'] = 'Password was successfully changed';
      $response = [
        'redirect' => 'http://' . $_SERVER['SERVER_NAME'] . '/account'
      ];
    } else {
      $response = [
        'error' => 'An error occurred in the database'
      ];
    }
  }

  sleep(1);
  echo json_encode($response);
}