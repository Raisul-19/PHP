<?php

    require 'database.php';

?>

<?php

    $id = $_POST['id'];
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

     // $upper = preg_match('@[A-Z]@', $password);
    // $lower = preg_match('@[a-z]@', $password);
    // $number = preg_match('@[0-9]@', $password);
    // $spcl = preg_match('@[#, $, &, *]@', $password);

    if(empty($name)){
        $err_msg = "Please write your name";
        header('location:edit-users.php?name_error='.$err_msg);
    }
    else if(empty($email)){
        $err_msg = "Please write your email address";
        header('location:edit-users.php?email_error='.$err_msg);
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err_msg = "write correct email formate";
        header('location:edit-users.php?email_error='.$err_msg);
    }
    else if(empty($password)){
        $err_msg = "Create your password";
        header('location:edit-users.php?password_error='.$err_msg);
    }
    // else if(!$upper || !$lower || !$number || !$spcl || strlen($password) < 8){
    //     $err_msg = "Create a strong password";
    //     header('location:register.php?password_error='.$err_msg);
    // }
   
    else if(empty($gender)){
        $err_msg = "Please select your gender";
        header('location:edit-users?gender_error='.$err_msg);
    }
    else{
        if($_FILES['photo']['name'] != ''){

            $select = "SELECT photo FROM users WHERE id=$id";
            $select_result = mysqli_query($db_connection, $select);
            $after_assoc = mysqli_fetch_assoc($select_result);

            $delete_photo = "uploads/users/".$after_assoc['photo'];
            unlink($delete_photo);

            $uploaded_file = $_FILES['photo'];
            $after_explode = explode('.', $uploaded_file['name']);
            $extension = end($after_explode);
            $allowed_extension = array('jpg', 'jpeg','png', 'gif');
            if(in_array($extension, $allowed_extension)){
                if($uploaded_file['size'] <= 5000000){

                    $update = "UPDATE users SET name='$name', email='$email', password='$password', gender='$gender' WHERE id=$id";
                    $update_result = mysqli_query($db_connection, $update);

                    $file_name = $id.'.'.$extension;
                    $new_location = "uploads/users/".$file_name;
                    move_uploaded_file($uploaded_file['tmp_name'], $new_location);

                    $update_photo = "UPDATE users SET photo='$file_name' WHERE id=$id";
                    $update_photo_result = mysqli_query($db_connection, $update_photo);

                    header('location:edit-users.php');


                }
                else{
                    $err_msg = "This image size is big";
                    header('location:edit-users.php?img_error='.$err_msg);
                }
            }
            else{
                $err_msg = "This image formate is not allowed";
                header('location:edit-users.php?img-error='.$err_msg);
            }

        }
        else{
            $update = "UPDATE users SET name='$name', email='$email', password='$password', gender='$gender' WHERE id=$id";
            $update_result = mysqli_query($db_connection, $update);

            header('location:users.php');

        }
    }

?>