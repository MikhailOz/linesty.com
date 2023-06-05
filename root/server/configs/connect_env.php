<?php
$envFilePath = __DIR__ . '/../../.env';

$lines = file($envFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($lines as $line) {
    if (strpos($line, '=') !== false) {
        list($key, $value) = explode('=', $line, 2);
        $_ENV[$key] = $value;
}
}