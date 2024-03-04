
<?php
	$pdo = new PDO('mysql:host=localhost:3306;dbname=project_v1', 'root', 'lemon123');
	$first_name = $_GET["first_name"];
	$last_name = $_GET["last_name"];
	$email = $_GET["email"];
	$password = $_GET["password"];
	$contact = $_GET["contact"];
	$pdo->query("INSERT INTO users (first_name, last_name, email, password, contact, role_id) VALUES ('$first_name', '$last_name', '$email', '$password', '$contact', 0)");
	echo "You have succesfully registered";
?>