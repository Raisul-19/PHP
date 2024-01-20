<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'phpclass7review';

    $db_connection = mysqli_connect($host, $user, $password, $db_name);

    // if($db_connection){
    //     echo "database connected";
    // }
    // else{
    //     echo "couldn't connected";
    // }
                        //     or use function..

    mysqli_errno($db_connection);

?>

<?php

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];



    // form validation ..

    if(empty($name)){
        $err_msg = 'Please give your name*';
        header('location:index.php?nam_err='.$err_msg);
    }

    else if(empty($email)){
        $err_msg = 'Please give your email*';
        header('location:index.php?eml_err='.$err_msg);
    }

    else if(empty($password)){
        $err_msg = 'Please give a strong password*';
        header('location:index.php?pass_err='.$err_msg);
    }

    else if(empty($gender)){
        $err_msg = 'Please select your gender*';
        header('location:index.php?gen_err='.$err_msg);
    }

    else{

        $insert = "INSERT INTO usersinfo (name, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')";

        $insert_result = mysqli_query($db_connection, $insert);
    
        $success = "submited successfully!";
        header('location:index.php?success='.$success);

    }





 


?>