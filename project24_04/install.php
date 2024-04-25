<?php
//Enter your Database credentials

$host = 'localhost:3306';
$dbname = 'hellofresh';
$username = 'root';
$password = 'lemon123';

// Create the connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Return the connection
return $pdo;
?>
