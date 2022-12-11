<?php
include 'connect.php';
$query="DELETE FROM owner WHERE o_id=".$_GET['id'];
if(mysqli_query($link, $query)){
    header("location:showowner.php");
}
?>

