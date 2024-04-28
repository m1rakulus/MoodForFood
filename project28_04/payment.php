<!--
//layout from first year
-->

<!DOCTYPE html>
<html>
    <head>
       

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="CSS/payment.css">

    </head>
    <body>
    <fieldset>
            
        <h1>Payment details</h1>
        <br>
        
    <form  method="get"   action="index.php">
        
         <input type="checkbox" id="vehicle1" name="visa" value="visa">
  <label for="vehicle1"> visa</label><br>
         <input type="checkbox" id="vehicle1" name="mastercard" value="mastercard">
  <label for="vehicle1">mastercard</label><br>
        
        <br><br>
        
  <label for="email">Credit card number</label>
  <input type="text" id="number" name="number"  > <br>
        <br>
        
        <label for="expired">expiration date:</label>
  <input type="date" id="expiration" name="expiration"> <br>
        <br>
  
        
        
       
         <label for="email">Security number</label>
  <input type="text" id="security" name="security"  > <br>
        <br><br>
       
         
       
       <button class="button1">Proceed with Payment</button>
        
     
        


        
 

 
    </form>
        
        <?php
        session_start();

        echo "Your total is " . $_SESSION['total'];
        
        


    ?>

       
     </fieldset>
        
    
</body>
</html>