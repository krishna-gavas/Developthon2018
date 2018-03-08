<?php
  session_start();
  require('../include/db.php');
  $id = $_SESSION['id'];
  $query1 = "INSERT INTO other_info values('$id','$_POST[latitude]','$_POST[longitude]','$_POST[username]','$_POST[remarks]')";

  if (mysqli_query($con,$query1)) {
    $message = "Information Entered Successfully";
    echo "<script>alert('$message')</script>";
    header('Refresh:0;url=home.php');
  }
  else {
      echo mysqli_error($con);
  }
 ?>
