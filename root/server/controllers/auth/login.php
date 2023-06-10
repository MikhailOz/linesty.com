<?php
session_start();

include '../../configs/recaptcha.php';
include 'input_validation.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $recaptcha_response = validateRecaptcha();
    validateInputs(); 

    if (isset($recaptcha_response['error'])) {
      $response = $recaptcha_response;
    } else {
      include '../../configs/connect_users.php';
      
      $email = trim($_POST['email'] ?? '');
      $password = $_POST['password'] ?? ''; 
      $query = "SELECT id, email, pass, verified FROM accounts WHERE email=?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$email]);
      $user = $stmt->fetch(); 

      if (!$user) {
        $response = array(
          'error' => 'The account you are trying to access is invalid'
        );
      } elseif ($user['verified'] == 'N') {
        $response = array(
          'error' => 'Verify your email before accessing the account'
        );
      } elseif (!password_verify($password, $user['pass'])) {
        $response = array(
          'error' => 'Incorrect username or password'
        );
      } else {
        $_SESSION['loggedin'] = true;

        if (isset($_POST['keep_signed'])) {
          if ($_POST['keep_signed']) {
            setcookie('email', $email, time() + (86400 * 30), "/"); // Cookie expires after 30 days
            setcookie('password', $password, time() + (86400 * 30), "/"); // Cookie expires after 30 days
          }
        }
        $response = array(
          'success' => 'refresh'
        );
      }
    } 
    
    sleep(1);
    echo json_encode($response);
}