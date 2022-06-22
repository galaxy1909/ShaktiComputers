<?php 
include('dbconnection.php');
session_start();
$id=$_REQUEST['rid'];
$sql="UPDATE problem SET `status` = NULL , `TechnicianId` = NULL Where `ProblemId` = '$id';";
if(mysqli_query($con,$sql)){
           header("Location:request.php");
           
}
?>