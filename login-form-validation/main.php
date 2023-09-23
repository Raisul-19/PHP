<?php

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re-password'];
    $country = $_POST['country'];


    $upper = preg_match('@[A-Z]@', $password);
    $lower = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $spcl = preg_match('@[#,$,%,^,&,*]@', $password);

    if(empty($name)){
        $name_error = 'Please write your name.';
        header('location:index.php?name_error='.$err_msg);
    }

    else if(empty($email)){
        $email_error = 'Please write your email.';
        header('location:index.php?email_error='.$email_error);
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error = 'Please write valid email.';
        header('location:index.php?email_error='.$email_error);
    }
    else if(empty($password)){
        $pass_error = 'give your password !';
        header('location:index.php?pass_error='.$pass_error);
    }
    else if(!$upper || !$lower || !$number || !$spcl){
        $pass_error = 'give a strong password !';
        header('location:index.php?pass_error='.$pass_error);
    }




    else if($password != $re_password){
        $rpass_error = 'give the correct password';
        header('location:index.php?rpass_error='.$rpass_error);
    }
    else if(empty($country)){
        $country_error = 'Please select your country';
        header('location:index.php?country_error='.$country_error);
    }


    else{
        echo "Name : ".$name;
        echo "<br>";
        echo "Email : ".$email;
        echo "<br>";
        echo "Password : ".$password;
        echo "<br>";
        echo "Re-Password : ".$re_password;
        echo "<br>";
        echo "Country : ".$country;
        echo "<br>";
    
    }

?>