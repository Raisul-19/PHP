<?php

    session_start();
    require 'db.php';


    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT COUNT(*) as login FROM users WHERE email='$email' and password='$password'";
    $select_result = mysqli_query($db_connection, $select);
    $after_assoc = mysqli_fetch_assoc($select_result);
 

    if($after_assoc['login']==1){

        $_SESSION['login'] = "loged In";
        setcookie('nam', 'valu', time()+(120));
        header('location:users.php');
    }
    else{
        $_SESSION['login_error'] = "Invalid Email or Password";
        header('location:login.php');
    }


?>