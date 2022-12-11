<?php
include 'connect.php';
$select="SELECT u_id FROM user ORDER BY 1 DESC";
$result=mysqli_query($link, $select);
$ret=  mysqli_fetch_assoc($result);
    $iid = $ret['u_id'];
   $newId = $iid++;
$query="INSERT INTO feedback (user_id,name,email,feedback)VALUES('$newId','".$_REQUEST['fname']."','".$_REQUEST['femail']."','".$_REQUEST['feed']."')";
if(mysqli_query($link, $query)){
    echo '<h2>Thank you for your valuable feedback </h2>';

}
?>

