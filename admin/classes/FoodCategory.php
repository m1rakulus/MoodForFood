<?php

include("dbConnection.php");
class FoodCategory
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
    public function add_category($data) {
      $name = $data["name"];
      // $image = $data["image"];
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

      $query = "INSERT INTO `food_category` (`name`, `image`) VALUES ('$name' , '$imageName')";
      $result = $this->conn->query($query);

      if($result) {
        $_SESSION['success_message'] = "Food Category added successfully!";
      } else {
        $_SESSION['error_message'] = "Something went wrong!";
      }

      header("location: foodCategories.php");
    }
}