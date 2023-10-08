<?php

    require 'database.php';

    $name = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rePassword = $_POST['rePassword'];
    $gender = $_POST['gender'];

    $insert = "INSERT INTO users (name, email, password, gender) VALUES ('$name','$email','$password','$gender')";
    $insert_result = mysqli_query($db_connection, $insert);

    header('location:registration.php');


?>