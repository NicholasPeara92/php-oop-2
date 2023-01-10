<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product {
  public $type;
  public $material;

  public function __construct($category, $image, $title, $price, $type, $material)
  {
    parent::__construct($category, $image, $title, $price);
    $this->type = $type;
    $this->material = $material;
  }
}