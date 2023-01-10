<?php

class Product {
  public $category;
  public $image;
  public $title;
  public $price;
  public $type;

  public function __construct($category, $image, $title, float $price, $type)
  {
    $this->category = $category;
    $this->image = $image;
    $this->title = $title;
    $this->price = $price;
    $this->type = $type;

  }
}