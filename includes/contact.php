<?php 
require('./db.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $q = "INSERT INTO contact_message (name,email,msg) VALUES ('$name','$email','$message')";
    if(mysqli_query($conn,$q)){
        header('Location:../contact.php?msg=done');
    }else{
        header('Location:../contact.php?msg=err');
    }

}
?>