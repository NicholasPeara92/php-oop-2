<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {
  public $flavour;

  public function __construct($category, $image, $title, $price, $type, $flavour)
  {
    parent::__construct($category, $image, $title, $price, $type);
    $this->flavour = $flavour;
  }
}