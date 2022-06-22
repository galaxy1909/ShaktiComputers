<?php 
ob_start();

include('dbconnection.php');
$id=$_REQUEST['bid'];
$s="UPDATE `technician` SET `st` = 0 where `TechnicianId` = '$id' ;";
if(mysqli_query($con,$s)){
    header("Location:btechnician.php");
}

?>