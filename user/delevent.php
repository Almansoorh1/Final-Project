<?php
include'connect.php';
$query="DELETE FROM event WHERE e_id=".$_GET['id'];
if(mysqli_query($link, $query)){
    header("location:showevent.php");
}
?>

