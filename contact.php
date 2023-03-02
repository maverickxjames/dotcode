<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dotcode";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $sql="insert into contact_message(name,email,msg)
    values('$name','$email','$message')";
    if(mysqli_query($conn,$sql))
    {
        echo "your data has been inserted";
    }
    else{
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>