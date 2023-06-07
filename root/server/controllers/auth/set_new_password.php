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
    $password = $_POST['password'] ?? '';

    $stmt = $pdo->prepare("UPDATE accounts SET pass=? WHERE email=?");
    if ($stmt) {
      $_SESSION['recovery_token'] = null;
      $hashed_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
      $stmt->execute([$hashed_password, $email]);

      $_SESSION['success_upper_message'] = 'Password was successfully changed';
      $response = array(
        'redirect' => 'http://' . $_SERVER['SERVER_NAME'] . '/account'
      );
    } else {
      $response = array(
        'error' => 'An error occurred while updating your password'
      );
    }
  }

  sleep(1);
  header('Content-Type: application/json');
  echo json_encode($response);
}