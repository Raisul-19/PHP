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

    $contry = $_POST['contry'];
    
    if(empty($name)){
        $err_msg = "nam lekh beta !";
        header('location:index.php?nam_err='.$err_msg);
    }
    else if(empty($email)){
        $err_msg = "email de beta !";
        header('location:index.php?eml_err='.$err_msg);
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err_msg = "thik thak email de beta !";
        header('location:index.php?eml_err='.$err_msg);

    }

    // else if(!preg_match($regex, $email)){
    //     $err_msg = "thik thak email de beta !";
    //     header('location:index.php?eml_err='.$err_msg);
    // }

    else if(empty($pass)){
        $err_msg = "gupon number de !";
        header('location:index.php?pass_err='.$err_msg);
    }
    else if(!$upper || !$lower || !$number || !$splcr || strlen($pass) < 8){
        $err_msg = "soktisali gupon number de !";
        header('location:index.php?pass_err='.$err_msg);
    }
    else if(empty($rpass)){
        $err_msg = "gupon number de !";
        header('location:index.php?rpass_err='.$err_msg);
    }
    else if($pass != $rpass){
        $err_msg = " vul gupon number disos !";
        header('location:index.php?rpass_err='.$err_msg);
    }

    else if(empty($contry)){
        $err_msg = "desh koi tor ?";
        header('location:index.php?contry_err='.$err_msg);
    }

    else{
        echo "Name : ".$name;
        echo "<br>";
        echo "Email : ".$email;
        echo "<br>";
        echo "password : ".$pass;
        echo "<br>";
        echo "password : ".$rpass;
        echo "<br>";
        echo "Country : ".$contry;
    }


?>