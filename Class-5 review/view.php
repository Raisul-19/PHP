<?php

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_pass = $_POST['re_password'];
    $country = $_POST['country'];


    $upper = preg_match('@[A-Z]@', $password);
    $lower = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $spsl = preg_match('@[#,$,&,*]@', $password);


    if(empty($name)){
        $err_msg = 'please enter your name';

        header('location:index.php?name_error='.$err_msg);

    }
    else if(empty($email)){
        $err_msg = 'please enter your email';
        header('location:index.php?email_error='.$err_msg);
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err_msg = 'enter correct email';

        header('location:index.php?email_error='.$err_msg);
  
    }

    else if(empty($password)){
        $err_msg = 'please enter your password';

        header('location:index.php?pass_error='.$err_msg);
    }

    else if(!$upper || !$lower || !$number || !$spsl || strlen($password) < 8){
        $err_msg = 'give strong password';

        header('location:index.php?pass_error='.$err_msg);

    }

    else if(empty($re_pass)){
        $err_msg = 'please re_enter your password';

        header('location:index.php?re_pass_error='.$err_msg);
    }

    else if($password != $re_pass){
        $err_msg = 'enter correct password';

        header('location:index.php?re_pass_error='.$err_msg);

    }

    else if(empty($country)){
        $err_msg = 'Select your country ';

        header('location:index.php?country_error='.$err_msg);

    }



    else{
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $password;
        echo "<br>";
        echo $re_pass;
        echo "<br>";
        echo $country;
    }


?>