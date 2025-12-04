<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);

    try {
        require_once 'dbh.inc.php';

        $query = "INSERT INTO users (`name`, `email`, `password`) VALUES (:name, :email, :pass);";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pass', $pass);
       $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");
        die();
        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

} else {
    header("Location: ../index.php");
    echo "Invalid request method.";
}
