<?php 
include('dbconnection.php');
session_start();
$id=$_REQUEST['aid'];
$tid=$_SESSION['tech'];
$sql="UPDATE tblorder SET `status` = 1  Where `Orderid` = '$id';";
if(mysqli_query($con,$sql)){
           header("Location:accept_order.php");
           
}
?>