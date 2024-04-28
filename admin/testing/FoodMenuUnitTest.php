<?php
include '../classes/FoodMenu.php';

$overallResult = true;

echo "Food Menu Calss Testing . . . . . . . <br><br>";
//Test Case 1: Create Food Category object
$menu = new FoodMenu("Tea", "tea.jpg", "100", "5");
if($menu->getName() === "Tea" && $menu->getImage() === "tea.jpg" && $menu->getPrice() === "100" && $menu->getCategoryId() === "5") {
    echo "✔ Test Case 1 Passed: Food Menu Object Created successfully.<br>";
} else {
    echo "❌ Test Case 1 Failed: Food Category Object Creation Failed.<br>";
    $overallResult = false;
}

//Test Case 2: Set and Get Name
$menu->setName("Pizza");
if ($menu->getName() === "Pizza") {
    echo "✔ Test Case 2 Passed: Name set and retrieved successfully.<br>";
} else {
    echo "❌ Test Case 2 Failed: Name setting or retrieval failed.<br>";
    $overallResult = false;
}

//Test Case 3: Set and Get Image
$menu->setImage("pizza.jpg");
if ($menu->getImage() === "pizza.jpg") {
    echo "✔ Test Case 3 Passed: Image set and retrieved successfully.<br>";
} else {
    echo "❌ Test Case 3 Failed: Image setting or retrieval failed.<br>";
    $overallResult = false;
}

//Test Case 4: Set and Get Price
$menu->setPrice("200");
if ($menu->getPrice() === "200") {
    echo "✔ Test Case 4 Passed: Price added and retrieved successfully.<br>";
} else {
    echo "❌ Test Case 4 Failed: Price addition or retrieval failed.<br>";
    $overallResult = false;
}

//Test Case 4: Set and Get Category
$menu->setCategoryId("3");
if ($menu->getCategoryId() === "3") {
    echo "✔ Test Case 4 Passed: Category added and retrieved successfully.<br>";
} else {
    echo "❌ Test Case 4 Failed: Category addition or retrieval failed.<br>";
    $overallResult = false;
}

// Display overall test result
if ($overallResult) {
    echo "<br> All test cases passed successfully <br>";
} else {
    echo "<br> nSome test cases failed. Review the individual failure messages above.<br>";
}