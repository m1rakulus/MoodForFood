<?php
require_once 'User.php';

function writeUser($a) {
    //open connection with database
    $pdo = new PDO('mysql:host=localhost:3306;dbname=project_v1', 'root', 'lemon123');
    //write all variables to the database
    $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, email, password, contact, role_id) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$a->get_firstname(), $a->get_lastname(), $a->get_email(), $a->get_password(), $a->get_contact(), $a->get_role()]);
}

function readUser($a) {

    $user = null;

    //open connection with database
    $pdo = new PDO('mysql:host=localhost:3306;dbname=hellofresh', 'root', 'Amnabibi2020@');

    //read all variables to the database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->execute([$a->get_email(), $a->get_password()]);

    if ($stmt->rowCount() > 0) {
        // Fetch the result
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    return $user;
}