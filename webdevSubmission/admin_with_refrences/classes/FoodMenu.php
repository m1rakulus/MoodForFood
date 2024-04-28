
<?php
class FoodMenu
{
    // Private properties for the food menu item
    private $name; // Name of the food item
    private $image; // Image representing the food item
    private $price; // Price of the food item
    private $categoryId; // ID of the category to which the food item belongs

    // Constructor to initialize the food menu item with name, image, price, and category ID
    public function __construct($name, $image, $price, $categoryId) {
        $this->name = $name; // Set the name
        $this->image = $image; // Set the image
        $this->price = $price; // Set the price
        $this->categoryId = $categoryId; // Set the category ID
    }

    // Getter and setter methods for the name property
    public function setName($name) {
        $this->name = $name; // Set the name
    }

    public function getName() {
        return $this->name; // Get the name
    }

    // Getter and setter methods for the price property
    public function setPrice($price) {
        $this->price = $price; // Set the price
    }

    public function getPrice() {
        return $this->price; // Get the price
    }

    // Getter and setter methods for the image property
    public function setImage($image) {
        $this->image = $image; // Set the image
    }

    public function getImage() {
        return $this->image; // Get the image
    }

    // Getter and setter methods for the categoryId property
    public function setCategoryId($categoryId) {
        $this->categoryId = $categoryId; // Set the category ID
    }

    public function getCategoryId() {
        return $this->categoryId; // Get the category ID
    }

}
//https://brainbell.com/php/composition-and-aggregation.html?utm_content=cmp-true 
?>
