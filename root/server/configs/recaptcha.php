<?php
include '../../configs/connect_env.php';

function validateRecaptcha() {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $secret_key = $_ENV['RECAPTCHA_SECRET_KEY'];
    $min_score = $_ENV['RECAPTCHA_MIN_SCORE'];

    if (isset($_SESSION['recaptcha_score'], $_SESSION['recaptcha_timestamp']) &&
        $_SESSION['recaptcha_score'] > $min_score &&
        time() - $_SESSION['recaptcha_timestamp'] < 1800) {
        return;
    } 

    if (!isset($_POST['recaptcha'])) {
        return array(
            'error' => 'We are currently experiencing issues with the reCAPTCHA functionality. Try to reload the page'
        );
    }

    $recaptcha_token = $_POST['recaptcha'];

    $recaptcha_request = file_get_contents("$url?secret=$secret_key&response=$recaptcha_token");
    $recaptcha_response = json_decode($recaptcha_request);

    if ($recaptcha_response->success && $recaptcha_response->score >= $min_score) {
        $_SESSION['recaptcha_score'] = $recaptcha_response->score;
        $_SESSION['recaptcha_timestamp'] = time();
        return;
    } elseif ($recaptcha_response->success && $recaptcha_response->score < $min_score) {
        return array(
            'error' => 'Your request has been blocked by reCAPTCHA. Please attempt again at a later time'
        );
    } else {
        return array(
            'error' => 'We are experiencing reCAPTCHA functionality issues, receiving unsuccessful responses. Try to reload the page'
        );
    }
}