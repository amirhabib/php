<?php

    $ip = isset($_GET['ip']) ? $_GET['ip'] : $_SERVER['REMOTE_ADDR'];

    $url = "https://api.ip2country.info/ip?$ip";

    $response = file_get_contents( $url );

    $data = json_decode($response, true);

    echo "IP $ip belongs to ". $data['countryName'];
