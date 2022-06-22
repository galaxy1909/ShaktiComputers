<?php 
ob_start();
include('dbconnection.php');
$id=$_REQUEST['ubid'];
$s="UPDATE `customer` SET `st`=1 where `CustomerId`='$id';";
if(mysqli_query($con,$s))
{
    header("Location:buser.php");
}
?>