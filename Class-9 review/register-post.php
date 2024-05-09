<?php

    require 'db.php';

?>



<?php

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    $gender = $_POST['gender'];


    // $upper = preg_match('@[A-Z]@', $password);
    // $lower = preg_match('@[a-z]@', $password);
    // $number = preg_match('@[0-9]@', $password);
    // $splcr = preg_match('@[#, $, &, *]@', $password);





    if(empty($name)){
        $err_msg = 'Please write your name !';

        header('location:register.php?name_error='.$err_msg);
    }

    
    else if(empty($email)){
        $err_msg = 'Please write your email !';

        header('location:register.php?email_error='.$err_msg);
    }

    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err_msg = 'please write correct email formate';

        header('location:register.php?email_error='.$err_msg);
    }

    else if(empty($password)){
        $err_msg = 'Please give a password !';

        header('location:register.php?pass_error='.$err_msg);
    }
    
    // else if(!$upper || !$lower || !$number || !$splcr || strlen($password) < 8){
    //     $err_msg = 'give a strong password';

    //     header('location:index.php?pass_error='.$err_msg);

    // }

    else if(empty($re_password)){
        $err_msg = 'Confirm your password';

        header('location:register.php?re_pass_error='.$err_msg);

    }

    else if($re_password != $password){
        $err_msg = "your password didn't match";

        header('location:register.php?re_pass_error='.$err_msg);

    }


    else if(empty($gender)){
        $err_msg = "Select your Gender";

        header('location:register.php?gender_error='.$err_msg);

    }





    else{

        $insert = "INSERT INTO users (name, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')";

        $insert_result = mysqli_query($db_connection, $insert);

        $success = 'Successfully Registered !!!';
        header('location:register.php?success='.$success);

    }


?>