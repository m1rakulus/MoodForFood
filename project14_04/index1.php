<?php
require 'User.php';
require 'Functions.php';
if(!empty($_GET["first_name"])) {
	$first_name = $_GET["first_name"];
	$last_name = $_GET["second_name"];
	$email = $_GET["address"];
	$password = $_GET["password"];
	$contact = $_GET["phonenumber"];
	$usr = new User();
	$usr -> set_firstname($first_name);
	$usr -> set_lastname($last_name);
	$usr -> set_email($email);
	$usr -> set_password($password);
	$usr -> set_contact($contact);
	$usr -> set_roleid(1);
	writeUser($usr);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
      
    <title>Index Page</title>
    <link rel="stylesheet" href="CSS/index3.css">
  </head>
    
    <body>
    <header>
        <nav>
            <div class="logo">
              Mood For Food
              </div>
            <ul class="nav-links">
                <li><a href="index1.php">
                  Home</a>
                  </li>
                <li><a href="menu.php">
                  Menu</a>
                  </li>
                <li><a href="Aboutus.php">
                  About us</a>
                  </li>
               
            </ul>
        </nav>
    </header>
 
    <section class="about">
               

        <h1>Welcome to MoodForFood</h1>

        
        <div class="about-info">
            <div class="about-img">
                <img src="Images/moodforfood.png" width="200" height="200" alt="Moodforfood">
            </div>
            <div>
            <p> Our website provides fresh ingredients to our customers alongside with meal recipes and information of allergies.We also provide meal deals and special diets.Start your order today at MoodForFood!
            </p>

                <br><br><br><br>
                <div align="center"><a href="login.php" class="button">Login</a>
</div>
                                                
    </div>
        </div>
        </section>
    
    <br>
    <br>
 
      <footer>
        
        <div class="footer-content">
          
          <div class="footer-item">           <img src="Images/call.png" alt="shop sign"  width="25" height="25"> <br> <p> +123456789</p>
</div>
                     
          <div class="footer-item"><img src="Images/envelope.png" alt="shop sign"  width="25" height="25"> <p> <a2 class="email" href="mailto:MoodForFood@hotmail.com"> MoodForFood@gmail.com</a2></p></div>
          <div class="footer-item"><img src="./marker1.png" alt="shop sign"  width="25" height="25"> <p> Dublin1, City Centre</p></div>

          </div>
    
            
          
          
      </footer>
 
    
  </body>
</html>