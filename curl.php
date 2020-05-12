<?php

// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "https://www.boi.org.il/currency.xml?curr=01");
curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
$result = curl_exec($ch);

//  echo $result;  

$st = simplexml_load_string($result);

echo $st;

// close cURL resource, and free up system resources
curl_close($ch);
?>