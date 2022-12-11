<?php
include 'connect.php';
$select="SELECT u_id FROM user ORDER BY 1 DESC";
$result=mysqli_query($link, $select);
$ret=  mysqli_fetch_assoc($result);
    $iid = $ret['u_id'];
   $newId = $iid++;
$query="INSERT INTO owner(o_name,o_contact1,o_contact2,o_email,o_address,user_id)VALUES('".$_REQUEST['oname']."','".$_REQUEST['con1']."','".$_REQUEST['con2']."','".$_REQUEST['email']."','".$_REQUEST['oadd']."','$newId')";
if(mysqli_query($link, $query)){
    echo 'Record inserted';
    header("location:showowner.php");
}
 else {
    echo 'error.'.  mysqli_error($link);    
}
?>

