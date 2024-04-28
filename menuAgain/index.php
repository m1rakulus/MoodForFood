<?php
    session_start();
    // $connect = mysqli_connect("localhost,"root","jannabanana500!!","menutest");
    //changes made
    /**
    * Configuration for database connection
    *
    */
    if(isset($_POST['add_to_cart'])){

        if(isset($_SESSION['cart'])){
            $session_array_id = array_column($_SESSION['cart'], "id");

            if(!in_array($_GET['id'], $session_array_id)){

                $session_array = array(
                    'id'  => $_GET['id'],
                    "name" => $_POST['name'],
                    "price" => $_POST["price"],
                    "quantity" => $_POST['quantity'] 
                );
            }
        }else{
            $session_array = array(
                'id'  => $_GET['id'],
                "name" => $_POST['name'],
                "price" => $_POST["price"],
                "quantity" => $_POST['quantity'] 
            );

            $_SESSION['cart'][] = $session_array;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <title>Shopping Cart</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-center">Shopping Cart Data</h2><br/>
                        <div class="col-md-12">
                            <div class="row">
                        <?php
                            $query = "SELECT * FROM menuItems"; 
                            $result = mysqli_query($connection,$query);

                            while($row = mysqli_fetch_array($result)){?>
                            <div class="col-md-4">
                                <form method="post" action="index.php?id=<?=$row['id'] ?>">
                                    <img src="images/<?=$row['image'] ?>" style='height: 150px; width: auto' />
                                    <h5 class="text-center"><?= $row['prodName']; ?></h5>
                                    <h5 class="text-center">€<?= number_format($row['price'],2); ?></h5>

                                    <input type="hidden" name="name" value="<?= $row['prodName'] ?>">
                                    <input type="hidden" name="price" value="<?= $row['price'] ?>">
                                    <input type="number" name="quantity" value="1" class="form-control">

                                    <input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2" value="Add to Cart">
                                </form>
                            </div>
                        <?php }
                    ?>

                </div>
                <div class="col-md-6">
                    <h2 class="text-center">Item selected</h2>
                    <?php

                        $total = 0;
                        $output = "";
                        $output = "
                            <table class='table table-bordered table-striped'>
                            <tr>
                                <th>ID</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        ";
                    if(!empty($_SESSION['cart'])){
                        foreach ($_SESSION['cart'] as  $key => $value){
                            $output .= "
                            <tr>
                                <td> " .$value['id']. "</td>
                                <td> " .$value['name']. "</td>
                                <td> " .$value['price']. "</td>
                                <td> " .$value['quantity']. "</td>
                                <td>€" .number_format($value['price'] * $value['quantity'],2)." </td>
                                <td>
                                    <a href='index.php?action=remove&id=".$value['id']."'>
                                        <button class='btn btn-danger btn-block'>Remove</button>
                                    </a>
                            ";

                            $total = $total + $value['quantity'] * $value['price'];
                        }
                        $output  .= "
                            <tr>
                                <td colspan='3'></td>
                                <td></b>Total Price</b></td>
                                <td>".number_format($total,2)."</td>
                                <td>
                                    <a href='index.php?action=clearall'>
                                        <button class='btn btn-warning btn-block'>Clear all</button>
                                    </a>
                                </td>
                            </tr>
                        ";

    
                    }
                    ?>
                </div>
            </div>
        </div>

        <?php
            if(isset($_GET['action'])){
                if($_GET['action'] == "clearall"){
                    unset($_SESSION['cart']);
                }
                
                if($_GET['action'] == "remove"){
                    foreach ($_SESSION['cart'] as $key => $value)
                        if ($value ['id'] == $_GET['id']){
                            unset($_SESSION['cart'][$key]);
                        }
                } 
            }
            
        
        ?>
    </body>
</html>
