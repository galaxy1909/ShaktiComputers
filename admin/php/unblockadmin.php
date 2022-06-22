<?php 
ob_start();
include('dbconnection.php');
$id=$_REQUEST['ubid'];
$s="UPDATE `admin` SET `st`=1 where `Adminid`='$id';";
if(mysqli_query($con,$s))
{
    header("Location:badmin.php");
}
?>