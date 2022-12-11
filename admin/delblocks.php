<?php
include 'connect.php';
$query="DELETE FROM blocks WHERE b_id=".$_GET['id'];
if(mysqli_query($link, $query)){
    header("location:showblocks.php");
}
?>

