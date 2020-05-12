<?php

    $name = isset($_POST['name']) ? $_POST['name'] : 'Stranger';
    $age = isset($_POST['age']) ? $_POST['age'] : null;

    print_r($_POST);

?>
<h1>Hello <?= $name ?></h1>

<?php if(!is_null($age)) : ?>
<p>You are <?= $age ?> years old</p>
<?php else: ?>
<p>You are not allowed to enter here
<?php endif; ?>