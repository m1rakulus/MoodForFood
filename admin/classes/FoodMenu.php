<?php

include("dbConnection.php");
class FoodMenu
{
    private $conn;
    public function __construct() {
      $dbConnection = new DbConnection();
      $this->conn = $dbConnection->connection();
    }

    public function get_categories() {
      $query = "SELECT * FROM `food_category`";
      $result = $this->conn->query($query);
      return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_menu() {
      $query = "SELECT * FROM `food_menu`";
      $result = $this->conn->query($query);
      return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function add_menu($data) {
      $name = $data["name"];
      $price = $data["price"];
      $category = $data["category"];
      $imageName = "";

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

      $query = "INSERT INTO `food_menu` (`name`, `image`, `price`, `category_id`) VALUES ('$name' , '$imageName', '$price', '$category')";
      $result = $this->conn->query($query);

      if($result) {
        $_SESSION['success_message'] = "Food Menu Item added successfully!";
      } else {
        $_SESSION['error_message'] = "Something went wrong!";
      }

      // header("location: foodCategories.php");
    }
}