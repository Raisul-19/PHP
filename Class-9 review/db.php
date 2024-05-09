<?php

    $host_name = 'localhost';
    $host_user = 'root';
    $host_password = '';
    $db_name = 'creative_it';

    $db_connection = mysqli_connect($host_name, $host_user, $host_password, $db_name);

    mysqli_errno($db_connection);



?>