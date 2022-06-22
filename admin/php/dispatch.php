<?php 
include('dbconnection.php');
session_start();
$id=$_REQUEST['aid'];
$sql="UPDATE tblorder SET `status` = 2  Where `Orderid` = '$id';";
if(mysqli_query($con,$sql)){
           header("Location:c_s_order.php");
           
}
?>