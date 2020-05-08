<?php

    $dictionary = [];

    $dictionary['one'] = 'אחד';
    $dictionary['two'] = 'שתיים';
    $dictionary['ten'] = 'עשר';

    $dictionary[] = 'שלום עולם';

    $arr = [];
    $arr[1] = 'hi';
    $arr[0] = 'world';

    //  Loop through keys and values
    foreach($dictionary as $english => $hebrew)
        echo "$english in Hebrew is $hebrew" . "<br>";

    //  Loop through value
    foreach($dictionary as $xyz)
        echo "$xyz" . "<br>";

    //  Return keys as an array
    $keys = array_keys( $dictionary );

    print_r( $keys );
    
    print_r( $dictionary );

    print_r( $arr ); 