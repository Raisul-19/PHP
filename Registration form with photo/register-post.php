<?php

    require 'database.php'

?>
<?php

    // print_r($_POST);
    // echo "<br>";

    // $name = $_POST['fname']."<br>".$_POST['email'];
    
    // echo $name;

    $name = $_POST['fname'];
    $email = $_POST['email'];

    // $regex = 'regex value from google';

    $pass = $_POST['password'];

    $upper = preg_match('@[A-Z]@', $pass);
    $lower = preg_match('@[a-z]@', $pass);
    $number = preg_match('@[0-9]@', $pass);
    $splcr = preg_match('@[#,$,,,&,*]@', $pass);

    $rpass = $_POST['re-password'];

    $gender = $_POST['gender'];
    $photo = $_FILES['photo'];

    date_default_timezone_set('asia/dhaka');
    $created_at = date('Y-m-d h:i:s');





    
    if(empty($name)){
        $err_msg = "nam lekh beta !";
        header('location:register.php?nam_err='.$err_msg);
    }
    else if(empty($email)){
        $err_msg = "email de beta !";
        header('location:register.php?eml_err='.$err_msg);
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err_msg = "thik thak email de beta !";
        header('location:register.php?eml_err='.$err_msg);

    }

    // else if(!preg_match($regex, $email)){
    //     $err_msg = "thik thak email de beta !";
    //     header('location:index.php?eml_err='.$err_msg);
    // }

    else if(empty($pass)){
        $err_msg = "gupon number de !";
        header('location:register.php?pass_err='.$err_msg);
    }
    else if(!$upper || !$lower || !$number || !$splcr || strlen($pass) < 8){
        $err_msg = "soktisali gupon number de !";
        header('location:register.php?pass_err='.$err_msg);
    }
    else if(empty($rpass)){
        $err_msg = "gupon number de !";
        header('location:register.php?rpass_err='.$err_msg);
    }
    else if($pass != $rpass){
        $err_msg = " vul gupon number disos !";
        header('location:register.php?rpass_err='.$err_msg);
    }
    else if(empty($gender)){
        $err_msg = "pola na maiya heida ko ?";
        header('location:register.php?gender_err='.$err_msg);
    }


    else{

        $uploaded_file = $_FILES['photo'];
        $after_explod = explode('.', $uploaded_file['name']);
        $extension = end($after_explod);
        $allowed_extension = array('jpg','jpeg','png','gif');

        if(in_array($extension, $allowed_extension)){
            if($uploaded_file['size'] <= 50000000){

                $insert = "INSERT INTO users (name, email, password, gender, created_at) VALUES ('$name', '$email', '$pass', '$gender', '$created_at')";
                $insert_result = mysqli_query($connection, $insert);

                $user_id = mysqli_insert_id($connection);
                $file_name = $user_id.'.'.$extension;
                $new_location = "upload/user/".$file_name;

                move_uploaded_file($uploaded_file['tmp_name'], $new_location);

                $update = "UPDATE users SET photo='$file_name' WHERE id=$user_id";
                $update_result = mysqli_query($connection, $update);


                $success = "Successfully Registered !!!";
                header('location:register.php?succ_msg='.$success);




            }
            else{
                echo "File size is bigger";

                $success = "Failed to submit !!!";
                header('location:register.php?succ_msg='.$success);
            }
            

        }
        else{
            echo "This file extention not allowe";
            $success = "Failed to submit !!!";
            header('location:register.php?succ_msg='.$success);
        }






    }


?>