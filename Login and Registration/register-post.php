<?php

    require 'database.php';

    $name = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rePassword = $_POST['rePassword'];
    $gender = $_POST['gender'];


    $uploaded_file = $_FILES['photo'];
    $after_explod = explode('.', $uploaded_file['name']);
    $extension = end($after_explod);
    $allowed_extension = array('jpg', 'jpeg', 'png', 'gif');
    if(in_array($extension, $allowed_extension)){

        if($uploaded_file['size'] <= 1000000){

            $insert = "INSERT INTO users (name, email, password, gender) VALUES ('$name','$email','$password','$gender')";
            $insert_result = mysqli_query($db_connection, $insert);

            $user_id = mysqli_insert_id($db_connection);
            $file_name = $user_id.'.'.$extension;
            $new_location = "upload/user/".$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update = "UPDATE users SET photo='$file_name' WHERE id=$user_id";
            $update_result = mysqli_query($db_connection, $update);

            $success = "Successfuly Submited !!";
            header('location:registration.php?success='.$success);

        }
        else{
            echo 'file size is big';
        }

    }
    else{
        echo 'Extension not supported';
    }





?>