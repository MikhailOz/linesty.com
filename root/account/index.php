<?php

ob_start();
session_start();

include_once '../components/includes/authentication_head.php';
include_once '../components/includes/misc/preloader.php';

if(isset($_GET['confirmation_token']) && !empty($_GET['confirmation_token'])) {
  $confirmation_token = $_GET['confirmation_token'];
  include '../server/controllers/auth/confirmation_token.php';
} 

if(isset($_GET['recovery_token'])) {
  include '../server/controllers/auth/recovery_token.php';
}

if(isset($_GET['logout'])){
  include '../server/controllers/auth/logout.php';
} 

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
  include 'account/index.php';
} elseif(!isset($_GET['recovery']) && !isset($_GET['signup'])){
  include '../server/controllers/auth/cookie_auth.php';
  include 'auth/login.php';
} elseif(isset($_GET['recovery'])){
  include 'auth/recovery.php';
} elseif(isset($_GET['signup'])){
  include 'auth/signup.php';
} 
?>
