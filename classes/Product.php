<?php
require_once __DIR__. "/../trait/Name.php";
class Product {
  use Name;
  private $image;
  private $price;
  private $category;
  

  public function __construct($image, $name, float $price, Category $category)
  {
    
    $this->image = $image;
    $this->name = $name;
    $this->price = $price;
    $this->category = $category;

    

  }

  public function getName()
  {
    return $this->name;
  }
  public function getImage()
  {
    return $this->image;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function getCategory()
  {
    return $this->category;
  }
}