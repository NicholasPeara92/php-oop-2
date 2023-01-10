<?php
require_once __DIR__ . "/classes/Category.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Toy.php";
require_once __DIR__ . "/data/db.php";

?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container text-center">
      <div class="row">
        <?php foreach($products as $product) { ?>
          <div class="card m-3" style="width: 18rem;">
            <img src="<?php echo $product->image ?>" class="card-img-top" alt="">
            <div class="card-body">
              <h3 class="card-title"><?php echo $product->title ?></h3>
              <h5><?php echo $product->category ?></h5>
              <h5><?php echo $product->type ?></h5>
              <h5><?php echo $product->price ?>€</h5>

            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </body>
</html>