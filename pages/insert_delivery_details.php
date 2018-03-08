<?php

session_start();
require ('../include/db.php');
        $query1="INSERT INTO delivery_details values('$_SESSION[id]','$_POST[delivery_place]','$_POST[weight]','$_POST[gravida]','$_POST[mortality]')";
   

        //echo $query1.'<br>'.$query2;
       
    		if(mysqli_query($con,$query1))
    		{
    			$message = "Successfully added details";
    			echo "<script>alert('$message');</script>";
    			header('Refresh:0;url=home.php');
			}
			else
			 echo mysqli_error($con);
    	
    	

?>
