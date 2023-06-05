<?php
function validateInputs()
{
    if (
        (isset($_POST["email"]) && empty(trim($_POST["email"] ?? ""))) ||
        (isset($_POST["pass"]) && empty($_POST["pass"])) ||
        (isset($_POST["password"]) && empty($_POST["password"])) ||
        (isset($_POST["confirmation_password"]) &&
            empty($_POST["confirmation_password"]))
    ) {
        $response = [
            "error" => "Please fill all required fields",
        ];
        if (isset($_POST["email"]) && !empty($_POST["email"])) {
            $response["email"] = $_POST["email"];
        }
        header("Content-Type: application/json");
        echo json_encode($response);
        exit();
    }

    $email = false;

    if (isset($_POST["email"])) {
        $email = trim($_POST["email"] ?? "");

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response = [
                "error" => "Provided an invalid email address",
            ];
            header("Content-Type: application/json");
            echo json_encode($response);
            exit();
        }
    }

    if (isset($_POST["password"]) && isset($_POST["confirmation_password"])) {
        if ($_POST["password"] !== $_POST["confirmation_password"]) {
            $response = [
                "error" => "Provided passwords do not match",
            ];
            header("Content-Type: application/json");
            echo json_encode($response);
            exit();
        }
        if (strlen($_POST["password"]) < 8) {
            $response = [
                "error" => "Password must be at least 8 characters long",
            ];
            header("Content-Type: application/json");
            echo json_encode($response);
            exit();
        }
        if (!preg_match("@[0-9]@", $_POST["password"])) {
            $response = [
                "error" => "Password should contain at least one digit",
            ];
            header("Content-Type: application/json");
            echo json_encode($response);
            exit();
        }
        if (!preg_match("@[a-z]@", $_POST["password"])) {
            $response = [
                "error" =>
                    "Password should contain at least one lowercase letter",
            ];
            header("Content-Type: application/json");
            echo json_encode($response);
            exit();
        }
        if (!preg_match("@[A-Z]@", $_POST["password"])) {
            $response = [
                "error" =>
                    "Password should contain at least one uppercase letter",
            ];
            header("Content-Type: application/json");
            echo json_encode($response);
            exit();
        }
    }
}
