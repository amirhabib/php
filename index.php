<?php

    $colors = array('red', 'green');  //  legacy, create an array using a function

    //  Add more items to an array
    $colors[] = 'blue';
    $colors[] = 'yellow';


    //  access an item by its index
    echo $colors[1];            //  green
    //  echo $colors[7];            //  index not found

    $colors[10] = 'pink';       //  assign value to an index that does not exist, is OK!

    //  Length of an array
    $array_length = count($colors);
    echo "Length of array is $array_length";

    //  Loop through an array with for
    echo "<ul>";
    for($i=0; $i < $array_length; $i++)
        echo "<li>" . $colors[$i] . "</li>";
    echo "</ul>";


    echo "<hr>";

    //  Loop through an array with foreach
    foreach($colors as $color)
        echo $color . " ";

    echo "<hr>";

    //  Loop through an array with foreach
    foreach($colors as $key => $value)
        echo $key . "=" . $value . "<br>";

    //  print an array for debuggning
    print_r( $colors );