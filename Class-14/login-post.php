<?php
session_start();

require 'database.php';



$email = $_POST['email'];
$pass = $_POST['password'];

$select = "SELECT COUNT(*) as login FROM users WHERE email='$email' and password='$pass'";
$select_result = mysqli_query($connection, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['login']==1){
    $_SESSION['loged_in'] = "loged IN";
    setcookie('name', 'value', time()+180);
    header('location:users.php');
}
else{
    $_SESSION['login_error'] = "Invalid email or password";
    header('location:login.php');
}



?>