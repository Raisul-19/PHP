<?php

    require 'header.php';
    require 'database.php';

?>


<?php

    $id = $_POST['id'];
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $gender = $_POST['gender'];




    $update = "UPDATE users SET name='$name', email='$email', password='$pass', gender='$gender' WHERE id=$id ";

    $update_result = mysqli_query($connection, $update);

    header('location:users.php');



?>