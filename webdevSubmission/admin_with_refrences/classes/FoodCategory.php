

<?php
class FoodCategory
{
    // Private properties for the food category
    private $name; // Name of the food category
    private $image; // Image representing the food category
    private $foodMenu; // Array to store food menu items (aggregation)

    // Constructor to initialize the food category with name and image
    public function __construct($name, $image) {
        $this->name = $name; // Set the name
        $this->image = $image; // Set the image
        $this->foodMenu = []; // Initialize the food menu array aggregation by maintaining an array ($foodMenu) 
        // to store food menu items associated with the category
    }

    // Setter method for setting the name of the food category
    
    public function setName($name) {
        $this->name = $name;
    }

    // Getter method for getting the name of the food category
    public function getName() {
        return $this->name;
    }

    // Setter method for setting the image of the food category
    public function setImage($image) {
        $this->image = $image;
    }

    // Getter method for getting the image of the food category
    public function getImage() {
        return $this->image;
    }

    // Aggregation: Setter method for adding a food item to the menu
    // // The setMenu method allows adding menu items
    public function setMenu($menu) {
        $this->foodMenu[] = $menu;
    }

    // Aggregation: Getter method for getting the food menu array
    // the getMenu method retrieves the list of menu item
    public function getMenu() {
        return $this->foodMenu;
    }

}
// https://www.koderhq.com/tutorial/php/oop-composition/
// https://brainbell.com/php/composition-and-aggregation.html#google_vignette
?>
