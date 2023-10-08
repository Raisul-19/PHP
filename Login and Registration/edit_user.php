<?php

    require 'header.php';
    require 'database.php';


    $id = $_GET['id'];

    $select = "SELECT * FROM users WHERE id=$id";
    $select_result = mysqli_query($db_connection, $select);
    $after_assoc = mysqli_fetch_assoc($select_result);
?>





<?php

    require 'footer.php';


?>