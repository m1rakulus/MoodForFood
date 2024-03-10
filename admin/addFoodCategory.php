<?php
session_start(); // Start the session
include("classes/FoodCategory.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $foodCategory = new FoodCategory();
    $foodCategory->add_category($_POST);
}

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
            <h2>Add Food Category</h2>
            <form action="addFoodCategory.php" method="post" enctype="multipart/form-data">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="image">Image:</label>
                <input type="file" id="image" name="image" required>

                <input type="submit" value="Add Category">
            </form>
        </div>
  
    </div>
</body>

</html>
