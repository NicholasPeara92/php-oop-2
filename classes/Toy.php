<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product {
  public $material;

  public function __construct($category, $image, $title, $price, $type, $material)
  {
    parent::__construct($category, $image, $title, $price, $type);
    $this->material = $material;
  }
}