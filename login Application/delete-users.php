<?php

    require 'database.php';

    $id = $_GET['id'];

    $delete = "DELETE FROM users WHERE id=$id";
    $delete_result = mysqli_query($db_connection, $delete);

    header('location:users.php');

?>