<?php

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Category.php";
require_once __DIR__ . "/classes/Toy.php";

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

?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>E-commerce</title>

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="row mt-3">
        <?php foreach($products as $product) { ?>
        <div class="col-4">
            <div class="card">
              <img src="<?php echo $product->getImage(); ?>" class="card-img-top" alt="<?php echo $product->getName(); ?>">
              <div class="card-body">
                <div class="fs-2">
                  <?php echo $product->getCategory()->getIcon(); ?>
                </div>
                <h3 class="card-title"><?php echo $product->getName(); ?></h3>
                <p class="card-text"><strong>PREZZO: </strong><?php echo $product->getPrice(); ?>€</p>
                <?php if( method_exists($product, 'getExpiration')) { ?>
                <p><strong>Scadenza: </strong> <?php echo $product->getExpiration(); ?></p>
                <?php } ?>
                <?php if( method_exists($product, 'getMaterial')) { ?>
                <p><strong>Materiale: </strong> <?php echo $product->getMaterial(); ?></p>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php } ?>
      </div>
    </div>
  </body>
</html>