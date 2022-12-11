<?php
include 'connect.php';
//$query="CREATE TRIGGER u_id after insert on user for each row insert into blocks (u_id,b_title,b_no) values((select u_id from user),'".$_REQUEST['block']."','".$_REQUEST['bno']."')";
$sel="SELECT u_id FROM user ORDER BY 1 DESC";
$res=mysqli_query($link, $sel);
$return=  mysqli_fetch_assoc($res);
    $id = $return['u_id'];
   $Id = $id++;
$query="INSERT INTO blocks (u_id,b_title,b_no) VALUES ('$Id','".$_REQUEST['block']."','".$_REQUEST['bno']."')";
if(mysqli_query($link, $query)){
    echo 'Record Inserted..';
    header("location:showblocks.php");
}
else
{
    echo'Please provide right info..'.  mysqli_error($link);
}