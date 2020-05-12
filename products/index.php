<?php

    //  Requires
    require '../includes/classes/product.php';
    require '../includes/config/database.php';

    //  Initiate Object by id
    $p = new Product();
    $p->id = isset($_GET['id']) ? $_GET['id'] : null;             
    $p->read_from_db();


    //  Add new product simulation
    // $p = new Product;
    // $p->name = 'Shwarama';
    // $p->price = '35';
    // $p->save_to_db();
    // die();


    //  Update a product simulation
    // $p = new Product;
    // $p->id = 5;
    // $p->price = 40;
    // $p->save_to_db();
    // die();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php if($p->id) : ?>

    <h1><?= $p->name ?></h1>
    <p>Price is <?= $p->price ?></p>

    <?php else: ?>

        <h1>Product id is missing</h1>

    <?php endif; ?>

</body>
</html>