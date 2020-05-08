<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet" >
</head>
<body>
    <h1>List of People</h1>

    <div class="people">
        <?php foreach($people as $person) : ?>
         <p class="name <?= $person->getGenderClassName() ?>"><?= $person->name ?></p>
         <?= $person->email ?>
         <hr>
        <?php endforeach; ?>
    </div>

</body>
</html>