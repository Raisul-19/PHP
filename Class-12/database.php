<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'phpclass9';

    $connection = mysqli_connect($host, $user, $password, $db);

    mysqli_errno($connection);     // checking databse connected or not 

?>