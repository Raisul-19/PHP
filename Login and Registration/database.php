<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'bachelor_haven';

    $db_connection = mysqli_connect($host, $user, $password, $database);
    mysqli_errno($db_connection);


?>