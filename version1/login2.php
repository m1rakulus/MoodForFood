<!DOCTYPE html>
<html>
    
 <?php
	require 'User.php';
	require 'Functions.php';
	$pdo = new PDO('mysql:host=localhost:3306;dbname=hellofresh', 'root', 'apple459@');
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
	$usr -> set_roleid(1);
	writeUser($usr);
?>
    <head>
       

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="CSS/index.css">

        
    </head>
    <body>
    <fieldset>
            
        <h1> Login</h1>
        <br><br><br><br><br>
    <form  method="GET"  action="index1.php">
  <label for="email">Email:</label> &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" id="email" name="email" value="" > <br> <br>
        
         
           
        <br><br>
        
 <label for="address">Password:</label>
  <input type="password" id="password" name="password" ><br><br> &nbsp;&nbsp;&nbsp;
       
        <p>need an account?</p> <a href="signup.php">Signup</a>
        
        <br><br>
        
        
    <a href="index1.php" class="button">Login</a>
      
        


        
 

 
    </form>
        
     </fieldset>
</body>
</html>
