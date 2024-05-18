<?php

    require 'database.php';

?>


<?php

$name = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];
$gender = $_POST['gender'];

$upper = preg_match('@[A-Z]@', $password);
$lower = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);
$splc = preg_match('@[#, $, &, *]@', $password);

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
else if(!$upper || !$lower || !$number || !$splc || strlen($password) < 8){
    $err_msg = 'give a storng password';

    header('location:registration.php?password_error='.$err_msg);
}

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

    $insert = "INSERT INTO users(name, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')";
    $insert_result = mysqli_query($db_connection, $insert);

    $success_msg = 'Successfully submited !!!';
    header('location:registration.php?success='.$success_msg);


}



?>