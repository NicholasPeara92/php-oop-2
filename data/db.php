<?php

require_once __DIR__ . "/../classes/Product.php";
require_once __DIR__ . "/../classes/Food.php";
require_once __DIR__ . "/../classes/Category.php";
require_once __DIR__ . "/../classes/Toy.php";

$dog = new Category("Cane", "<i class=\"fa-solid fa-dog\"></i>");
$cat = new Category("Gatto", "<i class=\"fa-solid fa-cat\"></i>");


$food = new Food("https://m.media-amazon.com/images/I/81sM2DcxAML._AC_UL320_.jpg", "bocconcini Friskies", 10, $dog);
$food->setExpiration("11/02/2023");

$toy = new Toy("https://m.media-amazon.com/images/I/61z3PL6eB2L._AC_UL320_.jpg", "pesce giocattolo", 20, $cat);
$toy->setMaterial("plastica");

$prod_base = new Product("https://m.media-amazon.com/images/I/A1gCimTIrtL._AC_UL320_.jpg", "cuccia per cani", 30, $dog);


$products = [
  $food,
  $toy,
  $prod_base,
];