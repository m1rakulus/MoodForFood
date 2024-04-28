<?php


//When testing a specific test case, please comment all other test cases before navigating to validation_testing.php in the browser

// Test case 1: Create a user and login
// Positive test case

$_GET["first_name"] = "Joe";
$_GET["second_name"] = "Smith";
$_GET["address"] = "joe@gmail.com";
$_GET["phonenumber"] = "0123456789";
$_GET["password"] = "joespassword";

//Register account
include "index.php";

//open connection with database
$pdo = require 'install.php';
//Check if user was created
$stmt = $pdo->prepare('SELECT * FROM users WHERE first_name = "Joe" LIMIT 1');
$stmt->execute();
$result=$stmt->fetch(PDO::FETCH_ASSOC);

if($result["first_name"] == "Joe"){
    echo "register works";
}


// Test case 2: Enter delivery details
// Positive test case

$_POST["name"] = "Joe";
$_POST["email"] = "Smith";
$_POST["last_name"] = "joe@gmail.com";
$_POST["phone"] = "0123456789";
$_POST["checkbox"] = "true";
$_POST["contact"] = "true";
$_POST["hear"] = "true";

//Negative test case
$_POST["name"] = "Joe";
$_POST["email"] = "Smitwh";
$_POST["last_name"] = "joegmailcom";
$_POST["phone"] = "01234567jhbbbbbbbbbbbbbbb89";
$_POST["checkbox"] = "";
$_POST["contact"] = "";
$_POST["hear"] = "";


// Test case 3: Add item to cart
// Test if cart has items after pushing button for a food item

session_start();

$_POST['button1'] = "set";
$_POST['button2'] = "set";
$_POST['button3'] = "set";

include "menu.php";

if(count($_SESSION['cart']) == 3){
    echo "items successfully added ";
}
if($_SESSION['total'] == 39.24){
    echo "correct total calculated";
}

// Test case 4
// Test clear cart
$_POST['exitBtn'] = "set";
$_POST['button1'] = null;
$_POST['button2'] = null;
$_POST['button3'] = null;

include "menu.php";


if(count($_SESSION['cart']) == 0){
    echo "cart cleared successfully ";
}
if($_SESSION['total'] == 0.0){
    echo "total reset to 0 ";
}



?>