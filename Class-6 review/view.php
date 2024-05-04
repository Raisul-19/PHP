<?php

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $country = $_POST['country'];

    $upper = preg_match('@[A-Z]@', $password);
    $lower = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $splcr = preg_match('@[#, $, &, *]@', $password);



    if(empty($name)){
        $err_msg = 'Please write your name !';

        header('location:index.php?name_error='.$err_msg);
    }

    
    else if(empty($email)){
        $err_msg = 'Please write your email !';

        header('location:index.php?email_error='.$err_msg);
    }

    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err_msg = 'please write correct email formate';

        header('location:index.php?email_error='.$err_msg);
    }

    else if(empty($password)){
        $err_msg = 'Please give a password !';

        header('location:index.php?pass_error='.$err_msg);
    }
    
    else if(!$upper || !$lower || !$number || !$splcr || strlen($password) < 8){
        $err_msg = 'give a strong password';

        header('location:index.php?pass_error='.$err_msg);

    }

    else if(empty($re_password)){
        $err_msg = 'Confirm your password';

        header('location:index.php?re_pass_error='.$err_msg);

    }

    else if($re_password != $password){
        $err_msg = "your password didn't match";

        header('location:index.php?re_pass_error='.$err_msg);

    }

    else if(empty($country)){
        $err_msg = "Select your country";

        header('location:index.php?country_error='.$err_msg);

    }





    else{
        echo $name;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $password;
        echo '<br>';
        echo $re_password;
        echo '<br>';
        echo $country;
        echo '<br>';
    }


?>