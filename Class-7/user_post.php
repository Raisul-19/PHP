<?php


    $host = 'localhost';
    $user = 'root';
    $password = '';
    $bd = 'phpclass7';

    $db_connection = mysqli_connect($host, $user, $password, $bd);
            // // if($db_connection){
            // //     echo "database connected";
            // // }
            // // else{                                     // checking database connected or not..
            // //     echo "could not connecta to db";
            // // }

            // mysqli_errno($db_connection);



    $name =$_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    if(empty($name)){
        $err_msg = "Name is missing !";
        header('location:index.php?nam_err='.$err_msg);
    }
    if(empty($email)){
        $err_msg = "email is missing !";
        header('location:index.php?email_err='.$err_msg);
    }

    else{
            
        $insert = "INSERT INTO users (name, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')";

        $run = mysqli_query($db_connection, $insert);


        $success = "Successfully Submited Information !!!";
        header('location:index.php?success='.$success);
    }



?>