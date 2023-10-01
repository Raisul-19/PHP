<?php
    require 'database.php';

?>

<?php

$id = $_GET['id'];

### for photo delete...

$select = "SELECT photo FROM users WHERE id=$id";
$select_result = mysqli_query($connection, $select);
$after_assoc = mysqli_fetch_assoc($select_result);
$delete_photo = "upload/user/".$after_assoc['photo'];
unlink($delete_photo);


### for database information details.
$delete = "DELETE FROM users WHERE id=$id";
$delete_result = mysqli_query($connection, $delete);

header('location:users.php');


?>