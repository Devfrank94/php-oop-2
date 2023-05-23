<?php
include __DIR__ . '/Database/db.php';

// var_dump($products)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CDN Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>PHP OOP 2</title>
</head>

<body>
<main class="pt-3">

<div class="container my-4">
    <h1 class="my-4">Boolshop</h1>
    <h3 class="my-2">I miei prodotti</h3>
    <div class="row">
        <?php foreach ($products as $product) : ?>
            <div class="col-3 p-2">
                <div class="card h-100">
                    <div class="position-relative h-100">
                    <img src=<?php echo "'$product->image'" ?> alt="" class="h-100 card-img-top">
                    <p class="position-absolute bottom-0 end-0 m-4 rounded-circle d-flex justify-content-center align-items-center">
                        <?php if($product->genre == 'Cat'): ?>
                        <i class="fa-solid fa-cat fs-5 p-2 rounded-circle bg-info"></i>
                        <?php elseif($product->genre == 'Dog'): ?>
                        <i class="fa-solid fa-dog fs-5 p-2 rounded-circle bg-warning"></i>
                        <?php else:?>
                            <i class="fa-solid fa-dog fs-5 p-2 rounded-circle bg-warning me-2"></i>
                            <i class="fa-solid fa-cat fs-5 p-2 rounded-circle bg-info"></i>
                        <?php endif; ?>
                    </p>
                    </div>
                  
                    <div class="card-body">
                        <h6 class="card-title fw-bold"><?php echo $product->name ?></h6>
                        <p class="card-text">
                            Prezzo: <?php echo $product->price; ?>€
                        </p>
                        <p class="card-text">
                          Categoria Prodotto: <?php echo $product->family; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</main>



</body>

</html>