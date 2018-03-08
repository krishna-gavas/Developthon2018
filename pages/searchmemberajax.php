<?php

require ('../include/db.php');

$rows=array();
$state=$_GET['state'];
if($state==1)
{
    $id=$_GET['value'];
    $query="SELECT * FROM pregnant_details where id like '$id%' ";
    $result=mysqli_query($con,$query);
    $var=0;
    while($row=mysqli_fetch_array($result))
    {
        $rows[] = $row;
    }
    echo json_encode($rows);
}
else {
    $name=$_GET['value'];
    $query="SELECT * FROM pregnant_details where full_name like '%$name%'";
    $result=mysqli_query($con,$query);
    $var=0;
    while($row=mysqli_fetch_array($result))
    {
        $rows[] = $row;
    }
    echo json_encode($rows);
}


?>
