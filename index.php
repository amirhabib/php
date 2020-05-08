<?php

    $library = [];

    $library['php'] = [
        "php and Mysql by O'reilly",
        "PHP 7 by Wrox",
        "Professional PHP by Wrox"
    ];


    $library['css'] = [
        'CSS3 without a framework',
        'Bootstrap 5',
        'CSS Cookbook'
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Books</h1>

    <?php foreach($library as $category => $books) : ?>
    <div>
        <h2><?= $category; ?></h2>
        <ul>
            <?php foreach($books as $bookName) : ?>
            <li><?= $bookName ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endforeach; ?>

</body>
</html>