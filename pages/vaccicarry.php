<?php

	session_start();
	require ('../include/db.php');

        $query1="INSERT INTO vacci_details values('$_POST[id]','$_POST[vacci3]','$_POST[vacci4]','$_POST[vacci5]','$_POST[inje_taken]','$_POST[fid]','$_POST[sid]','$_POST[boost]')";
        
		
        //echo $query1;
        if(mysqli_query($con,$query1))
    	{
    
            //$message = "Woman info uploaded succesfully!";
            //echo "<script>alert('$message');</script>";
            header('Refresh:0;url=add_delivery_details.php');
    	
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
