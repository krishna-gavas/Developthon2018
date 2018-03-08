<?php
  session_start();
  require('../include/db.php');
  $id = $_SESSION['id'];

  $date1=date('Y/m/d');
  $date1=date("Y-m-d",strtotime($date1));

  $query1 = "INSERT INTO feedback values('$id','$_POST[clarity]','$_POST[usefullness]','$_POST[understanding]','$_POST[more_info]','$date1')";

  if (mysqli_query($con,$query1)) {
    //$message = "Feedback Entered Successfully";
    //echo "<script>alert('$message')</script>";
    header('Refresh:0;url=addother_info.php');
  }
  else {
      echo mysqli_error($con);
  }
 ?>
