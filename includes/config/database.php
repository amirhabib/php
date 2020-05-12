<?php

    $db_host = 'localhost';
    $db_name = 'fullstack_15';
    $db_user = 'root';
    $db_password = 'root';

    $db_link = mysqli_connect(
        $db_host,
        $db_user,
        $db_password,
        $db_name
    ) or die('There was an error connecting to db');

