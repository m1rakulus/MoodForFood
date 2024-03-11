<!DOCTYPE html>
<?php
	$user = 'root';
	$password = 'lemon123';
	//replace project_v1 with your database name
	$pdo = new PDO('mysql:host=localhost:3306;dbname=project_v1', $user, $password);
	$result = $pdo->query('SELECT * FROM food_menu');
	$menu = array();
	$menu = $result->fetchAll();
?>
<html>
<body>

<h1>Testing the database connection.</h1><br>
<?php
	foreach($menu as $item){
		echo $item[0];
		echo ":	";
		echo $item[1];
		echo ",	";
		echo $item[3];
		echo nl2br("\n") ;
	}
	
?>
<h2>Make a new profile: </h2>
<form action="test_method.php" method="GET">
	First Name <input type="text" name="first_name"><br>
	Last Name <input type="text" name="last_name"><br>
	Email Address <input type="text" name="email"><br>
	Password <input type="text" name="password"><br>
	Phone Number <input type="text" name="contact"><br>
	<input type="submit">
</form>
</body>
</html>