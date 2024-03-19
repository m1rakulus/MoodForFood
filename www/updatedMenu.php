<!DOCTYPE html> 

<html lang="en"> 

<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="CSS/menu.css"> 
    <title>Food Menu</title> 
</head> 

<body> 
    <nav> 
        <ul> 
            <li><a href="index1.php">Home</a></li> 
            <li><a href="menu.html">Menu</a></li> 
            <li><a href="Aboutus.php">About Us</a></li> 
        </ul> 
    </nav> 

    <header> <h1>Mood for Food</h1> </header> 

 

    <section class="menu"> 

        <article class="menu-item"> 
            <img src="Images/salad.jpg" alt="Food Item 1"> 
            <h2>salad</h2> 
            <p class="I a traditional recipe that warms the hearts of Italian families"></p> 
            <p class="price">€12.99</p> 

            <form method="post">
            <input type="submit" name="button1" value="Add to cart">
            </form>
        </article> 
 
        <article class="menu-item"> 
            <img src="Images/chicken.jpg" alt="Food Item 2"> 
            <h2> Chicken roll</h2> 
            <p class="description"></p> 
            <p class="price">€12</p> 
            
            <form method="post">
            <input type="submit" name="button2" value="Add to cart">
            </form>
        </article> 

        <article class="menu-item"> 
            <img src="Images/noodles.jpg" alt="Food Item 2"> 
            <h2>Noodles</h2> 
            <p class="description"></p> 
            <p class="price">€8</p> 

            <form method="post">
            <input type="submit" name="button3" value="Add to cart">
            </form>
        </article> 

        <article class="menu-item"> 
            <img src="Images/desifood.jpg" alt="Food Item 2"> 
            <h2>Desi Food</h2> 
            <p class="description"></p> 
            <p class="price">€7</p>

            <form method="post">
            <input type="submit" name="button3" value="Add to cart">
            </form>
        </article> 

        <article class="menu-item"> 
            <img src="Images/Chinese.jpg" alt="Food Item 2"> 
            <h2>Chinese Food</h2> 
            <p class="description"></p> 
            <p class="price">€15</p> 

            <form method="post">
            <input type="submit" name="button4" value="Add to cart">
            </form>
        </article> 
    </section> 

    <fieldset>             
        <legend ><font color= cornflowerblue><b>Your very own shopping cart!</b></font></legend> 
        <h4><centre>Here are your your items!</centre></h4> 

        <?php 
            //$addingArray = array("Salad","Chicken roll","Noodles","Desi Foods","Chinese Food");
            $addingArray2 = array(" "," ");


            if(isset($_POST['button1'])){
                // alert ('Item added to your cart'); 
                array_push($addingArray2,"Salad");
                // echo $addingArray;
                foreach ($addingArray2 as $x) {
                    echo "$x <br>";
                }
                // print_r($addingArray);
            }

            if(isset($_POST['button2'])){
                // alert ('Item added to your cart'); 
                // array_push($addingArray,"Salad");
                array_push($addingArray2,"Chicken Roll");
                // echo $addingArray;
                foreach ($addingArray2 as $x) {
                    echo "$x <br>";
                }
            }
    
            if(isset($_POST['button3'])){
                // alert ('Item added to your cart'); 
                // array_push($addingArray,"Salad");
                array_push($addingArray2,"Noodles");
                // echo $addingArray;
                foreach ($addingArray2 as $x) {
                    echo "$x <br>";
                }
            }
    
            if(isset($_POST['button4'])){
                // alert ('Item added to your cart'); 
                // array_push($addingArray,"Salad");
                array_push($addingArray2,"Desi Food");
                // echo $addingArray;
                foreach ($addingArray2 as $x) {
                    echo "$x <br>";
                }
            }
    
            if(isset($_POST['button5'])){
                // alert ('Item added to your cart'); 
                // array_push($addingArray,"Salad");
                array_push($addingArray2,"Chinese Food");
                // echo $addingArray;
                foreach ($addingArray2 as $x) {
                    echo "$x <br>";
                }
            }
    
            
        ?> 
        <form method="post">
            <input type="submit" name="exitBtn" value="Clear cart">
        </form>
    </fieldset>

</body> 
</html> 


 

 