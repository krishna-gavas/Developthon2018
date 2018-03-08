<?php

session_start();
require ('../include/db.php');


        $query1="INSERT INTO medical_info values('$_SESSION[id]','$_POST[hb]','$_POST[bp]','$_POST[weight]','$_POST[urine]','$_POST[fd]','$_POST[sd]')";
        //echo $_POST['fd'];
        //echo $_POST['sd'];
        //echo $query1;
        if(mysqli_query($con,$query1))
    	{
    
           //$message = "Woman medical info uploaded succesfully!";
            //echo "<script>alert('$message');</script>";
            header('Refresh:0;url=vacci.php');
    	
    	}
    	else
    	{
    		$x = mysqli_error($con);
    		$pattern="/^Duplicate entry.*$/";
    		$pattern1="";
    		echo "Error in inserting data:".mysqli_error($con);
    		if(preg_match($pattern,$x))
    		{
    			echo "<script>alert('Woman ID already registered!')</script>";
    			echo '<script>window.history.back();</script>';
    		}

    	}

?>
