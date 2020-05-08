<?php

$greeting = "Hello world how are you today?";

$words = explode(" ", $greeting);

print_r( $words );

$greeting_with_underscore = implode("_", $words);

echo $greeting_with_underscore;