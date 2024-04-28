<!--
// https://tryphp.w3schools.com/showphp.php?filename=demo_form_validation_complete 
// form layout from first year webdevclientside
 -->
<style>
.error {color: #FF0000;}
</style>
<?php



$nameErr = $lastnameErr = $emailErr =  $checkboxErr = $hearErr =  $contactErr= $phoneErr = "";
$name = $lastname = $checkbox= $email = $hear = $contact= $phone = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["firstName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
    
    if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
    if (empty($_POST["lastName"])) {
    $lastnameErr = "Name is required";
  } else {
    $lastname = test_input($_POST["lastName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed";
    }
  }
    
    
    
     if (empty($_POST["phone"])) {
    $phoneErr = "phone number is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if e-mail address is well-formed
    if(preg_match('/^[0-9]{10}+$/', $phone)) {
$phoneErr = "";
} else {
$phoneErr = " Invalid Phone Number";
}
  }
    
    if (empty($_POST["checkbox"])) {
    $checkboxErr = "checkbox is required";
  } else {
    $checkbox = test_input($_POST["checkbox"]);
  }
    
      
    if (empty($_POST["contact"])) {
    $contactErr = "checkbox is required";
  } else {
    $contact = test_input($_POST["contact"]);
  }
       
    if (empty($_POST["hear"])) {
    $hearErr = "option is required";
  } else {
    $hear = test_input($_POST["hear"]);
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
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <body>     
    <title>Delivery Information</title>
      
    <h1>Delivery Information</h1>
        <fieldset>
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
            <legend><font color= cornflowerblue><b>Due to many supply and demands, your order may take 2 weeeks to arrive!</b></font></legend>
            <label for="firstName">First Name:</label>
            <input name="firstName" type="text">
            <span class="error"> <?php echo $nameErr;?></span>
        <br><br>
            <label for="lastName">Last Name:</label>
            <input name="lastName" type="text" >
                <span class="error"> <?php echo $lastnameErr;?></span>
        <br><br><br>
            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email">
                 <span class="error"> <?php echo $emailErr;?></span>
        <br><br>
            <label for="phone">Enter a phone number:</label>
        <br>
            <input type="tel" id="phone" name="phone" placeholder="12345678910">
                 <span class="error"> <?php echo $phoneErr;?></span>
        <br><br>
              
            Any additional comments? e.g. not too spicy (be sure to include any allergies we should be aware of here.)<br>
            <textarea name="message" maxlength="30" rows="3" cols="40"></textarea>
        <br><br><br>
            
                <label for="question">How did you hear about us?</label>
                <input list="choices" id="hear" name="hear">
                    <datalist id="choices">
                        <option value="Google">
                        <option value="Local Newspaper Ad">
                        <option value="Friend or Colleague">
                        <option value="Family member">
                        <option value="Other">
                    </datalist>
                
                <span class="error"> <?php echo $hearErr;?></span>
                
                    
            <br><br>
            
                        <label for="checkboxes">Would you like to receive notifications of any upcoming deals?</label>
            <br>
                        <input type="checkbox" id="option1" name="checkbox" value="yes">
                        <label for="option1"> Yes</label><br>
                        <input type="checkbox" id="option2" name="checkbox" value="no">
                        <label for="option2"> No</label><br>
                 <span class="error"> <?php echo $checkboxErr;?></span>
                

                
            <span style="color:red;font-weight: bold"><p>**Ensure this box is checked if you would like to receive updates on your order every so often.</p></span>
            
              <p>How would you like us to contact you?</p>
                        <input type="radio" id="email" name="contact" value="email">
                    <label for="email">E-mail</label><br>
            
                    <input type="radio" id="phone" name="contact" value="phone">
                    <label for="phone">Text</label>
                 <span class="error"> <?php echo $contactErr;?></span>
                   
            <div class="button">
                <button type="submit"><a>Submit</a></button>
            </div>
            <div class="button">
                <button type="submit"><a href="payment.php">Go to Payment</a></button>
            </div>
            </form>
            
        </fieldset>
</body>
</html>