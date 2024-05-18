<?php

    $host_name = 'localhost';
    $host_user = 'root';
    $host_password = '';
    $db_name = 'raisul';

    $db_connection = mysqli_connect($host_name, $host_user, $host_password, $db_name);
    mysqli_errno($db_connection);


?>