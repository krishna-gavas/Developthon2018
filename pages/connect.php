<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login']))
{

    include('../include/db.php');

    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $query="select * from login_details where email='$email'";

    $result=mysqli_query($con,$query);

    if ( mysqli_num_rows($result) == 0 ){ // User doesn't exist
      $message = "No such email registered!";
      echo "<script>alert('$message');</script>";
      header('Refresh:0;url=../index.php');
    }

    if($row=mysqli_fetch_array($result))
    {
      if(password_verify($password,$row['password']))
      {
        if($email!='admin@admin.com')
        {

        $query="SELECT photo,full_name from user_details WHERE id=$row[id]";
        $result=mysqli_query($con,$query);
        $row1=mysqli_fetch_array($result);
        $_SESSION['photo']= $row1['photo'];
        $_SESSION['name']= $row1['full_name'];
        }
        else {
            $_SESSION['photo']= '../images/admin.png';
            $_SESSION['name']= 'Admin';
        }

        $_SESSION['email'] = $row['email'];
        $_SESSION['logged_in'] = true;
        header('Refresh:0;url=home.php');
      }
      else {
        $message = "Wrong password";
        echo "<script>alert('$message');</script>";
        header('Refresh:0;url=../index.php');
      }
    }
}


?>
