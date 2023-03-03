<?php 
session_start();
if($_SESSION['isAdminLoggedIn'] == "true"){
    $_SESSION['isAdminLoggedIn'] = "false";
    header('Location:../login.php');
}


?>