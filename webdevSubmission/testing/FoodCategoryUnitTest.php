<?php
include '../classes/FoodCategory.php';

$overallResult = true;

echo "Food Category Calss Testing . . . . . . . <br><br>";
//Test Case 1: Create Food Category object
$category = new FoodCategory("Dessert", "dessert.jpg");
if($category->getName() === "Dessert" && $category->getImage() === "dessert.jpg") {
    echo "✔ Test Case 1 Passed: Food Category Object Created successfully.<br>";
} else {
    echo "❌ Test Case 1 Failed: Food Category Object Creation Failed.<br>";
    $overallResult = false;
}

//Test Case 2: Set and Get Name
$category->setName("Appetizers");
if ($category->getName() === "Appetizers") {
    echo "✔ Test Case 2 Passed: Name set and retrieved successfully.<br>";
} else {
    echo "❌ Test Case 2 Failed: Name setting or retrieval failed.<br>";
    $overallResult = false;
}

//Test Case 3: Set and Get Image
$category->setImage("appetizers.jpg");
if ($category->getImage() === "appetizers.jpg") {
    echo "✔ Test Case 3 Passed: Image set and retrieved successfully.<br>";
} else {
    echo "❌ Test Case 3 Failed: Image setting or retrieval failed.<br>";
    $overallResult = false;
}

//Test Case 4: Add Menu Items
$category->setMenu("Salad");
$category->setMenu("Soup");
$category->setMenu("Bread");
$menu = $category->getMenu();
if (count($menu) === 3 && in_array("Salad", $menu) && in_array("Soup", $menu) && in_array("Bread", $menu)) {
    echo "✔ Test Case 4 Passed: Menu items added and retrieved successfully.<br>";
} else {
    echo "❌ Test Case 4 Failed: Menu items addition or retrieval failed.<br>";
    $overallResult = false;
}

// Display overall test result
if ($overallResult) {
    echo "<br> All test cases passed successfully <br>";
} else {
    echo "<br> nSome test cases failed. Review the individual failure messages above.<br>";
}