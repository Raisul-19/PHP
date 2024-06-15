<?php

    require 'database.php';    

?>

<?php


$id = $_POST['id'];
$name = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];


if($_FILES['name']['photo']!=''){

    $select = "SELECT * FROM users WHERE is=$id";
    $select_result = mysqli_query($db_connection, $select);
    $after_assoc = mysqli_fetch_assoc($select_result);

    $delete_photo = "uploads/users/".$after_assoc['photo'];
    unlink($delete_photo);

}
else{


    $update = "UPDATE users SET name='$name', email='$email', password='$password', gender='$gender' WHERE id=$id";
    $update_result = mysqli_query($db_connection, $update);

    header('location:users.php');
}

?>