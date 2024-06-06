<?php

session_start();
if(!isset($_SESSION['loged_in'])){
    header('location:login.php');
}


?>