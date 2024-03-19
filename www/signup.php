<?php

$nameErr = "";  
$secondnameErr="";
$emailErr = ""; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  if (empty($_POST["firstname"])) {  
    $nameErr = "Name Field is required";  
  } else {  
    $name = test_input($_POST["firstname"]);  
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {  
      $nameErr = "Only letters and white space allowed";  
    }  
  }
    
     if (empty($_POST["secondname"])) {  
    $nameErr = "Name Field is required";  
     }
    else {  
    $name = test_input($_POST["secondname"]);  
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {  
      $nameErr = "Only letters and white space allowed";  
    }  
    }
    
    
      if (empty($_POST["email"])) {  
    $emailErr = "Email field is required";  
      } else {  
    $email = test_input($_POST["email"]);  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
      $emailErr = "Invalid email format";  
    }  
  }
    
}
    
    
    
    ?>
<!DOCTYPE html>
<html>
    <head>
       

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }
            .error {   
color: white;  
    font-family: lato;  
    background: yellowgreen;  
    display: inline-block;  
    padding: 2px 10px;  
}

            
            .fa-facebook {
  background: #3B5998;
  color: white;
}
            
            .fa {
  padding: 15px;
  font-size: 30px;
  width: 10px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Karla';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }
            
            body {
    
    text-align:center;
    
        
}


            .opt {
                margin-top: 30px;
            }

            .opt a {
              text-decoration: none;
              font-size: 150%;
            }
            
            a:hover {
              
            }
            
            .title{
            position: absolute;
            left: 530px;
            top: 30px;
            font-size:30px;
            color:green;
            }
            label{
                color:white;
            }
            
  body {
    
    text-align:center;
     background: url(food.jpg)
        
}
 
    .facebook { 
        background: #3b5998; 
        color: white; 
    } 

 
            
            fieldset{
    padding:10px;
    border:3px solid blue;
    
     width: 700px;
                height:600px;
     display: inline-block;
       }
            input{
                
                margin:7px;
                padding:2px;
                height:30px;
                width:200px;
            }
            
            .material-icons { 
         padding: 10px;
  font-size: 30px;
  width: 20px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%; 
    }
            h1{
                color:white;
                font-family: cursive;
            }
            .button{
                 background-color: blue;
    border: none;
  color: white;
  padding: 15px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
                
            }
            .button1{
                 background-color: blue;
                padding: 15px 50px;
                
                
                
            }
            
             body {
    
    text-align:center;
     background: url(signup.png)
        
}
            
            h2{
                color:white;
            }
        
           
        </style>
    </head>
    <body>
    <fieldset>
            
        <h1>Sign up</h1>
        
        <h2>Create an account</h2>
        <br>
        
    <form  method="post" >
  <label for="email">First name:</label>
  <input type="text" id="name" name="first_name"  >   &nbsp; &nbsp; &nbsp;<br><br>
        <label for="email">Second name:</label>  
  <input type="text" id="name" name="second_name"  >   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br><br>  
        
        
        &nbsp; <label for="address">Email:</label> 
  <input type="text" id="address" name="address"  ><br><br>
       
         <label for="address">Password:</label> 
  <input type="password" id="address" name="address"  >  &nbsp;&nbsp;&nbsp;<br><br>
       
         <label for="address">Phone number:</label>
  <input type="text" id="address" name="address"   > &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
       
       <button class="button">Signup</button>
        
     
        


        
 

 
    </form>
       
     </fieldset>
</body>
</html>
