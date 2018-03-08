<?php
require ('../include/db.php');
session_start();

$new_password= password_hash($_POST['password1'], PASSWORD_BCRYPT);
$oldpassword=$_POST['oldpassword'];
$email=$_SESSION['email'];
$query="select * from login_details where email='$email'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
if(password_verify($oldpassword,$row['password']))
{
        $query="UPDATE login_details SET password='$new_password' WHERE email='$email'";
        mysqli_query($con,$query);
        $message = "Your password has been reset successfully! Please login to continue!";
        echo "<script>alert('$message');</script>";
        header('Refresh:0;url=./logout.php');
}
else {
    $message = "You entered wrong old password!";
    echo "<script>alert('$message');</script>";
    header('Refresh:0;url=./changepassword.php');
}




?>
