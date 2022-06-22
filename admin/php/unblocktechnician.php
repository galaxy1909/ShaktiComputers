<?php 
ob_start();

include('dbconnection.php');
$id=$_REQUEST['ubid'];
$s="UPDATE `technician` SET `st` = 1 where `TechnicianId` = '$id' ;";
if(mysqli_query($con,$s)){
    header("Location:btechnician.php");
}

?>