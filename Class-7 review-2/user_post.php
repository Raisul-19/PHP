<?php

    $host_name = 'localhost';
    $host_user = 'root';
    $host_pass = '';
    $db_name = 'creative_it';

    $db_connection = mysqli_connect($host_name, $host_user, $host_pass, $db_name);

    // if($db_connection){
    //     echo "successfully connected";
    // }                                        ////  checking the database connection 
    // else{
    //     echo "can not connect";
    // }

    mysqli_errno($db_connection);

?>



<?php

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];


    if(empty($name)){
        $err_msg = 'write youe name';
        header('location:index.php?name_error='.$err_msg);
    }

    else if(empty($email)){
        $err_msg = 'write your email';

        header('location:index.php?email_error='.$err_msg);
    }
    else if(empty($password)){
        $err_msg = 'write your password';

        header('location:index.php?password_error='.$err_msg);
    }
    else if(empty($gender)){
        $err_msg = 'Select your gender';

        header('location:index.php?gender_error='.$err_msg);
    }

    else{

        $insert = "INSERT INTO users(name, email, password, gender) VALUES('$name', '$email', '$password', '$gender')";

        $insert_result = mysqli_query($db_connection, $insert);

        $success = 'Successfully submited !!!';
        header('location:index.php?success='.$success);
    }


?>