<!--
//references
//https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_article2 (food items)
//https://www.geeksforgeeks.org/design-an-about-us-page-using-html-and-css/ (nav bar)
-->

<!DOCTYPE html> 

<html lang="en"> 

<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/menuStyle.css">
    <title>Food Menu</title> 
</head> 

<body> 
    <header>
            <nav>
                <div class="logo">
                  Mood For Food
                  </div>
                <ul class="nav-links">
                    <li><a href="index.php">
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

 

    <section class="menu"> 

        <article class="menu-item"> 
            <img src="Images/chickpea curry.jpeg" alt="Food Item 1"> 
            <h2>Chickpea Curry</h2> 
            <p class="desscription">A traditional recipe that warms the hearts of families</p> 
            <p class="price">€12.99</p> 

            <form method="post">
            <input type="submit" name="button1" value="Add to cart">
            </form>
        </article> 
 
        <article class="menu-item"> 
            <img src="Images/tofu salad.jpeg" alt="Food Item 2"> 
            <h2>Spicy Tofu Tahini Noodle Salad</h2> 
            <p class="description">Vegan friendly meal to fuel  your body and soul.</p> 
            <p class="price">€12.50</p> 
            
            <form method="post">
            <input type="submit" name="button2" value="Add to cart">
            </form>
        </article> 

        <article class="menu-item"> 
            <img src="Images/white.jpg" alt="Food Item 3"> 
            <h2>Creamy White Pasta</h2> 
            <p class="description">Filling pasta perfect for sharing with friends and family.</p> 
            <p class="price">€13.75</p> 

            <form method="post">
            <input type="submit" name="button3" value="Add to cart">
            </form>
        </article> 

        <article class="menu-item"> 
            <img src="Images/chickentikka.jpg" alt="Food Item 4"> 
            <h2>Creamy Chicken Tikka</h2> 
            <p class="description">Warm, spicy and beautifully seasoned to add spice into your life</p> 
            <p class="price">€10.20</p>

            <form method="post">
            <input type="submit" name="button4" value="Add to cart">
            </form>
        </article> 

        <article class="menu-item"> 
            <img src="Images/gyoza.jpg" alt="Food Item 5"> 
            <h2>Gyoza</h2> 
            <p class="description">A classic Asian snack, perfect for rainy and sunny days</p> 
            <p class="price">€15.40</p> 

            <form method="post">
            <input type="submit" name="button5" value="Add to cart">
            </form>
        </article> 

        <article class="menu-item"> 
            <img src="Images/beefnoodles.jpg" alt="Food Item 6"> 
            <h2>Spicy Beef Stir Fried Noodles</h2> 
            <p class="description">Quick and easy and perfect for those with a hectic schedule looking for a savoury and quick meal</p> 
            <p class="price">€15.99</p> 

            <form method="post">
            <input type="submit" name="button6" value="Add to cart">
            </form>
        </article> 
    </section> 

    <fieldset>             
        <legend ><font color= cornflowerblue><b>Your very own shopping cart!</b></font></legend> 
        <h4><centre>Here are your your items!</centre></h4> 

        <?php 
        
            session_start();
            //$addingArray = array("Salad","Chicken roll","Noodles","Desi Foods","Chinese Food");
            $addingArray2 = [];
        
            if(!isset($_SESSION['cart'])){
                $_SESSION['cart'] = [];
                $_SESSION['total'] = 0.0;
            }
        
            if(isset($_POST['exitBtn'])){
                $_SESSION['cart'] = [];
                $_SESSION['total'] = 0.0;
            }
            // $addingArray2 = array();


            if(isset($_POST['button1'])){
                // alert ('Item added to your cart'); 
                // $new_value = $_POST['Salad'];
                // array_push($array, $new_value);
                array_push($addingArray2,"Chickpea Curry");
                array_push($_SESSION['cart'], "Chickpea Curry");
                $_SESSION['total'] = $_SESSION['total'] + 12.99;
                // echo $addingArray;
                // foreach ($addingArray2 as $x) {
                //     echo "count($addingArray2)=". count($addingArray2). "<br>";
                //     echo "$x <br>";
                // }
                
                // print_r($addingArray2);
            }

            if(isset($_POST['button2'])){
                // alert ('Item added to your cart'); 
                // array_push($addingArray,"Salad");
                array_push($addingArray2,"Spicy Tofu Tahini Noodle Salad");
                array_push($_SESSION['cart'], "Spicy Tofu Tahini Noodle Salad");
                $_SESSION['total'] = $_SESSION['total'] + 12.50;
                // $new_value = $_POST['Chicken Roll'];
                // array_push($array, $new_value);
                // echo $addingArray;
                // foreach ($addingArray2 as $x) {
                //     echo "$x <br>";
                // }
            }
    
            if(isset($_POST['button3'])){
                // alert ('Item added to your cart'); 
                // array_push($addingArray,"Salad");
                array_push($addingArray2,"Creamy White Pasta");
                array_push($_SESSION['cart'], "Creamy White Pasta");
                $_SESSION['total']= $_SESSION['total'] + 13.75;

                // $new_value = $_POST['Noodles'];
                // array_push($array, $new_value);
                // echo $addingArray;
                // foreach ($addingArray2 as $x) {
                //     echo "$x <br>";
                // }
            }
    
            if(isset($_POST['button4'])){
                // alert ('Item added to your cart'); 
                // array_push($addingArray,"Salad");
                array_push($addingArray2,"Creamy Chicken Tikka");
                array_push($_SESSION['cart'], "Creamy Chicken Tikka");
                $_SESSION['total'] = $_SESSION['total'] + 10.20;
                // $new_value = $_POST['Desi Food'];
                // array_push($array, $new_value);
                // echo $addingArray;
                // foreach ($addingArray2 as $x) {
                //     echo "$x <br>";
                // }
            }
    
            if(isset($_POST['button5'])){
                // alert ('Item added to your cart'); 
                // array_push($addingArray,"Salad");
                array_push($addingArray2,"Gyoza");
                array_push($_SESSION['cart'], "Gyoza");
                $_SESSION['total'] = $_SESSION['total'] + 15.40;

                // $new_value = $_POST['Chinese Food'];
                // array_push($array, $new_value);
                // echo $addingArray;
                // foreach ($addingArray2 as $x) {
                //     echo "$x <br>";
                // }
            }

            if(isset($_POST['button6'])){
                // alert ('Item added to your cart'); 
                // array_push($addingArray,"Salad");
                array_push($addingArray2,"Spicy Beef Stir Fried Noodles");
                array_push($_SESSION['cart'], "Spicy Beef Stir Fried Noodles");
                $_SESSION['total'] = $_SESSION['total'] + 15.99;

                // $new_value = $_POST['Chinese Food'];
                // array_push($array, $new_value);
                // echo $addingArray;
                // foreach ($addingArray2 as $x) {
                //     echo "$x <br>";
                // }
            }


            foreach($_SESSION['cart'] as $item){
                echo $item . ", ";
            }
            print($_SESSION['total'] . " euro");
            
            //$withComma = implode(",", $addingArray2);
            //echo $withComma;
    
            
        ?> 
        
        <form method="post">
            <input type="submit" name="exitBtn" value="Clear cart">
        </form>
        <a href="deliveryInfo.php" >Tap here to proceed with your order!</a>
    </fieldset>

</body> 
</html> 


 

 
