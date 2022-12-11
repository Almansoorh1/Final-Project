

<?php
include 'connect.php';
session_start();
$query="SELECT * FROM user WHERE username='".$_REQUEST['uname']."' && password='".$_REQUEST['pwd']."'";

$result=  mysqli_query($link, $query);


$row=  mysqli_fetch_array($result);

if (count($row)>0){
    header("Location:home.php");
    foreach ($result as $value) {
        $_SESSION['uname']=$value['uname'];
    }
}
else
{
    header("location:login.php");
    echo alert('Invalid Username or password...');
}



