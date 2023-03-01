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
    $mobile=$_POST['mobile'];
    $sql="insert into edification(name,email,number)
    values('$name','$email','$mobile')";
    if(mysqli_query($conn,$sql))
    {
        include 'index.html';
    }
    else{
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>