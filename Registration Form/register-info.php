<?php

    require 'header.php';
    require 'database.php';

?>



<?php

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];


    $insert = "INSERT INTO users (name, email, phone, gender) VALUES ('$name', '$email', '$phone', '$gender')";

    $insert_result = mysqli_query($connection, $insert);


    $success = "Successfully submited Information !!!";
    header('location:register_page.php?success='.$success);

?>




<?php

    require 'footer.php';

?>