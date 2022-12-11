<?php
include 'connect.php';
session_start();
$query="INSERT INTO user(fname,lname,email,username,password,questions,ans,cnic,gender ) VALUES ( '".$_REQUEST['firstname']."','".$_REQUEST['lastname']."','".$_REQUEST['emailid']."','".$_REQUEST['uname']."','".$_REQUEST['pass']."','".$_REQUEST['question']."','".$_REQUEST['answer']."','".$_REQUEST['cnicno']."','".$_REQUEST['genders']."')";
if(mysqli_query($link, $query)){
    header("location:login.php");
    echo'record has been created please login';
}
else{
    $_SESSION['uname']="please signup";

}

?>

