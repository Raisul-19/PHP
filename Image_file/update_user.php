<?php

    require 'database.php';

?>

<?php

    $id = $_POST['id'];

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];



    if($_FILES['photo']['name'] != ''){

        $select = "SELECT photo FROM users WHERE id=$id";
        $select_result = mysqli_query($db_connection, $select);
        $after_assoc = mysqli_fetch_assoc($select_result);

        $delete = "uploads/users/".$after_assoc['photo'];
        unlink($delete);

        $uploaded_photo = $_FILES['photo'];
        $after_explode = explode('.', $uploaded_photo['name']);
        $extension = end($after_explode);
        $allowed_extension = array('jpg', 'jpeg', 'png', 'gif');

        if(in_array($extension, $allowed_extension)){
            if($uploaded_photo['size'] <= 500000){

                $update = "UPDATE users SET name='$name', email='$email', password='$password', gender='$gender' WHERE id=$id";
                $update_result = mysqli_query($db_connection, $update);

                $file_name = $id.'.'.$extension;
                $new_location = "uploads/users/".$file_name;
                move_uploaded_file($uploaded_photo['tmp_name'], $new_location);

                $update_photo = "UPDATE users SET photo='$file_name' WHERE id=$id";
                $update_photo_result = mysqli_query($db_connection, $update_photo);

                header('location:users.php');


            }
            else{
                echo "This image size is big";
            }

        }
        else{
            echo "This image extension is not allowed";
        }

    }
    else{

        $update = "UPDATE users SET name='$name', email='$email', password='$password', gender='$gender' WHERE id=$id";
        $update_result = mysqli_query($db_connection, $update); 
     
     
        header('location:users.php');
     
    }



?>