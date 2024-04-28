<?php
require_once 'User.php';
require_once 'install.php';

function writeUser($a) {
    //open connection with database
    $pdo = require 'install.php';
    //write all variables to the database
    $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, email, password, contact, role_id) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$a->get_firstname(), $a->get_lastname(), $a->get_email(), $a->get_password(), $a->get_contact(), $a->get_role()]);
}

function readUser($a) {

    $user = null;

    //open connection with database
    $pdo = require 'install.php';

    //read all variables to the database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->execute([$a->get_email(), $a->get_password()]);

    if ($stmt->rowCount() > 0) {
        // Fetch the result
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    return $user;
}
?>
