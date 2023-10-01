<?php

    require 'header.php';
    require 'database.php';

?>


<?php

    $id = $_POST['id'];
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $gender = $_POST['gender'];


    if($_FILES['photo']['name'] != ''){
        ### for photo delete...

        $select = "SELECT photo FROM users WHERE id=$id";
        $select_result = mysqli_query($connection, $select);
        $after_assoc = mysqli_fetch_assoc($select_result);
        $delete_photo = "upload/user/".$after_assoc['photo'];
        unlink($delete_photo);
        
        $uploaded_file = $_FILES['photo'];
        $after_explod = explode('.', $uploaded_file['name']);
        $extention = end($after_explod);
        $allowed_extention = array('jpg','jpeg','png','gif');
        

        if(in_array($extention, $allowed_extention)){
            if($uploaded_file['size'] <= 500000){

                $update = "UPDATE users SET name='$name', email='$email', password='$pass', gender='$gender' WHERE id=$id";
                $update_result = mysqli_query($connection, $update);

                $file_name = $id.'.'.$extention;
                $new_location = "upload/user/".$file_name;
                move_uploaded_file($uploaded_file['tmp_name'], $new_location);

                $update_photo = "UPDATE users SET photo='$file_name' WHERE id=$id";
                $update_photo_result = mysqli_query($connection, $update_photo);

                header('location:users.php');
            }
            else{
                echo 'file size is bigger';
            }

        }
        else{
            echo 'file extention not match';

        }


    }
    else{

        $update = "UPDATE users SET name='$name', email='$email', password='$pass', gender='$gender' WHERE id=$id ";

        $update_result = mysqli_query($connection, $update);
    
        header('location:users.php');

    }




?>