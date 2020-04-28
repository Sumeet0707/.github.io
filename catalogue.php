<?php
    require_once 'Product.php';
    $p = new Product();
    $products = $p->showAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogue</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
	
        .products {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-auto-rows: min-content;
            grid-gap: 3rem;
            padding: 3rem;
        }

        .card .pic2 {
            display: none;
        }

        .card {
            cursor: pointer;
        }

        .card:hover .pic1 {
            display: none;
        }

        .card:hover .pic2 {
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="products">
        <?php foreach($products as $product) : ?>
            <div class="card" style="width: 18rem; text-align: center">
                <img class="card-img-top pic1" src="./img/products/<?= $product["picture1"] ?>" alt="<?= $product["title"] ?>">
                <img class="card-img-top pic2" src="./img/products/<?= $product["picture2"] ?>" alt="<?= $product["title"] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $product["title"] ?></h5>
                    <p class="card-text"><?= $product["status"] ?></p>
                    <p class="card-text">$<?= $product["price"] ?></p>
                </div>
            </div>

        <?php endforeach; 			?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
