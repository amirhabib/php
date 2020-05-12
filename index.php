<?php

    //  Requires
    require 'includes/classes/product.php';
    require 'includes/config/database.php';

    //  Initiate Object by id
    $p = new Product();
    $p->id = 1;             //  Bamba
    $p->read_from_db();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1><?= $p->name ?></h1>
    <p>Price is <?= $p->price ?></p>

</body>
</html>