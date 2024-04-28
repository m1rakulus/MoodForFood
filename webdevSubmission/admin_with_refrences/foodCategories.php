<?php
session_start(); // Start the session
include "functions.php";
   
$function = new Functions();
$result = $function->get_categories();
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
            <div class="card-header">
                <h2 class="card-title">Food Categories</h2>
                <a href="addFoodCategory.php" class="add-new">Add New Category</a>
            </div>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                </thead>
                <tbody>
                <?php 
                    // Check if $result is set (assuming $result contains data fetched from a database query)
                    if($result) {
                        // Loop through each item in $result using foreach
                        foreach($result as $item) { ?>
                            <tr> <!-- Start a table row -->
                                <td><?php echo $item["id"] ?></td> <!-- Display the ID of the item -->
                                <td><?php echo $item["name"] ?></td> <!-- Display the name of the item -->
                                <td style="width:20%"><img src="images/<?php echo $item["image"] ?>" alt=""></td> <!-- Display the image of the item -->
                            </tr> <!-- End of table row -->
                                    <?php } // End of foreach loop
                                } else { // If $result is empty or false
                                ?>
                <tr style="text-allign: center"> <!-- Start a table row with centered text -->
                    <td colspan="3">No Record Found</td> <!-- Display a message for no records found -->
                </tr> <!-- End of table row -->
            <?php } // End of if-else statement ?>

            </tbody>
         </table>
    </div>
  
 </div>
</body>
<!-- https://www.w3schools.com/html/html_tables.asp -->
</html>
