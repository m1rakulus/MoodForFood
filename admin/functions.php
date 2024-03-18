<?php

include "classes/FoodCategory.php";
include "classes/FoodMenu.php";
include "classes/dbConnection.php";
class Functions {
    private $connection;

    public function __construct() {
        // Create connection
        $dbConnection = new DbConnection();
        $this->connection = $dbConnection->connection();
    }

    // Add food category
    public function addCategory($category) {
        $name = $category->getName();
        $image = $category->getImage();
        $stmt = $this->connection->prepare("INSERT INTO food_category (name, image) VALUES (?, ?)");
        $stmt->execute([$name, $image]);
    }
    
    //Get All food categories
    public function get_categories() {
        $query = "SELECT * FROM `food_category`";
        $result = $this->connection->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Add food menu category
    public function addFoodMenu($foodMenu) {
        $name = $foodMenu->getName();
        $price = $foodMenu->getPrice();
        $image = $foodMenu->getImage();
        $categoryId = $foodMenu->getCategoryId();
        $stmt = $this->connection->prepare("INSERT INTO food_menu (name, image, category_id, price) VALUES (?, ?, ?, ? )");
        $stmt->execute([$name, $image, $categoryId, $price]);
    }

    //Get All food menus
    public function get_foodMenu() {
        $query = "SELECT * FROM `food_menu`";
        $result = $this->connection->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // public function getCategoryById($id) {
    //     $stmt = $this->connection->prepare("SELECT id, name, image FROM categories WHERE id = ?");
    //     $stmt->bind_param("i", $id);
    //     $stmt->execute();
    //     $result = $stmt->get_result();
    //     $category = $result->fetch_assoc();
    //     $stmt->close();
    //     return $category;
    // }

    // public function updateCategory(FoodCategory $category) {
    //     $id = $category->getId();
    //     $name = $category->getName();
    //     $image = $category->getImage();
    //     $stmt = $this->connection->prepare("UPDATE categories SET name = ?, image = ? WHERE id = ?");
    //     $stmt->bind_param("ssi", $name, $image, $id);
    //     $stmt->execute();
    //     $stmt->close();
    // }

    // public function deleteCategory($id) {
    //     $stmt = $this->connection->prepare("DELETE FROM categories WHERE id = ?");
    //     $stmt->bind_param("i", $id);
    //     $stmt->execute();
    //     $stmt->close();
    // }

    // public function getFoodMenuById($id) {
    //     $stmt = $this->connection->prepare("SELECT id, category_id, name, price FROM food_menus WHERE id = ?");
    //     $stmt->bind_param("i", $id);
    //     $stmt->execute();
    //     $result = $stmt->get_result();
    //     $foodMenu = $result->fetch_assoc();
    //     $stmt->close();
    //     return $foodMenu;
    // }

    // public function updateFoodMenu(FoodMenu $foodMenu) {
    //     $id = $foodMenu->getId();
    //     $categoryId = $foodMenu->getCategoryId();
    //     $name = $foodMenu->getName();
    //     $price = $foodMenu->getPrice();
    //     $stmt = $this->connection->prepare("UPDATE food_menus SET category_id = ?, name = ?, price = ? WHERE id = ?");
    //     $stmt->bind_param("isdi", $categoryId, $name, $price, $id);
    //     $stmt->execute();
    //     $stmt->close();
    // }

    // public function deleteFoodMenu($id) {
    //     $stmt = $this->connection->prepare("DELETE FROM food_menus WHERE id = ?");
    //     $stmt->bind_param("i", $id);
    //     $stmt->execute();
    //     $stmt->close();
    // }
}

// Usage example:
// $crud = new Functions();

// // Adding categories
// $category1 = new FoodCategory(null, 'Category 1', 'category1.jpg');
// $crud->addCategory($category1);

// // Adding food menus
// $foodMenu1 = new FoodMenu(null, 1, 'Food 1', 10.99);
// $crud->addFoodMenu($foodMenu1);

// // Retrieve and display category and food menu details
// $category = $crud->getCategoryById(1);
// if ($category) {
//     echo "Category Name: {$category['name']}<br>";
//     echo "Category Image: {$category['image']}<br>";
// }

// $foodMenu = $crud->getFoodMenuById(1);
// if ($foodMenu) {
//     echo "Food Name: {$foodMenu['name']}<br>";
//     echo "Price: {$foodMenu['price']}<br>";
// }
