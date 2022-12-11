<?php
include 'connect.php';
$select="SELECT u_id FROM user ORDER BY 1 DESC";
$result=mysqli_query($link, $select);
$ret=  mysqli_fetch_assoc($result);
    $iid = $ret['u_id'];
   $newId = $iid++;
$query="INSERT INTO contact (user_id,con_name,con_email,con_comment)VALUES('$newId','".$_REQUEST['conname']."','".$_REQUEST['conemail']."','".$_REQUEST['comment']."')";
if(mysqli_query($link, $query)){
    $last_id= mysqli_insert_id($link);
    echo'<h2>Contact Registered Successfully, Your Contact ID is:</h2>'.$last_id;
}
 else {
    echo 'error:'.  mysqli_error($link);    
}
?>

