#! /usr/bin/php
<?php

    $date1=date('Y/m/d');
    $date1=date("Y-m-d",strtotime($date1));
    include('way2sms-api.php');

    require '../include/db.php';

    $query = "SELECT * from vacci_details";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result))
    {
        if($row['fid'] == $date1)
            //first injection date is today. send a message
        {
            
            $query2 = "SELECT * from pregnant_details where ID= $row[id]";
            $result2 = mysqli_query($con,$query2);
            $row2 = mysqli_fetch_array($result2);
            $txt = "Hey, Your first injection date is today. Please go get the injection,".$row2['full_name'];
            sendWay2SMS ( "9964441358","M3892C","$row2[phone]","$txt");

        }

        if($row['sid'] == $date1)
        {
            //second injection date is today. send a message
            
            $query2 = "SELECT * from pregnant_details where ID= $row[id]";
            $result2 = mysqli_query($con,$query2);
            $row2 = mysqli_fetch_array($result2);
            $txt = "Hey, Your second injection date is today. Please go get the injection,".$row2[full_name];
            sendWay2SMS ( "9964441358","M3892C","$row2[phone]","$txt");
        }
    }

?>
