<?php

    session_start();
    require 'database.php';

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
// $splc = preg_match('@[#, $, &, *]@', $password);

if(empty($name)){
    $err_msg = 'Please write your name';

    header('location:registration.php?name_error='.$err_msg);
}
else if(empty($email)){
    $err_msg = 'Please write your email';

    header('location:registration.php?email_error='.$err_msg);
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $err_msg = 'Please write correct email formate';

    header('location:registration.php?email_error='.$err_msg);
}
else if(empty($password)){
    $err_msg = 'Enter password';

    header('location:registration.php?password_error='.$err_msg);
}
// else if(!$upper || !$lower || !$number || !$splc || strlen($password) < 8){
//     $err_msg = 'give a storng password';

//     header('location:registration.php?password_error='.$err_msg);
// }

else if(empty($re_password)){
    $err_msg = 'Please Confirme your password';

    header('location:registration.php?re_password_error='.$err_msg);
}
else if($password != $re_password){
    $err_msg = 'confirm password is incorrect';

    header('location:registration.php?re_password_error='.$err_msg);
}
else if(empty($gender)){
    $err_msg = 'select your gender';

    header('location:registration.php?gender_error='.$err_msg);
}

else{

    $uploaded_photo = $_FILES['photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $extension = end($after_explode);
    $allowed_extention = array('jpg', 'jpeg', 'png', 'gif');
     if(in_array($extension, $allowed_extention)){
        if($uploaded_photo['size'] <= 500000){

            $insert = "INSERT INTO users(name, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')";
            $insert_result = mysqli_query($db_connection, $insert);

            $user_id = mysqli_insert_id($db_connection);

            $file_name = $user_id.'.'.$extension;
            $new_location = "uploads/users/".$file_name;
            move_uploaded_file($uploaded_photo['tmp_name'], $new_location);

            $update = "UPDATE users SET photo='$file_name' WHERE id=$user_id";
            $update_result = mysqli_query($db_connection, $update);

            $_SESSION['success'] = 'Successfully submited !!!';
            header('location:registration.php');
            

        }
        else{
            echo "The File size is Big";
        }

     }
     else{
        echo "The file extension is not allowed";
     }







}



?>