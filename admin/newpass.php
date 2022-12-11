<?php
include 'connect.php';
$query="SELECT * FROM user WHERE username='".$_REQUEST['name']."' && questions= '".$_REQUEST['ques']."' && ans='".$_REQUEST['ans']."'";
			
			$result=  mysqli_query($link, $query);
$row=  mysqli_fetch_array($result);
if (count($row)>0){
			{	
				mysqli_query("UPDATE user SET
							password= '".$_REQUEST['newpass']."'");
				header("location: login.php");
			}

			
				
			
}
?>

