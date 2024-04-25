<?php

$first_nameErr =  $emailErr = $second_nameErr = $addressErr = $passwordErr = $phonenumberErr= "";




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
    $first_nameErr = "Name is required";
  } else {
    $name = test_input($_POST["first_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $first_nameErr = "Only letters and white space allowed";
    }
  }
    
     if (empty($_POST["second_name"])) {  
    $second_nameErr = " Second name is required";  
     }
   
    
    
     if (empty($_POST["address"])) {
    $addressErr = "Email is required";
  } else {
    $address = test_input($_POST["address"]);
    // check if e-mail address is well-formed
    if (!filter_var($address, FILTER_VALIDATE_EMAIL)) {
      $addressErr = "Invalid email format";
    }
  }
    

    
    if(strlen($_POST["password"]) < 8) {
         $passwordErr= 'Password should be at least 8 characters in length';
    }else{
        $passwordErr= '';
    }
    
  if (empty($_POST["phonenumber"])) {
    $phonenumberErr = "phone number is required";
  } else {
    $phonenumber = test_input($_POST["phonenumber"]);
    // check if e-mail address is well-formed
    if(preg_match('/^[0-9]{10}+$/', $phonenumber)) {
$phonenumberErr = " ";
} else {
$phonenumberErr = " Invalid Phone Number";
}
  }
  

    
    
  }
    

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
    
    
    
    ?>
<!DOCTYPE html>
<html>
    <head>
       

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="CSS/login1.css">

    </head>
    <body>
    <fieldset>
            
        <h1>Make a new account</h1>
        <br>
        
    <form  method="get"   action="index.php">
  <label for="email">First name:</label>
  <input type="text" id="name" name="first_name"  > <span class="error"> <?php echo $first_nameErr;?></span>   &nbsp; &nbsp; &nbsp;<br><br>
        <label for="email">Second name:</label>  
  <input type="text" id="name" name="second_name"  > <span class="error"> <?php echo $second_nameErr;?></span>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br><br>  
        
        
        &nbsp; <label for="address">Email:</label> 
  <input type="text" id="address" name="address" ><span class="error"> <?php echo $addressErr;?></span><br><br>
       
         <label for="address">Password:</label> 
  <input type="password" id="address" name="password"  ><span class="error"> <?php echo $passwordErr;?></span>  &nbsp;&nbsp;&nbsp;<br><br>
       
         <label for="address">Phone number:</label>
  <input type="text" id="address" name="phonenumber"   > <span class="error"> <?php echo $phonenumberErr;?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
       
       <button class="button1">Signup</button>
        
     
        


        
 

 
    </form>

       
     </fieldset>
</body>
</html>
