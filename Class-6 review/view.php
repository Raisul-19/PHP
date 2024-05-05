<?php

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];


    // $upper = preg_match('@[A-Z]@', $password);
    // $lower = preg_match('@[a-z]@', $password);
    // $number = preg_match('@[0-9]@', $password);
    // $splcr = preg_match('@[#, $, &, *]@', $password);

    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $hobbies = $_POST['hobbies'];
    $hobbies_after_implode = implode(', ', $hobbies);
    $subject = $_POST['subject'];
    $subject_after_implode = implode(', ', $subject);
    $message = $_POST['message'];
    $dob = $_POST['dob'];


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
    
    // else if(!$upper || !$lower || !$number || !$splcr || strlen($password) < 8){
    //     $err_msg = 'give a strong password';

    //     header('location:index.php?pass_error='.$err_msg);

    // }

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

    else if(empty($gender)){
        $err_msg = "Select your Gender";

        header('location:index.php?gender_error='.$err_msg);

    }

    else if(empty($hobbies)){
        $err_msg = 'select your hobbies ';

        header('location:index.php?hobbies_error='.$err_msg);
    }

    else if(empty($subject)){
        $err_msg = 'select your subjects ';

        header('location:index.php?subject_error='.$err_msg);
    }

    else if(empty($message)){
        $err_msg = 'write your problem here';

        header('location:index.php?message_error='.$err_msg);
    }

    else if(str_word_count($message) > 10){
        $err_msg = 'Your message more than 10 word';

        header('location:index.php?message_error='.$err_msg);
    }

    else if(empty($dob)){
        $err_msg = 'give your date of birth';

        header('location:index.php?dob_error='.$err_msg);
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
        echo $gender;
        echo '<br>';
        echo $hobbies_after_implode;
        echo '<br>';
        echo $subject_after_implode;
        echo '<br>';
        echo $message;
        echo '<br>';
        echo $dob;
        echo '<br>';
    }


?>