<?php
class FoodMenu
{
  private $name;
  private $image;
  private $price;
  private $categoryId;

  public function __construct($name, $image, $price, $categoryId) {
      $this->name = $name;
      $this->image = $image;
      $this->price = $price;
      $this->categoryId = $categoryId;
  }

  // Getters and setters
  public function setName($name) {
    $this->name = $name;
}
  public function getName() {
      return $this->name;
  }

public function setPrice($price) {
  $this->price = $price;
}
  public function getPrice() {
      return $this->price;
  }

  public function setImage($image) {
      $this->image = $image;
  }

  public function getImage() {
      return $this->image;
  }

  public function setCategoryId($categoryId) {
    $this->categoryId = $categoryId;
  }

  public function getCategoryId() {
      return $this->categoryId;
  }

}