<html> 
    <body> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="CSS/menu.css"> 
        <title>Food Menu</title> 
    </head> 

        <?php
        require 'menu.php';
            
            function getArray($addingArray){

                // foreach ($addingArray as $x) {
                //     echo "$x <br>";
                // }
            // print_r($addingArray);
            }

            if(isset($_POST['exitBtn'])){
                getArray($addingArray2);
            }

            
        
        
        // callingArray(&$array, $string);

        // $refCart = new menu();

        ?>

 

</body> 

</html> 

 