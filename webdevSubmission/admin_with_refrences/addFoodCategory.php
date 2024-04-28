<?php
session_start(); // Start the session
include("functions.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    //Save Image to directory
    $fileName = basename($_FILES["image"]["name"]); // Get the file name
    $targetFilePath = 'images/' . $fileName; // Path to save the file in the directory
    // Check if file is selected
    if (!empty($_FILES["image"]["name"])) {
      // Allow certain file formats
      $allowedExtensions = array("jpg", "jpeg", "png", "gif");
      $fileExtension = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
      if (in_array($fileExtension, $allowedExtensions)) {
          // Upload file to server
          if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
              // Set image name in food menu object
              $imageName = $fileName;
          }
      }
    }

    //Create object of Functions class
    $function = new Functions();

    //create object of FoodCategory category class
    $category = new FoodCategory($_POST['name'], $imageName);

    //Set vlues for ccategory name and image
    $category->setName($_POST['name']);
    $category->setImage($imageName);

    //Add category to database table
    $function->addCategory($category);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Include the main stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- Include the sidebar -->
    <?php include "layouts/sidebar.php" ?>
    <!-- Include the header -->
    <?php include "layouts/header.php" ?>
    <div id="content">
        <!-- Include alert messages layout -->
        <?php include "layouts/alert_messages.php" ?>
        <div class="card">
            <h2>Add Food Category</h2>
            <!-- Form to add a new food category -->
            <form action="addFoodCategory.php" method="post" enctype="multipart/form-data">
                <!-- Input field for category name -->
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <!-- Input field for category image -->
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" required>

                <!-- Submit button to add the category -->
                <input type="submit" value="Add Category">
            </form>
        </div>
    </div>
    <!-- https://symfonycasts.com/tracks/php -->
</body>

</html>
