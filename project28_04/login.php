
<!--
//references
//from first year webdevclientside module
-->
<!DOCTYPE html>
<html>

    <head>
       

       
        <link rel="stylesheet"
          href="CSS/login1.css">

      
           
        
    </head>
    <body>
    <fieldset>
            
        <h1> Login</h1>
        <br><br>
    <form  method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="email">Email:</label> &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="email" name="email" value="" > <br> <br>

     <label for="password">Password:</label>
      <input type="password" id="password" name="password" ><br><br>

        <button name="Submit" value="Login" class="button1" type="submit">Log in</button>
        <br><br>
        <p>Don't have an account? Register now!</p>
        <a name="Submit" href="signup.php" class="button1">Register</a>
      
    </form>
        
        
        
     </fieldset>
        
        
        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
            require 'User.php';
            require 'Functions.php';
            $email = $_POST["email"];
            $password = $_POST["password"];
              
            $usr = new User();
            $usr -> set_email($email);
            $usr -> set_password($password);
            $result = readUser($usr);

            
            if($result != null){
                session_start();
                $_SESSION['email'] = $email;
                header("Location: index.php");
                exit();
            }
            else{
                echo "Wrong credentials";
            }
        }

        
        ?>
        
      
</body>
</html>
