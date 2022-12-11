<?php
include 'connect.php';
$select="SELECT u_id FROM user ORDER BY 1 DESC";
$result=mysqli_query($link, $select);
$ret=  mysqli_fetch_assoc($result);
    $iid = $ret['u_id'];
   $newId = $iid++;
$query="INSERT INTO event(user_id,title,type,location,time1,time2,name,email,contact1,contact2) VALUES('$newId','".$_REQUEST['etitle']."','".$_REQUEST['etype']."','".$_REQUEST['elocation']."','".$_REQUEST['edate1']."','".$_REQUEST['edate2']."','".$_REQUEST['name']."','".$_REQUEST['email']."','".$_REQUEST['con1']."','".$_REQUEST['con2']."')";
if(mysqli_query($link, $query)){
    header("location:showevent.php"); 
}
?>

