<?php
include 'connect.php';
$query="DELETE FROM complaints WHERE comp_id=".$_GET['id'];
if(mysqli_query($link, $query)){
    header("location:showcomp.php");
}
?>

