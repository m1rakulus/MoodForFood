<?php
session_start(); // Start the session
include("classes/FoodMenu.php");

$foodMenu = new FoodMenu();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $foodMenu->add_menu($_POST);
}

$categories = $foodMenu->get_categories();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
   <?php include "layouts/sidebar.php" ?>
   <?php include "layouts/header.php" ?>
    <div id="content">
    <?php include "layouts/alert_messages.php" ?>
        <div class="card">
            <h2>Add Food Menu</h2>
            <form action="addMenu.php" method="post" enctype="multipart/form-data">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="category">Category:</label>
                <select id="category" name="category" required>
                    <?php foreach($categories as $item) { ?>
                    <option value="<?php echo $item["id"]?>"><?php echo $item["name"]?></option>
                    <?php } ?>
                </select>

                <label for="price">Price:</label>
                <input type="text" id="price" name="price" required>
                
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" required>

                <input type="submit" value="Add Item">
            </form>
        </div>
  
    </div>
</body>

</html>
