<?php

    $name = isset($_GET['name']) ? $_GET['name'] : 'Stranger';
    $age = isset($_GET['age']) ? $_GET['age'] : null;

?>
<h1>Hello <?= $name ?></h1>

<?php if(!is_null($age)) : ?>
<p>You are <?= $age ?> years old</p>
<?php else: ?>
<p>You are not allowed to enter here
<?php endif; ?>