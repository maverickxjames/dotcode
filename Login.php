<?php
$name=$_POST['name'];
$password=$_POST['password'];
$con=new mysqli("localhost","root","","dott");
if($con->connect_error){
    die("Failed to connect :".$con->connect_error);
}
else{
    $stmt=$con->prepare("select * from coder where name=?");
    $stmt->bind_param("s",$name);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data=$stmt_result->fetch_assoc();
        if($data['password']===$password){
            echo "Login successfully";
        }
        else{
            "Invalid Password";
        }
    }
    else{
        echo "Invalid email or password";
    }
}
?>