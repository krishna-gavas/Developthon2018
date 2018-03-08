<?php

session_start();
require ('../include/db.php');


        //This is the directory where the images will be stored.
        $kycimg = "../images/kycimg/";
        $kycimg = $kycimg . $_POST['id'].'.jpg';

        $images = "../images/image/";
        $images = $images . $_POST['id'].'.jpg';

        //Writes the file name to the server.
        move_uploaded_file($_FILES['kycimg']['tmp_name'], $kycimg);
        move_uploaded_file($_FILES['images']['tmp_name'], $images);

        $query1="INSERT INTO pregnant_details values('$_POST[id]','$_POST[full_name]','$_POST[husband_name]','$kycimg','$_POST[dod]','$_POST[age]','$_POST[phone]','$images','$_POST[taluka]','$_POST[cluster]','$_POST[village]')";
        
        //echo $query1;
        if(mysqli_query($con,$query1))
    	{
    
          //  $message = "Woman registered succesfully!";
            //echo "<script>alert('$message');</script>";
            $_SESSION['id']=$_POST['id'];
            header('Refresh:0;url=medicalinfo.php');
    	
    	}
    	else
    	{
    		$x = mysqli_error($con);
    		$pattern="/^Duplicate entry.*$/";
    		$pattern1="";
    		//echo "Error in inserting data:".mysqli_error($con);
    		if(preg_match($pattern,$x))
    		{
    			echo "<script>alert('Woman ID already registered!')</script>";
    			echo '<script>window.history.back();</script>';
    		}

    	}

?>
