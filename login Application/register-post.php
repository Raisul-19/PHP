<?php

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $gender = $_POST['gender'];

    $upper = preg_match('@[A-Z]@', $password);
    $lower = preg_match('@[a-z]@', $password);
    $nember = preg_match('@[0-9]@', $password);
    $spcl = preg_match('@[#, $, &, *]@', $password);

    if(empty($name)){
        $err_msg = "Please write your name";
        header('location:register.php?name_error='.$err_msg);
    }
    else if(empty($email)){
        $err_msg = "Please write your email address";
        header('location:register.php?email_error='.$err_msg);
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err_msg = "write correct email formate";
        header('location:register.php?email_error='.$err_msg);
    }
    else if(empty($password)){
        $err_msg = "Create your password";
        header('location:register.php?password_error='.$err_msg);
    }
    else if(!$upper | !$lower | !$number | !$spcl | strlen($password) < 8){
        $err_msg = "Create a strong password";
        header('location:register.php?password_error='.$err_msg);
    }
    else if(empty($re_password)){
        $err_msg = "Please confirm your password";
        header('location:register.php?re_password_error='.$err_msg);

    }
    else if($re_password != $password){
        $err_msg = "Your password is not match";
        header('location:register.php?re_password__error='.$err_msg);
    }
    else if(empty($gender)){
        $err_msg = "Please select your gender";
        header('location:register.php?gender_error='.$err_msg);
    }

    else{

        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $password;
        echo "<br>";
        echo $re_password;
        echo "<br>";
        echo $gender;
        echo "<br>";
    }



?>