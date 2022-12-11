<?php
include 'connect.php';
//$select="SELECT o_id FROM owner ORDER BY 1 DESC";
//$resu=mysqli_query($link, $select);
//$ret=  mysqli_fetch_assoc($resu);
  //  $iid = $ret['o_id'];
   //$newId = $iid++;

//$sel="SELECT h_id FROM flats ORDER BY 1 DESC";
//$res=mysqli_query($link, $sel);
//$return=  mysqli_fetch_assoc($res);
  //  $id = $return['h_id'];
   //$Id = $id++;
$query="INSERT INTO houseownerdetail (o_id,h_id) VALUES((select MAX(o_id)from owner),(select MAX(h_id) from flats))";
if(mysqli_query($link, $query)){
    header("location:showownerdetail.php");
}
else
{
    echo 'error.'.  mysqli_error($link);
}
?>
