<?php



    //  Variables

    $x = 3;

    $x = "Hello World";

    $x = ['red', 'green', 'blue'];

    $x[] = 'pink';

    $colors = array('red', 'green', 'blue');

    $num = 3;

    $person = [
        "name" => "Bart Simpson",
        "hobbies" => ['reading', 'skate board']
    ];


    //  Printing out

    echo $num;                

    print_r( $colors ); 

    var_dump( $person );


    //  Loops
    for($i=0; $i< count($colors); $i++)
    {
        echo $colors[$i];
        echo "<br>";
    }

    foreach($colors as $index => $value) {
        echo "Index is $index, value is $value";
    }

    echo "<hr>";

    foreach($person as $key => $value) {

        if( is_array( $value ) ) {

            echo "$key are ";

            // foreach($value as $item) 
            //     echo $item . " ";

            echo implode(", ", $value);
            
            echo "<br>";

        } else {
            echo "$key is $value <br>";
        }
        
    }

?>