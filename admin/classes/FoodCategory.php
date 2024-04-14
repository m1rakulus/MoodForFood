<?php
class FoodCategory
{
  private $name;
  private $image;
  private $foodMenu; // Aggregations

  public function __construct($name, $image) {
      $this->name = $name;
      $this->image = $image;
      $this->foodMenu = [];
  }

  public function setName($name) {
      $this->name = $name;
  }

  public function getName() {
    return $this->name;
}

  public function setImage($image) {
      $this->image = $image;
  }
  
  public function getImage() {
    return $this->image;
  }

  //Aggregation
  public function setMenu($menu) {
    $this->foodMenu[] = $menu;
  }

  public function getMenu() {
    return $this->foodMenu;
  }

}