<?php
session_start(); // Start the session
include("classes/FoodCategory.php");

    $foodCategory = new FoodCategory();
    $result = $foodCategory->get_categories();
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
                    <?php if($result) {
                    foreach($result as $item) { ?>
                    <tr>
                        <td><?php echo $item["id"] ?></td>
                        <td><?php echo $item["name"] ?></td>
                        <td style="width:40%"><img src="images/<?php echo $item["image"] ?>" alt=""></td>
                    </tr>
                    <?php } } else {?>
                        <tr style="text-allign: center">
                        <td colspan="3">No Record Found</td>
                    </tr>
                       <?php } ?>
                </tbody>
            </table>
        </div>
  
    </div>
</body>

</html>
