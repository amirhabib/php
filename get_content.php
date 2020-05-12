<?php

    //  REad text file
    $st = file_get_contents('data.txt');

    echo $st;

    echo "<hr>";

    //  Read JSON file
    $json = file_get_contents('data.json');
    echo $json;

    $json = json_decode($json, true);

    echo $json['name'];
    echo "<hr>";


    //  Read CSV file
    $file_handler = fopen('data.csv','r');

    while($one_string_at_a_time = fgets($file_handler)) {

        $fields = explode(',', $one_string_at_a_time);

        echo "Product name: " . $fields[0] . "<br>";
        echo "Product price: " . $fields[1] . "<br>";
        echo "Product category: " . $fields[2] . "<br>";
    }

    fclose($file_handler);


    echo "<hr>";

    $file_handler = fopen('message_from_php_' . mktime() . '.text','w');
    fputs($file_handler, 'Hello from php it is now ' . date('d/M/Y H:i:s') );
    fclose($file_handler);

