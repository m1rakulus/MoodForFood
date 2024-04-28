<?php
session_start(); 
include "functions.php";

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
     $foodMenu = new FoodMenu($_POST['name'], $imageName, $_POST['price'], $_POST['category']);
 
     //Set vlues for ccategory name and image
     $foodMenu->setName($_POST['name']);
     $foodMenu->setImage($imageName);
     $foodMenu->setPrice($_POST['price']);
     $foodMenu->setCategoryId($_POST['category']);
 
     //Add category to database table
     $function->addFoodMenu($foodMenu);
}

$function = new Functions();
$categories = $function->get_categories();

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
