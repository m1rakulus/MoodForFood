<?php
session_start();
require_once("User.php");
require_once("Functions.php");

if(isset($_SESSION['email'])) {
    header("location: index1.php");
    die();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {  
        $_SESSION['emailErr'] = "Email field is required";  
    } elseif(empty($_POST["password"])) {  
        $_SESSION['passErr'] = "Password field is required"; 
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User();
        $user->set_email($email);
        $user->set_password($password);

        $result = readUser($user);
        
        if($result){
            $_SESSION['email'] = $result['email'];
            $_SESSION['firstName'] = $result['first_name'];
            $_SESSION['lastName'] = $result['last_name'];

            header("location: index1.php");
            die();
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="CSS/index.css">
    </head>
    <style>
        #emailErr{
            color: #cf0303;
            font-weight: bold;
            margin-left: 22px;
        }

        #passErr{
            color: #cf0303;
            font-weight: bold;
            margin-left: 60px;
        }
    </style>
    <body>
    <fieldset>
        <h1> Login</h1>
        <br><br><br><br><br>
    <form  method="post"  action="index.php">
        <label for="email">Email:</label> &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="email" id="email" name="email" value="" > <br>
        <span id="emailErr"><?php if(isset($_SESSION['emailErr'])){ echo $_SESSION['emailErr']; unset($_SESSION['emailErr']); }?></span> <br>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" ><br>
        <span id="passErr"><?php if(isset($_SESSION['passErr'])){ echo $_SESSION['passErr']; unset($_SESSION['passErr']); }?></span> <br>
        <br><br> &nbsp;&nbsp;&nbsp;
        <p>need an account?</p> <a href="signup.php">Signup</a>
        <br><br>
        <button type="submit" class="button">Login</button>
    </form>
    </fieldset>
</body>
</html>
