<?php

    $name = "Amir";                                                     //  String in double quotation marks
    $email = 'amir@blabla.com';                                         //  String is single quotation marks

    echo "Hello $name <br>";                                            //  Hello Amir
    echo 'Hello $name <br>';                                            //  Hello $name (because string is in single qoutes)

    echo "Hello $name your email is $email<br>";                        //  Hello Amir your email is amir@blabla.com

    //  String concatination
    echo "Hello" . $name . " your email is " . $email . "<br>";         //  Hello Amir your email is amir@blabla
?>