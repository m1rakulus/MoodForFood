
<?php
	require 'User.php';
	$pdo = new PDO('mysql:host=localhost:3306;dbname=project_v1', 'root', 'lemon123');
	$first_name = $_GET["first_name"];
	$last_name = $_GET["last_name"];
	$email = $_GET["email"];
	$password = $_GET["password"];
	$contact = $_GET["contact"];
	$usr = new User();
	$usr -> set_firstname($first_name);
	$usr -> set_lastname($last_name);
	$usr -> set_email($email);
	$usr -> set_password($password);
	$usr -> set_contact($contact);
	$usr -> writeUser();
	echo "You have succesfully registered";
?>