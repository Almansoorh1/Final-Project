<?php
session_start();
if(!isset($_SESSION['uname'])){
    header("location:login.php");
}
else{
    header("location:home.php");
    echo 'WELCOME !'.$_SESSION['uname'];
}

?>
<a href="logout.php">Log Out</a>