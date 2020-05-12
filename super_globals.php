<?php

    //  Supper Global Variables

    print_r($_SERVER);

    //  IP ADDRESS OF USER
    $client_ip_address = $_SERVER['REMOTE_ADDR'];

    //  GET POST PUT UPDATE etc.
    $request_method = $_SERVER['REQUEST_METHOD'];

    
    //  Additional Super Global Variables

    /**  
     *  $_SERVER
     *  $_GET   $_POST   $_REQUEST
     *  $_FILES
     *  $_SESSION
     *  $_COOKIE
    */
        


?>