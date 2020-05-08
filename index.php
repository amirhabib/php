<?php

        $covide_notice_active = false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello there</h1>

    <?php


        //  OPTION 1

        // if($covide_notice_active) {
        //     echo "<div>";
        //     echo "Due to COVID-19 please wash your hands.";
        //     echo "</div>";
        // } else {
        //     echo "<p>Good to see you here</p>";
        // }

    ?>


    <?php

        //  OPTION 2 

        if($covide_notice_active) {

    ?>
        <div>
            Due to COVID-19 please wash your hands.
        </div>
    <?php } else { ?>
        <p>
            Good to see you here
        </p>
    <?php } ?>



    <?php if($covide_notice_active) : ?>
        <div>
            Due to COVID-19 please wash your hands.
        </div>
    <?php else: ?>
        <p>Good to see you here</p>
    <?php endif ?>

</body>
</html>