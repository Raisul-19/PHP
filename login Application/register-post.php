<?php

    require 'database.php';


    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $gender = $_POST['gender'];

    // $upper = preg_match('@[A-Z]@', $password);
    // $lower = preg_match('@[a-z]@', $password);
    // $number = preg_match('@[0-9]@', $password);
    // $spcl = preg_match('@[#, $, &, *]@', $password);

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
    // else if(!$upper || !$lower || !$number || !$spcl || strlen($password) < 8){
    //     $err_msg = "Create a strong password";
    //     header('location:register.php?password_error='.$err_msg);
    // }
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

        $uploaded_file = $_FILES['photo'];
        $after_explode = explode('.', $uploaded_file['name']);
        $extension = end($after_explode);
        $allowed_extension = array('jpg', 'jpeg', 'png', 'gif');
        if(in_array($extension, $allowed_extension)){
            if($uploaded_file['size'] <= 5000000){

                $insert = "INSERT INTO users (name, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')";
                $insert_result = mysqli_query($db_connection, $insert);

                $user_id = mysqli_insert_id($db_connection);
                $file_name = $user_id.'.'.$extension;
                $new_location = "uploads/users/".$file_name;

                move_uploaded_file($uploaded_file['tmp_name'], $new_location);

                $update_photo = "UPDATE users SET photo='$file_name' WHERE id=$user_id";
                $update_photo_result = mysqli_query($db_connection, $update_photo);

                $success_msg = "Successfully Submited Information !";
                header('location:register.php?success='.$success_msg);

            }
            else{
                $err_msg = "File size is veri big";
                header('location:register.php?file_error='.$err_msg);
            }
        }
        else{
            $err_msg = "File Extension is not allowed !";
            header('location:register.php?file_error='.$err_msg);
        }


        $insert = "INSERT INTO users (name, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')";
        $insert_result = mysqli_query($db_connection, $insert);

        $success_msg = "Successfully Submited Information !";
        header('location:register.php?success='.$success_msg);
    }



?>