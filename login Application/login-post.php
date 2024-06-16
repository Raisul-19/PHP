<?php
    require 'database.php';

?>
<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT COUNT(*) as login FROM users WHERE email='$email' and password='$password'";
    $select_result = mysqli_query($db_connection, $select);
    $after_assoc = mysqli_fetch_assoc($select_result);

    if($after_assoc['login']==1){

        header('location:users.php');

    }
    else{

        $err_msg = "Invalid email or password";
        header('location:login.php?login_error='.$err_msg);
    }



?>