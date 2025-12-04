<?php
$dsn = "mysql:host=localhost;dbname=myapp";
$username = "root";
$password = "";

// Create a new PDO instance
// PDO - PHP Data Objects

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    // exit();
}

function UrlsIs($url)
{
    return  $_SERVER['REQUEST_URI'] === $url;
}
