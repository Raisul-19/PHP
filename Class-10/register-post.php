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

        $insert = "INSERT INTO users (name, email, password, gender) VALUES ('$name', '$email', '$pass', '$gender')";

        $insert_result = mysqli_query($connection, $insert);

        $success = "Successfully Registered !!!";
        header('location:register.php?succ_msg='.$success);

    }


?>