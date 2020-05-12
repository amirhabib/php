<?php

    //  Requires
    require '../includes/classes/product.php';
    require '../includes/config/database.php';

    //  Initiate Object by id
    
    $product_id = isset($_GET['id']) ? $_GET['id'] : null;     


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php if( $product_id ) : ?>

        <h1>Product Details</h1>

        <?php 

            $product = new Product( $product_id );

            echo "<h2>You are viewing $product->name</h2>";
            echo "Price is now $product->price";
            

        ?>
        
    <?php else: ?>

        <h1>List of Products</h1>

        <?php

            $all_products = Product::getAll();
            foreach($all_products as $product):
        ?>

                <div>
                    <h2><?= $product['name'] ?></h2>
                    <p>Price is <?= $product['price'] ?></p>
                    <a href="?id=<?= $product['id'] ?>">View Details</a>
                </div>

        <?php endforeach; ?>

    <?php endif; ?>

</body>
</html>