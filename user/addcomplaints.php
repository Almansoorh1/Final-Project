<?php
include 'connect.php';
$select="SELECT u_id FROM user ORDER BY 1 DESC";
$result=mysqli_query($link, $select);
$ret=  mysqli_fetch_assoc($result);
    $iid = $ret['u_id'];
   $newId = $iid++;
$query="INSERT INTO complaints(user_id,title,complaint,date,proceeding_date,proceeded_by,feedback) VALUES ('$newId','".$_REQUEST['ctitle']."','".$_REQUEST['comp']."','".$_REQUEST['date1']."','".$_REQUEST['date2']."',(SELECT MAX(u_id)FROM user ),'".$_REQUEST['feed']."')";
if (mysqli_query($link, $query)){
    $last_id= mysqli_insert_id($link);
    echo'<h2>Complaint Registered Successfully, Your Complaint ID is:</h2>'.$last_id;
}
 else {
    echo 'error:'.  mysqli_error($link);    
}
?>

