<?php

// $password = '12345';

// $secretKey = 'my-scecret-key';

// echo "Hash stored in database :" . md5( $password . $secretKey);
// echo "<br>";

// $input_password = '12345';
// $input_username = 'amir';

// echo "Hash created by input :" . md5( $input_password . $secretKey);
// echo "<br>";

// $sql = "SELECT * from users WHERE username='$input_username' AND password='" . md5($input_password . $secretKey ) . "'";

// echo $sql;
// echo "<br>";

$message = 'Hello Amir how are you';
$phrase = "2020";

$data = [
    "message" => $message,
    "scurity_check" => md5( $message . $phrase )
];


print_r( $data );