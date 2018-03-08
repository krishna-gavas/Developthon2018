<?php

session_start();
require ('../include/db.php');
  $username=$_POST['emailid'];
 
 //This is the directory where the images will be stored.
       $photo = "../images/user/";
        $photo = $photo . $_POST['userno'].'.jpg';
        $username=$_POST['emailid'];

        //Writes the file name to the server.
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
        

        $query1="INSERT INTO user_details values('$_POST[userno]','$_POST[name]','$_POST[doj]','$_POST[gender]','$_POST[phone]','$_POST[village]','$photo','$_POST[address]')";
        $password= password_hash($_POST['password'], PASSWORD_BCRYPT);


        $query2="INSERT INTO login_details values('$_POST[userno]','$username','$password')";

        //echo $query1.'<br>'.$query2;
        if(mysqli_query($con,$query1))
    	{
    		if(mysqli_query($con,$query2))
    		{
    			$message = "User added succesfully!";
    			echo "<script>alert('$message');</script>";
    			header('Refresh:0;url=adduser.php');
    		}
			else
			{ 
				$userno=$_POST['userno'];
				
				$x = mysqli_error($con);
				$pattern="/^Duplicate entry.*$/";
				$pattern1="";
				if(preg_match($pattern,$x))
				{
					echo "<script>alert('Email ID already exist!')</script>";
					$query3="delete  from user_details where id='$userno'";
				    mysqli_query($con,$query3);
					echo '<script>window.history.back();</script>';
				}
			}
    	}
    	else
    	{
    		$x = mysqli_error($con);
    		$pattern="/^Duplicate entry.*$/";
    		$pattern1="";
    		echo "Error in inserting data:".mysqli_error($con);
    		if(preg_match($pattern,$x))
    		{
    			echo "<script>alert('User ID already exist!')</script>";
    			echo '<script>window.history.back();</script>';
    		}

    	}

?>
