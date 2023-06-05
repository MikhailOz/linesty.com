<?php
session_start();

include '../../configs/connect_users.php';
include '../../mail/send_mail.php';
include '../../configs/recaptcha.php';
include 'input_validation.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $recaptcha_response = validateRecaptcha();
  validateInputs();

  if (isset($recaptcha_response['error'])) {
    $response = $recaptcha_response;
  } else {
    $email = trim($_POST['email'] ?? ''); 
    $query = "SELECT id, email, pass, verified FROM accounts WHERE email=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if (!$user) {
      $response = array(
        'error' => 'The account you are trying to access is invalid'
      );
    } else if ($user['verified'] == 'N') {
      $response = array(
        'error' => 'Verify your email before accessing the account'
      );
    } else {
      $current_time = time();
      $last_recovery_time = isset($_SESSION['last_recovery_time']) ? $_SESSION['last_recovery_time'] : 0;
      $recovery_time_limit = 3600; // Limit to 1 recovery attempt per hour

      if ($current_time - $last_recovery_time < $recovery_time_limit) {
        $response = array(
          'error' => 'Password recovery limit reached. Try again later'
        );
      } else {
        $recovery_token = bin2hex(random_bytes(40));
        $_SESSION['recovery_token'] = $recovery_token;
        $_SESSION['recovery_token_expiry'] = strtotime('+1 hour'); // Set expiration to 1 hour from now
        $_SESSION['email'] = $user['email'];
        $_SESSION['last_recovery_time'] = $current_time; // Store the timestamp of the current recovery request

        $reset_link = "http://{$_SERVER['SERVER_NAME']}/account/?recovery_token=" . $recovery_token;
        $message = "Click the following link to reset your password: $reset_link";
        sendMail($user['email'], 'Password Reset', $message);

        $response = array(
          'success' => 'The password reset link was sent to your email'
        );
      }
    }
  }

  sleep(1);
  header('Content-Type: application/json');
  echo json_encode($response);
}
?>