<?php

session_start();
require ('../include/db.php');
		$date1=date('Y/m/d');
		$date1=date("Y-m-d",strtotime($date1));
		$date2=date('h:i:sa');
	 $query1="INSERT INTO engagement values('$_POST[id]','$date1','$date2','$_POST[high_risk]','$_POST[criteria]','$_POST[symptoms]','$_POST[time_spent]','$_POST[topic]')";
   

        //echo $query1.'<br>'.$query2;
       
    		if(mysqli_query($con,$query1))
    		{
    			//$message = "visiting details entered";
				//echo "<script>alert('$message');</script>";
				$_SESSION['id']=$_POST['id'];
    			header('Refresh:0;url=addfeedback.php');
			}
			else
			 echo mysqli_error($con);
    	
    	

?>
