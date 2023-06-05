<?php
if($_SESSION['recovery_token'] === $_GET['recovery_token']){
  $current_time = time();
  $recovery_token_expiry = $_SESSION['recovery_token_expiry'];

  if ($current_time <= $recovery_token_expiry) {
    $_SESSION['success_upper_message'] = 'Provided token is valid for recovery';
    include_once "auth/set_new_password.php";
    exit;
  } else {
    $_SESSION['unsuccess_upper_message'] = 'Provided token is no longer valid';
    header('Location: /account');
    exit;
  }
} else {
  $_SESSION['unsuccess_upper_message'] = 'Provided token is no longer valid';
  header('Location: /account');
  exit;
}